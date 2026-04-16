/**
 * Amy's Eden Senior Care — Theme JavaScript
 * ==========================================
 * Handles: navigation, scroll effects, animations,
 *          tabs, FAQ accordion, gallery/lightbox,
 *          counter animation, form submission, lazy loading.
 *
 * Vanilla JS — no jQuery dependency.
 * Uses event delegation where possible.
 */
(function () {
    'use strict';

    /* ------------------------------------------------------------------
       CONFIGURATION
    ------------------------------------------------------------------ */

    var CONFIG = {
        scrollThreshold: 60,           // px before nav gets .scrolled
        revealThreshold: 0.12,         // IntersectionObserver threshold
        revealRootMargin: '0px 0px -40px 0px',
        counterDuration: 2000,         // ms for number animation
        counterThreshold: 0.5,
        debounceDelay: 10              // ms for scroll debounce
    };


    /* ------------------------------------------------------------------
       UTILITIES
    ------------------------------------------------------------------ */

    /**
     * Simple debounce helper.
     */
    function debounce(fn, delay) {
        var timer;
        return function () {
            var context = this;
            var args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(context, args);
            }, delay);
        };
    }

    /**
     * Safely query a single element; returns null if missing.
     */
    function qs(selector, parent) {
        return (parent || document).querySelector(selector);
    }

    /**
     * Safely query all matching elements; returns a real Array.
     */
    function qsa(selector, parent) {
        return Array.prototype.slice.call(
            (parent || document).querySelectorAll(selector)
        );
    }


    /* ------------------------------------------------------------------
       1. NAVBAR SCROLL EFFECT
       Adds .nav--scrolled / .scrolled when the page is scrolled past
       the configured threshold.
    ------------------------------------------------------------------ */

    function initNavScroll() {
        var nav = qs('#nav') || qs('.nav');
        if (!nav) return;

        function handleScroll() {
            var scrolled = window.scrollY > CONFIG.scrollThreshold;
            nav.classList.toggle('nav--scrolled', scrolled);
            nav.classList.toggle('scrolled', scrolled);
        }

        window.addEventListener('scroll', handleScroll, { passive: true });
        // Run once on load in case page is already scrolled (e.g. refresh)
        handleScroll();
    }


    /* ------------------------------------------------------------------
       2. MOBILE MENU TOGGLE
       Supports two markup patterns:
         A) Homepage:  #hamburger + #mobileNav (.active)
         B) Sub-pages: .hamburger / .mobile-menu-btn + .nav-links / .mobile-menu
    ------------------------------------------------------------------ */

    function initMobileMenu() {
        // --- Pattern A: hamburger + overlay mobile nav ---
        var hamburger = qs('#hamburger') || qs('.hamburger');
        var mobileNav = qs('#mobileNav') || qs('.mobile-menu');

        if (hamburger && mobileNav) {
            hamburger.addEventListener('click', function () {
                hamburger.classList.toggle('active');
                hamburger.classList.toggle('open');
                mobileNav.classList.toggle('active');
                mobileNav.classList.toggle('open');
                document.body.style.overflow =
                    mobileNav.classList.contains('active') ||
                    mobileNav.classList.contains('open')
                        ? 'hidden'
                        : '';
            });

            // Close mobile menu when a link inside is clicked (but not submenu toggles)
            qsa('a', mobileNav).forEach(function (link) {
                link.addEventListener('click', function () {
                    closeMobileMenu(hamburger, mobileNav);
                });
            });

            // --- Mobile submenu toggle buttons ---
            qsa('.mobile-submenu-toggle', mobileNav).forEach(function (toggle) {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    var parentLi = toggle.closest('.menu-item-has-children');
                    if (!parentLi) return;

                    // Close other open submenus
                    qsa('.menu-item-has-children.submenu-open', mobileNav).forEach(function (openItem) {
                        if (openItem !== parentLi) {
                            openItem.classList.remove('submenu-open');
                            var btn = qs('.mobile-submenu-toggle', openItem);
                            if (btn) btn.setAttribute('aria-expanded', 'false');
                        }
                    });

                    // Toggle this submenu
                    parentLi.classList.toggle('submenu-open');
                    var isOpen = parentLi.classList.contains('submenu-open');
                    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                });
            });
        }

        // --- Pattern B: toggle .nav-links visibility ---
        var menuBtn = qs('.mobile-menu-btn');
        var navLinks = qs('.nav-links');

        if (menuBtn && navLinks) {
            menuBtn.addEventListener('click', function () {
                navLinks.classList.toggle('active');
            });
        }
    }

    function closeMobileMenu(hamburger, mobileNav) {
        if (hamburger) {
            hamburger.classList.remove('active', 'open');
        }
        if (mobileNav) {
            mobileNav.classList.remove('active', 'open');
        }
        document.body.style.overflow = '';
    }


    /* ------------------------------------------------------------------
       3. SMOOTH SCROLL FOR ANCHOR LINKS
       Accounts for fixed nav height.
    ------------------------------------------------------------------ */

    function initSmoothScroll() {
        document.addEventListener('click', function (e) {
            var anchor = e.target.closest('a[href^="#"]');
            if (!anchor) return;

            var href = anchor.getAttribute('href');
            if (!href || href === '#') return;

            var target;
            try {
                target = document.querySelector(href);
            } catch (_) {
                return; // invalid selector
            }
            if (!target) return;

            e.preventDefault();

            var nav = qs('#nav') || qs('.nav');
            var navHeight = nav ? nav.offsetHeight : 0;
            var top = target.getBoundingClientRect().top + window.pageYOffset - navHeight;

            window.scrollTo({ top: top, behavior: 'smooth' });

            // Close mobile menu if open
            var hamburger = qs('#hamburger') || qs('.hamburger');
            var mobileNav = qs('#mobileNav') || qs('.mobile-menu');
            closeMobileMenu(hamburger, mobileNav);
        });
    }


    /* ------------------------------------------------------------------
       4. SCROLL REVEAL ANIMATIONS (IntersectionObserver)
       Adds .visible to .reveal, .reveal-left, .reveal-right elements
       as they scroll into view.
    ------------------------------------------------------------------ */

    function initScrollReveal() {
        if (!('IntersectionObserver' in window)) {
            // Fallback: show everything immediately
            qsa('.reveal, .reveal-left, .reveal-right').forEach(function (el) {
                el.classList.add('visible');
            });
            return;
        }

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: CONFIG.revealThreshold,
            rootMargin: CONFIG.revealRootMargin
        });

        qsa('.reveal, .reveal-left, .reveal-right').forEach(function (el) {
            observer.observe(el);
        });
    }


    /* ------------------------------------------------------------------
       5. FAQ ACCORDION
       Uses event delegation — clicks anywhere inside .faq-question
       toggle the parent .faq-item open/closed.
       Only one FAQ open at a time within a given container.
    ------------------------------------------------------------------ */

    function initFaqAccordion() {
        document.addEventListener('click', function (e) {
            var question = e.target.closest('.faq-question');
            if (!question) return;

            var item = question.closest('.faq-item');
            if (!item) return;

            var container = item.parentElement;
            var answer = qs('.faq-answer', item);
            var isOpen = item.classList.contains('open') || item.classList.contains('active');

            // Close all siblings in the same container
            qsa('.faq-item', container).forEach(function (sibling) {
                sibling.classList.remove('open', 'active');
                var siblingAnswer = qs('.faq-answer', sibling);
                if (siblingAnswer) {
                    siblingAnswer.style.maxHeight = null;
                }
                // Update ARIA
                var siblingQuestion = qs('.faq-question', sibling);
                if (siblingQuestion) {
                    siblingQuestion.setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle the clicked item
            if (!isOpen && answer) {
                item.classList.add('open', 'active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                question.setAttribute('aria-expanded', 'true');
            }
        });
    }


    /* ------------------------------------------------------------------
       6. TAB SWITCHING (Assisted-Living page)
       Clicking a .tab-btn activates the matching .tab-panel.
    ------------------------------------------------------------------ */

    function initTabs() {
        document.addEventListener('click', function (e) {
            var btn = e.target.closest('.tab-btn');
            if (!btn) return;

            var tabId = btn.getAttribute('data-tab');
            if (!tabId) return;

            // Deactivate all buttons and panels
            qsa('.tab-btn').forEach(function (b) { b.classList.remove('active'); });
            qsa('.tab-panel').forEach(function (p) { p.classList.remove('active'); });

            // Activate clicked button and target panel
            btn.classList.add('active');
            var panel = qs('#tab-' + tabId);
            if (panel) {
                panel.classList.add('active');
            }
        });
    }


    /* ------------------------------------------------------------------
       7. IMAGE GALLERY / LIGHTBOX
       Opens a lightbox overlay when a .gallery-item is clicked.
       Closes on click, Escape key, or close button.
    ------------------------------------------------------------------ */

    function initLightbox() {
        var lightbox = qs('#lightbox') || qs('.lightbox');
        if (!lightbox) return;

        var lightboxImg = qs('#lightboxImg') || qs('.lightbox img');
        var closeBtn = qs('.lightbox-close', lightbox);

        function openLightbox(src) {
            if (lightboxImg) {
                lightboxImg.src = src;
            }
            lightbox.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('open');
            document.body.style.overflow = '';
            if (lightboxImg) {
                lightboxImg.src = '';
            }
        }

        // Delegate gallery item clicks
        document.addEventListener('click', function (e) {
            var galleryItem = e.target.closest('.gallery-item');
            if (!galleryItem) return;

            var img = qs('img', galleryItem);
            if (img) {
                openLightbox(img.src);
            }
        });

        // Close on overlay click
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Close on button click
        if (closeBtn) {
            closeBtn.addEventListener('click', closeLightbox);
        }

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });
    }


    /* ------------------------------------------------------------------
       8. COUNTER ANIMATION
       Animates elements with [data-count] attribute from 0 to the
       target number when they scroll into view.
    ------------------------------------------------------------------ */

    function initCounters() {
        var counterElements = qsa('[data-count]');
        if (!counterElements.length) return;

        if (!('IntersectionObserver' in window)) {
            // Fallback: just show final numbers
            counterElements.forEach(function (el) {
                el.textContent = el.getAttribute('data-count') + (el.textContent.indexOf('+') !== -1 ? '+' : '');
            });
            return;
        }

        function animateCounter(element, target, suffix) {
            suffix = suffix || '';
            var startTime = null;
            var duration = CONFIG.counterDuration;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = Math.min((timestamp - startTime) / duration, 1);
                // Ease-out cubic
                var eased = 1 - Math.pow(1 - progress, 3);
                var current = Math.floor(eased * target);
                element.textContent = current + suffix;

                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    element.textContent = target + suffix;
                }
            }

            requestAnimationFrame(step);
        }

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    var target = parseInt(el.getAttribute('data-count'), 10);
                    var text = el.textContent || '';
                    var suffix = text.indexOf('+') !== -1 ? '+' : '';
                    if (!suffix) {
                        suffix = text.indexOf('%') !== -1 ? '%' : '';
                    }
                    animateCounter(el, target, suffix);
                    observer.unobserve(el);
                }
            });
        }, { threshold: CONFIG.counterThreshold });

        counterElements.forEach(function (el) {
            observer.observe(el);
        });
    }


    /* ------------------------------------------------------------------
       9. FORM SUBMISSION HANDLER — AJAX to Slack/email via wp-admin-ajax
       Applies to any form with class .amyseden-form. Requires the
       global `amyseden` object (ajaxurl + nonce) set via wp_localize_script.
    ------------------------------------------------------------------ */

    function initFormHandler() {
        var forms = qsa('.amyseden-form, #contact-form, #contactForm, .contact-form');

        forms.forEach(function (form) {
            // Avoid double-binding if a form matches multiple selectors
            if (form.dataset.amysedenBound) return;
            form.dataset.amysedenBound = '1';

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                var btn = qs('.contact-submit-btn, .form-submit, [type="submit"]', form);
                var statusEl = qs('.form-status', form);
                if (!btn) return;

                var originalText = btn.textContent;

                function setStatus(message, type) {
                    if (!statusEl) return;
                    statusEl.textContent = message;
                    statusEl.className = 'form-status form-status--' + (type || 'info');
                }

                // Basic client-side validation
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }

                // Honeypot check on the client side too
                var honeypot = qs('input[name="website"]', form);
                if (honeypot && honeypot.value) {
                    // Silently succeed to confuse bots
                    setStatus('Thank you! We\'ll be in touch soon.', 'success');
                    form.reset();
                    return;
                }

                btn.disabled = true;
                btn.textContent = 'Sending…';
                setStatus('', 'info');

                var formData = new FormData(form);
                formData.append('action', 'amyseden_contact');

                // Use nonce from localized data; fall back to the field if present
                if (typeof amyseden !== 'undefined' && amyseden.nonce) {
                    formData.set('nonce', amyseden.nonce);
                } else {
                    var nonceField = qs('input[name="amyseden_contact_nonce_field"]', form);
                    if (nonceField) formData.set('nonce', nonceField.value);
                }

                var ajaxUrl = (typeof amyseden !== 'undefined' && amyseden.ajaxurl)
                    ? amyseden.ajaxurl
                    : '/wp-admin/admin-ajax.php';

                fetch(ajaxUrl, {
                    method: 'POST',
                    credentials: 'same-origin',
                    body: formData
                })
                    .then(function (res) { return res.json().catch(function () { return null; }); })
                    .then(function (data) {
                        if (data && data.success) {
                            setStatus((data.data && data.data.message) || 'Thank you! We\'ll be in touch soon.', 'success');
                            form.reset();
                            btn.textContent = 'Sent ✓';
                            // Re-enable after a few seconds so users can submit again
                            setTimeout(function () {
                                btn.disabled = false;
                                btn.textContent = originalText;
                            }, 4000);
                        } else {
                            var msg = (data && data.data && data.data.message) || 'Something went wrong. Please try again or call us.';
                            setStatus(msg, 'error');
                            btn.disabled = false;
                            btn.textContent = originalText;
                        }
                    })
                    .catch(function () {
                        setStatus('Network error. Please try again or call us directly.', 'error');
                        btn.disabled = false;
                        btn.textContent = originalText;
                    });
            });
        });
    }


    /* ------------------------------------------------------------------
       10. LAZY LOADING ENHANCEMENT
       Adds native lazy loading attribute to images that don't already
       have it. For browsers without support, images load normally.
    ------------------------------------------------------------------ */

    function initLazyLoading() {
        // Only enhance images below the fold (skip hero images)
        var images = qsa('img:not([loading])');

        images.forEach(function (img) {
            // Skip images in the hero section (they should load eagerly)
            if (img.closest('.hero, .hero__bg, .hero-bg')) return;
            img.setAttribute('loading', 'lazy');
        });
    }


    /* ------------------------------------------------------------------
       11. GALLERY CAROUSEL NAVIGATION
       Handles prev/next buttons for the scrollable gallery track.
    ------------------------------------------------------------------ */

    function initGalleryCarousel() {
        var prevBtn = qs('.gallery-nav button:first-child, .gallery-prev');
        var nextBtn = qs('.gallery-nav button:last-child, .gallery-next');
        var track = qs('.gallery-track');

        if (!track || (!prevBtn && !nextBtn)) return;

        var scrollAmount = 340; // approx card width + gap

        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
        }
    }


    /* ------------------------------------------------------------------
       12. ACTIVE NAV LINK HIGHLIGHTING
       Highlights the current page's nav link based on the URL path.
    ------------------------------------------------------------------ */

    function initActiveNavLink() {
        var path = window.location.pathname;

        qsa('.nav__link, .nav-links a').forEach(function (link) {
            var href = link.getAttribute('href');
            if (!href) return;

            // Strip trailing slashes for comparison
            var cleanPath = path.replace(/\/$/, '');
            var cleanHref = href.replace(/\/$/, '');

            if (cleanPath === cleanHref ||
                (cleanHref !== '' && cleanHref !== '/' && cleanPath.indexOf(cleanHref) !== -1)) {
                link.classList.add('active');
            }
        });
    }


    /* ------------------------------------------------------------------
       13. REDUCED MOTION SUPPORT
       Respects prefers-reduced-motion by disabling animations.
    ------------------------------------------------------------------ */

    function checkReducedMotion() {
        if (window.matchMedia &&
            window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            // Show all reveal elements immediately
            qsa('.reveal, .reveal-left, .reveal-right').forEach(function (el) {
                el.style.transition = 'none';
                el.classList.add('visible');
            });

            // Pause gallery auto-scroll
            qsa('.gallery__track').forEach(function (track) {
                track.style.animationPlayState = 'paused';
            });
        }
    }


    /* ------------------------------------------------------------------
       14. ANNOUNCEMENT BAR / NAV OFFSET
       Dynamically positions the fixed nav below the announcement bar
       and collapses the offset as the user scrolls past the bar.
    ------------------------------------------------------------------ */

    function initAnnouncementBarOffset() {
        var bar = qs('.announcement-bar');
        var nav = qs('#nav') || qs('.nav');
        if (!bar || !nav) return;

        var barHeight = bar.offsetHeight;

        // Set CSS custom property for hero padding
        document.documentElement.style.setProperty('--announcement-bar-height', barHeight + 'px');

        function updateOffset() {
            var scrollY = window.scrollY || window.pageYOffset;
            var offset = Math.max(0, barHeight - scrollY);
            document.documentElement.style.setProperty('--announcement-offset', offset + 'px');
        }

        updateOffset();
        window.addEventListener('scroll', updateOffset, { passive: true });

        // Recalculate on resize (bar height may change on mobile)
        window.addEventListener('resize', debounce(function () {
            barHeight = bar.offsetHeight;
            document.documentElement.style.setProperty('--announcement-bar-height', barHeight + 'px');
            updateOffset();
        }, 150));
    }


    /* ------------------------------------------------------------------
       15. YOUTUBE OVERLAY CLICK-TO-PLAY
       Shows a thumbnail with play button. On click, replaces with
       the YouTube iframe for a better-looking initial presentation.
    ------------------------------------------------------------------ */

    function initVideoOverlay() {
        var overlays = qsa('.video-section__overlay');

        overlays.forEach(function (overlay) {
            function loadVideo() {
                var embed = overlay.closest('.video-section__embed');
                if (!embed) return;

                var videoId = embed.getAttribute('data-video-id');
                if (!videoId) return;

                var iframe = document.createElement('iframe');
                iframe.src = 'https://www.youtube.com/embed/' + videoId + '?rel=0&modestbranding=1&autoplay=1';
                iframe.title = overlay.getAttribute('aria-label') || 'Video';
                iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
                iframe.allowFullscreen = true;
                iframe.style.width = '100%';
                iframe.style.height = '100%';
                iframe.style.position = 'absolute';
                iframe.style.top = '0';
                iframe.style.left = '0';
                iframe.style.border = 'none';

                // Replace overlay with iframe
                overlay.remove();
                embed.appendChild(iframe);
            }

            overlay.addEventListener('click', loadVideo);
            overlay.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    loadVideo();
                }
            });
        });
    }


    /* ------------------------------------------------------------------
       INITIALIZATION
       Runs all module initializers on DOMContentLoaded.
    ------------------------------------------------------------------ */

    function init() {
        initAnnouncementBarOffset();
        initNavScroll();
        initMobileMenu();
        initSmoothScroll();
        initScrollReveal();
        initFaqAccordion();
        initTabs();
        initLightbox();
        initCounters();
        initFormHandler();
        initLazyLoading();
        initGalleryCarousel();
        initActiveNavLink();
        initVideoOverlay();
        checkReducedMotion();
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        // DOM already loaded (e.g. deferred script)
        init();
    }

})();
