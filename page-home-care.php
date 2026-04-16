<?php
/**
 * Template Name: Home Care
 * Template for the Home Care landing page
 */
get_header();

$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
$hc_hero_bg = get_theme_mod('amyseden_hc_hero_bg', 'https://amyseden.com/wp-content/uploads/2025/04/Hero.png');
?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg">
      <img src="<?php echo esc_url($hc_hero_bg); ?>" alt="Compassionate in-home senior care by Amy's Eden" loading="eager" width="1920" height="1080">
    </div>
    <div class="hero-content">
      <div class="hero-badge">In-Home Care Services</div>
      <h1>Premium In-Home Care<br><span class="accent">That Comes to You</span></h1>
      <p>Professional, compassionate caregivers providing personalized care in the comfort of your own home &mdash; serving Reno &amp; Carson City.</p>
      <div class="hero-ctas">
        <a href="#contact" class="btn-primary">Get Started Today</a>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn-secondary">Call <?php echo esc_html($phone); ?></a>
      </div>
    </div>
  </section>

  <!-- TRUST BAR -->
  <div class="trust-bar reveal">
    <div class="trust-item">
      <div class="trust-number">13+</div>
      <div class="trust-label">Years of Care</div>
    </div>
    <div class="trust-item">
      <div class="trust-number">12</div>
      <div class="trust-label">Licensed Homes</div>
    </div>
    <div class="trust-item">
      <div class="trust-number">24/7</div>
      <div class="trust-label">Availability</div>
    </div>
    <div class="trust-item">
      <div class="trust-number">100%</div>
      <div class="trust-label">Personalized Plans</div>
    </div>
  </div>

  <!-- HOME CARE OVERVIEW (two-column with stacked photos) -->
  <section class="section overview-section">
    <div class="overview-grid reveal">
      <div class="overview-image-stack">
        <img class="img-main" src="https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp" alt="Amy's Eden caregiver providing in-home care" loading="lazy" width="600" height="450">
        <img class="img-accent" src="https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp" alt="Personal care assistance at home" loading="lazy" width="280" height="210">
      </div>
      <div class="overview-content">
        <span class="section-label">About Our Home Care</span>
        <h3>Compassionate Care in the Comfort of Home</h3>
        <p>At Amy's Eden, we believe everyone deserves to age with dignity in the place they feel most comfortable &mdash; home. Our professional caregivers bring warmth, expertise, and genuine compassion directly to your door.</p>
        <p>Whether your loved one needs a few hours of help each week or comprehensive daily support, our personalized approach ensures they receive exactly the care they need, exactly when they need it.</p>
        <a href="#contact" class="btn-primary" style="margin-top: 12px;">Schedule a Free Assessment</a>
      </div>
    </div>
  </section>

  <!-- WHY AMY'S EDEN HOME CARE (photo sidebar + cards) -->
  <section class="section why-us">
    <div class="section-header reveal">
      <span class="section-label">Why Choose Us</span>
      <h2>Why Amy's Eden Home Care</h2>
      <p>Our caregivers are more than qualified &mdash; they're compassionate professionals who treat your loved ones like family.</p>
      <div class="accent-line"></div>
    </div>
    <div class="why-us-layout">
      <div class="why-us-photo reveal">
        <img src="https://amyseden.com/wp-content/uploads/2025/06/Untitled-design-23-1.webp" alt="Compassionate Amy's Eden caregiver with senior" loading="lazy" width="400" height="520">
      </div>
      <div class="usp-grid">
        <div class="usp-card reveal">
          <div class="usp-icon">&#128101;</div>
          <h3>Trained &amp; Vetted Caregivers</h3>
          <p>Every caregiver undergoes rigorous background checks, training, and ongoing education to deliver the highest standard of care.</p>
        </div>
        <div class="usp-card reveal">
          <div class="usp-icon">&#128203;</div>
          <h3>Personalized Care Plans</h3>
          <p>No two clients are alike. We create customized care plans tailored to your loved one's unique needs, preferences, and routines.</p>
        </div>
        <div class="usp-card reveal">
          <div class="usp-icon">&#128336;</div>
          <h3>Flexible Scheduling</h3>
          <p>From a few hours a week to full-time 24/7 care, we offer flexible scheduling options that adapt as your needs change.</p>
        </div>
        <div class="usp-card reveal">
          <div class="usp-icon">&#128138;</div>
          <h3>Medication Management</h3>
          <p>We ensure medications are taken correctly and on time, coordinating with physicians and pharmacies for seamless management.</p>
        </div>
        <div class="usp-card reveal">
          <div class="usp-icon">&#127774;</div>
          <h3>Companion Care &amp; Activities</h3>
          <p>Beyond physical care, we provide meaningful companionship, engaging activities, and social interaction to enhance quality of life.</p>
        </div>
        <div class="usp-card reveal">
          <div class="usp-icon">&#129657;</div>
          <h3>Coordination with Medical Teams</h3>
          <p>We work directly with your loved one's doctors, therapists, and specialists to ensure a cohesive, comprehensive approach to care.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PHOTO STRIP -->
  <div class="photo-strip">
    <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png" alt="Senior care moments at Amy's Eden" loading="lazy">
    <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png" alt="Caregiver providing personal attention" loading="lazy">
    <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-58.png" alt="Quality senior care in Nevada" loading="lazy">
  </div>

  <!-- SERVICES GRID (with feature photo + text row) -->
  <section class="section services-section">
    <div class="section-header reveal">
      <span class="section-label">Our Services</span>
      <h2>Comprehensive Home Care Services</h2>
      <p>From daily personal care to specialized medical support, we provide the full spectrum of in-home care services.</p>
      <div class="accent-line"></div>
    </div>
    <div class="services-layout">
      <div class="services-top-row reveal">
        <div class="services-feature-photo">
          <img src="https://amyseden.com/wp-content/uploads/2023/08/pillr-page-image-1-web.png" alt="Professional in-home care services" loading="lazy">
        </div>
        <div class="services-feature-text">
          <span class="section-label">Tailored to You</span>
          <h3>Every Service, Personalized to Your Family</h3>
          <p>We don't believe in one-size-fits-all care. Each service we provide is customized around your loved one's unique needs, preferences, daily routines, and health goals. From the first assessment to ongoing care, everything is built around them.</p>
        </div>
      </div>
      <div class="services-grid">
        <div class="service-card reveal">
          <span class="service-icon">&#128704;</span>
          <h3>Personal Care</h3>
          <p>Dignified assistance with bathing, grooming, dressing, and mobility to maintain comfort and independence.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#128149;</span>
          <h3>Companion Care</h3>
          <p>Meaningful conversation, engaging activities, and accompanied outings to prevent isolation and bring joy.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#128138;</span>
          <h3>Medication Management</h3>
          <p>Accurate medication reminders, administration, and coordination with healthcare providers.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#127860;</span>
          <h3>Meal Preparation &amp; Nutrition</h3>
          <p>Nutritious, home-cooked meals prepared to dietary needs and personal preferences.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#10024;</span>
          <h3>Light Housekeeping &amp; Laundry</h3>
          <p>Maintaining a clean, safe, and comfortable home environment including laundry, dishes, and tidying.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#128663;</span>
          <h3>Transportation &amp; Errands</h3>
          <p>Safe transportation to appointments, social events, shopping, and other errands.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#128156;</span>
          <h3>Respite Care</h3>
          <p>Giving family caregivers well-deserved breaks while ensuring your loved one is in expert hands.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#127942;</span>
          <h3>Post-Surgery &amp; Rehabilitation</h3>
          <p>Specialized support during recovery, following care plans from surgeons and therapists.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#128200;</span>
          <h3>Chronic Disease Management</h3>
          <p>Ongoing support for diabetes, heart conditions, COPD, and other chronic conditions.</p>
        </div>
        <div class="service-card reveal">
          <span class="service-icon">&#128330;</span>
          <h3>Hospice Support Care</h3>
          <p>Compassionate support for end-of-life care, working alongside hospice teams to provide comfort and dignity.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CARE IN ACTION GALLERY / CAROUSEL -->
  <section class="section gallery-section">
    <div class="section-header reveal">
      <span class="section-label">Care in Action</span>
      <h2>See the Amy's Eden Difference</h2>
      <p>A glimpse into the compassionate, hands-on care our team provides every day.</p>
      <div class="accent-line"></div>
    </div>
    <div class="gallery-track-wrapper">
      <div class="gallery-track" id="galleryTrack">
        <div class="gallery-card reveal">
          <img src="https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp" alt="In-home care assistance" loading="lazy">
          <div class="gallery-caption">Personalized in-home care</div>
        </div>
        <div class="gallery-card reveal">
          <img src="https://amyseden.com/wp-content/uploads/2025/01/1.jpg" alt="Caregiver and senior interaction" loading="lazy">
          <div class="gallery-caption">Building meaningful connections</div>
        </div>
        <div class="gallery-card reveal">
          <img src="https://amyseden.com/wp-content/uploads/2025/01/2.jpg" alt="Compassionate senior care" loading="lazy">
          <div class="gallery-caption">Compassionate daily support</div>
        </div>
        <div class="gallery-card reveal">
          <img src="https://amyseden.com/wp-content/uploads/2024/12/home-care_1.png" alt="Home care services" loading="lazy">
          <div class="gallery-caption">Comfort of home, quality of care</div>
        </div>
        <div class="gallery-card reveal">
          <img src="https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp" alt="Personal attention for seniors" loading="lazy">
          <div class="gallery-caption">One-on-one personal attention</div>
        </div>
        <div class="gallery-card reveal">
          <img src="https://amyseden.com/wp-content/uploads/2024/03/word-image-47518-3.jpeg" alt="Senior care activities" loading="lazy">
          <div class="gallery-caption">Engaging activities every day</div>
        </div>
        <div class="gallery-card reveal">
          <img src="https://amyseden.com/wp-content/uploads/2025/06/Untitled-design-23-1.webp" alt="Quality care environment" loading="lazy">
          <div class="gallery-caption">Warmth and dignity always</div>
        </div>
        <div class="gallery-card reveal">
          <img src="https://amyseden.com/wp-content/uploads/2023/08/pillr-page-image-1-web.png" alt="Professional caregiving team" loading="lazy">
          <div class="gallery-caption">Professional caregiving team</div>
        </div>
      </div>
    </div>
    <div class="gallery-nav">
      <button onclick="document.getElementById('galleryTrack').scrollBy({left:-340,behavior:'smooth'})" aria-label="Scroll gallery left">&#8592;</button>
      <button onclick="document.getElementById('galleryTrack').scrollBy({left:340,behavior:'smooth'})" aria-label="Scroll gallery right">&#8594;</button>
    </div>
  </section>

  <!-- CROSS-SELL: TWO-RESIDENT HOME (with mini gallery) -->
  <section class="section cross-sell">
    <div class="cross-sell-wrapper">
      <div class="cross-sell-content reveal">
        <div class="badge-outline">When Needs Change</div>
        <h2>When Home Care Isn't Enough</h2>
        <p>When 24-hour in-home care becomes too costly or complex, our Two-Resident Home&trade; provides the same personal attention at a fraction of the cost &mdash; in a beautiful, licensed home setting.</p>
        <div class="cross-sell-stats">
          <div class="cross-sell-stat">
            <strong>2:1</strong>
            <span>Resident-to-Caregiver</span>
          </div>
          <div class="cross-sell-stat">
            <strong>24/7</strong>
            <span>Dedicated Caregiver</span>
          </div>
          <div class="cross-sell-stat">
            <strong>12</strong>
            <span>Licensed Homes</span>
          </div>
        </div>
        <p style="font-size: 15px; color: var(--text-secondary); margin-bottom: 28px;">Our signature Two-Resident Home&trade; model means just two residents share one dedicated caregiver in a real home &mdash; not a facility. It's the best of both worlds: professional 24/7 care with the warmth of home.</p>
        <a href="in-home-care-and-in-home-like-care.html" class="btn-primary">Explore Our Two-Resident Homes &rarr;</a>
      </div>
      <div class="cross-sell-gallery reveal">
        <img class="cs-wide" src="https://amyseden.com/wp-content/uploads/2025/05/1.webp" alt="Amy's Eden Two-Resident Home exterior" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/2.webp" alt="Beautiful home interior" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/3.webp" alt="Comfortable living space" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/4.webp" alt="Cozy bedroom" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/5.webp" alt="Dining area" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/6.webp" alt="Kitchen and common area" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/7.webp" alt="Garden and outdoor space" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/10-1.webp" alt="Home interior details" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/11.webp" alt="Welcoming home entrance" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/12.webp" alt="Comfortable resident room" loading="lazy">
        <img class="cs-wide" src="https://amyseden.com/wp-content/uploads/2025/05/8.webp" alt="Beautiful backyard" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/9.webp" alt="Home amenities" loading="lazy">
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS (with photo sidebar) -->
  <section class="section testimonials">
    <div class="section-header reveal">
      <span class="section-label">Testimonials</span>
      <h2>Families Trust Amy's Eden</h2>
      <p>Hear from families who have experienced the Amy's Eden difference firsthand.</p>
      <div class="accent-line"></div>
    </div>
    <div class="testimonials-layout">
      <div class="testimonial-photo-col reveal">
        <img src="https://amyseden.com/wp-content/uploads/2025/01/1.jpg" alt="Happy family with Amy's Eden care" loading="lazy" width="400" height="500">
      </div>
      <div class="testimonials-grid">
        <div class="testimonial-card reveal">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <blockquote>"The caregivers at Amy's Eden treat my mother like she's their own family. The level of personal attention is something we could never find at a large facility."</blockquote>
          <div class="testimonial-author">Sarah M.</div>
          <div class="testimonial-role">Daughter of Resident &middot; Reno, NV</div>
        </div>
        <div class="testimonial-card reveal">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <blockquote>"After my father's surgery, Amy's Eden provided incredible in-home care during his recovery. Professional, punctual, and genuinely caring. We couldn't ask for more."</blockquote>
          <div class="testimonial-author">Michael T.</div>
          <div class="testimonial-role">Son of Client &middot; Carson City, NV</div>
        </div>
        <div class="testimonial-card reveal">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <blockquote>"We started with home care and eventually moved Mom to one of their Two-Resident Homes. The transition was seamless because we already knew and trusted the team."</blockquote>
          <div class="testimonial-author">Jennifer L.</div>
          <div class="testimonial-role">Daughter of Resident &middot; Reno, NV</div>
        </div>
      </div>
    </div>
  </section>

  <!-- GETTING STARTED PROCESS (with photo grid) -->
  <section class="section process-section">
    <div class="section-header reveal">
      <span class="section-label">Getting Started</span>
      <h2>Three Simple Steps</h2>
      <p>Beginning care with Amy's Eden is easy. We guide you through every step with compassion and clarity.</p>
      <div class="accent-line"></div>
    </div>
    <div class="process-grid">
      <div class="process-photos reveal">
        <img src="https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp" alt="Getting started with Amy's Eden care services" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2024/03/word-image-47518-3.jpeg" alt="Care assessment process" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/01/2.jpg" alt="Caregiver beginning care" loading="lazy">
      </div>
      <div class="process-steps">
        <div class="process-step reveal">
          <div class="step-number">1</div>
          <div>
            <h3>Call Us</h3>
            <p>Reach out by phone or through our contact form. We'll listen to your needs and answer all your questions.</p>
          </div>
        </div>
        <div class="process-step reveal">
          <div class="step-number">2</div>
          <div>
            <h3>Free Assessment</h3>
            <p>We conduct a comprehensive in-home assessment to understand your loved one's needs, preferences, and goals.</p>
          </div>
        </div>
        <div class="process-step reveal">
          <div class="step-number">3</div>
          <div>
            <h3>Care Begins</h3>
            <p>Your personalized care plan is created and matched with the ideal caregiver. Compassionate care starts right away.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM -->
  <section class="section contact-section" id="contact">
    <div class="section-header reveal">
      <span class="section-label">Contact Us</span>
      <h2>Start the Conversation</h2>
      <p>Ready to explore home care for your loved one? Fill out the form below and we'll reach out within 24 hours.</p>
      <div class="accent-line"></div>
    </div>
    <div class="contact-grid">
      <div class="contact-info reveal">
        <h3>We're Here to Help</h3>
        <p>Whether you need a few hours of help each week or full-time care, we'll work with you to find the perfect solution for your family.</p>
        <div class="contact-detail">
          <div class="contact-detail-icon">&#128222;</div>
          <div class="contact-detail-text">
            <strong>Phone</strong>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="color: var(--coral); text-decoration: none; font-weight: 500;"><?php echo esc_html($phone); ?></a>
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-detail-icon">&#128205;</div>
          <div class="contact-detail-text">
            <strong>Service Areas</strong>
            Reno &amp; Carson City, Nevada
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-detail-icon">&#128336;</div>
          <div class="contact-detail-text">
            <strong>Availability</strong>
            24 hours a day, 7 days a week
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-detail-icon">&#127968;</div>
          <div class="contact-detail-text">
            <strong>Licensed Homes</strong>
            12 homes across Reno &amp; Carson City
          </div>
        </div>
        <div style="margin-top: 28px;">
          <img src="https://amyseden.com/wp-content/uploads/2024/12/home-care_1.png" alt="In-home care services by Amy's Eden" style="border-radius: 12px; box-shadow: var(--shadow-card); width: 100%; max-width: 400px;" loading="lazy">
        </div>
      </div>
      <div class="contact-form-card reveal">
        <form action="#" method="POST" onsubmit="return false;">
          <div class="form-grid">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Your full name" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" placeholder="(775) 000-0000" required>
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="you@email.com" required>
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <select id="location" name="location">
                <option value="">Select area</option>
                <option value="reno">Reno, NV</option>
                <option value="carson-city">Carson City, NV</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group full">
              <label for="interest">I'm Interested In</label>
              <select id="interest" name="interest">
                <option value="">Select an option</option>
                <option value="home-care">In-Home Care</option>
                <option value="two-resident">Two-Resident Home&trade; Assisted Living</option>
                <option value="respite">Respite Care</option>
                <option value="not-sure">Not Sure Yet</option>
              </select>
            </div>
            <div class="form-group full">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Tell us about your loved one's needs..."></textarea>
            </div>
          </div>
          <button type="submit" class="btn-primary form-submit">Request a Free Consultation</button>
        </form>
      </div>
    </div>
  </section>

  <!-- FAQ (with photo sidebar) -->
  <section class="section faq-section">
    <div class="section-header reveal">
      <span class="section-label">Common Questions</span>
      <h2>Frequently Asked Questions</h2>
      <p>Find answers to common questions about our in-home care services.</p>
      <div class="accent-line"></div>
    </div>
    <div class="faq-layout">
      <div class="faq-photo reveal">
        <img src="https://amyseden.com/wp-content/uploads/2025/01/2.jpg" alt="Caring moments at Amy's Eden" loading="lazy" width="400" height="500">
      </div>
      <div class="faq-grid">
        <div class="faq-item reveal">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('active')" aria-expanded="false">
            <h3>What home care services do you offer?</h3>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>We offer a comprehensive range of in-home care services including personal care (bathing, grooming, mobility assistance), companion care, medication management, meal preparation, light housekeeping, transportation, respite care, post-surgery support, chronic disease management, and hospice support care.</p>
          </div>
        </div>
        <div class="faq-item reveal">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('active')" aria-expanded="false">
            <h3>How are your caregivers selected and trained?</h3>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>Every caregiver undergoes a thorough background check, reference verification, and skills assessment. They receive ongoing training in senior care best practices, safety protocols, and specialized areas like dementia care. We handpick caregivers who demonstrate not just skill, but genuine compassion.</p>
          </div>
        </div>
        <div class="faq-item reveal">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('active')" aria-expanded="false">
            <h3>Can I choose my schedule (hourly, daily, overnight)?</h3>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>Absolutely. We offer fully flexible scheduling to meet your needs &mdash; from a few hours per week to full 24/7 live-in care. Whether you need morning assistance, overnight supervision, or weekend coverage, we'll create a schedule that works for your family.</p>
          </div>
        </div>
        <div class="faq-item reveal">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('active')" aria-expanded="false">
            <h3>What if my loved one's needs change over time?</h3>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>Care plans are living documents that evolve with your loved one. We conduct regular reassessments and adjust services as needs change. If full-time care becomes necessary, we can also facilitate a seamless transition to one of our Two-Resident Homes&trade;.</p>
          </div>
        </div>
        <div class="faq-item reveal">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('active')" aria-expanded="false">
            <h3>Do you serve both Reno and Carson City?</h3>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>Yes, we provide in-home care services throughout Reno and Carson City, Nevada. With 12 licensed homes and a large team of caregivers across both cities, we can serve families in the greater Northern Nevada area.</p>
          </div>
        </div>
        <div class="faq-item reveal">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('active')" aria-expanded="false">
            <h3>What's the difference between home care and your Two-Resident Homes?</h3>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>Home care means a caregiver comes to your loved one's home on a scheduled basis. Our Two-Resident Home&trade; is our signature assisted living model where just two residents live in a licensed home with a dedicated 24/7 caregiver. It's ideal when full-time in-home care becomes too expensive or when more intensive, round-the-clock support is needed.</p>
          </div>
        </div>
        <div class="faq-item reveal">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('active')" aria-expanded="false">
            <h3>How do I get started?</h3>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>Simply call us at <?php echo esc_html($phone); ?> or fill out the contact form on this page. We'll schedule a free in-home assessment, discuss your needs, and create a personalized care plan. Most families can begin care within days of the initial consultation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="final-cta">
    <div class="final-cta-inner reveal">
      <div class="final-cta-bg">
        <img src="https://amyseden.com/wp-content/uploads/2025/04/Hero.png" alt="" loading="lazy" aria-hidden="true">
      </div>
      <span class="section-label">Take the First Step</span>
      <h2>Your Loved One Deserves<br>Exceptional Care</h2>
      <p>Let's discuss how Amy's Eden can provide the personalized, premium home care your family needs.</p>
      <div class="hero-ctas">
        <a href="#contact" class="btn-primary">Request a Free Consultation</a>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn-secondary">Call <?php echo esc_html($phone); ?></a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
