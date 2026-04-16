<?php
/**
 * Template Name: Compare Care Options
 * Template for the In-Home Care vs In-Home-Like Care comparison page
 */
get_header();

$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
$comp_hero_bg = get_theme_mod('amyseden_comparison_hero_bg', 'https://amyseden.com/wp-content/uploads/2025/05/5.webp');
?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg">
      <img src="<?php echo esc_url($comp_hero_bg); ?>" alt="Senior care by Amy's Eden" loading="eager">
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="hero-badge">Reno &amp; Carson City, Nevada</div>
      <h1>Two Ways to Experience<br><span class="accent">Premium Care</span></h1>
      <p class="hero-sub">Whether in your home or ours, Amy's Eden delivers personalized, dignified senior care with the attention your loved one deserves.</p>
      <div class="hero-ctas">
        <a href="#comparison" class="btn-primary">Find the Right Option</a>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn-secondary">Call <?php echo esc_html($phone); ?></a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <h3>13+</h3>
          <p>Years of Care</p>
        </div>
        <div class="hero-stat">
          <h3>12</h3>
          <p>Licensed Homes</p>
        </div>
        <div class="hero-stat">
          <h3>2:1</h3>
          <p>Resident Ratio</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PHILOSOPHY (2-column with photos) -->
  <section class="section section--white">
    <div class="philosophy-grid">
      <div class="philosophy-images reveal-left">
        <div class="philosophy-img-main">
          <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png" alt="Amy's Eden care philosophy" loading="lazy">
        </div>
        <div class="philosophy-img-sm">
          <img src="https://amyseden.com/wp-content/uploads/2024/03/word-image-47518-3.jpeg" alt="Caregiver with senior" loading="lazy">
        </div>
        <div class="philosophy-img-sm">
          <img src="https://amyseden.com/wp-content/uploads/2023/08/piller-page-image-1-web-1.png" alt="Senior care at Amy's Eden" loading="lazy">
        </div>
      </div>
      <div class="philosophy-text reveal-right">
        <span class="section-label">Our Philosophy</span>
        <div class="philosophy-quote">
          We believe real care happens at home &mdash; or in a place that feels like home.
        </div>
        <p>For over 13 years, Amy's Eden has been redefining senior care in Northern Nevada. We started with a simple belief: seniors deserve better than institutional care. That belief led us to create two distinct care options &mdash; professional in-home care that comes to you, and our signature Two-Resident Home&trade; assisted living that feels just like home. Both are built on the same foundation of compassion, dignity, and personalized attention.</p>
      </div>
    </div>
  </section>

  <!-- SIDE-BY-SIDE COMPARISON -->
  <section class="section section--peach" id="comparison">
    <div class="section-header reveal">
      <span class="section-label">Compare Your Options</span>
      <h2>Two Paths, One Standard of Excellence</h2>
      <p>Every family's situation is unique. Explore both care options to find the perfect fit for your loved one.</p>
      <div class="accent-line"></div>
    </div>
    <div class="comparison-grid">
      <!-- CARD 1: IN-HOME CARE -->
      <div class="compare-card reveal">
        <div class="compare-card-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp" alt="In-home care by Amy's Eden" loading="lazy">
          <span class="compare-card-tag">In Your Home</span>
        </div>
        <div class="compare-card-thumbs">
          <div class="compare-card-thumb">
            <img src="https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp" alt="In-home care services" loading="lazy">
          </div>
          <div class="compare-card-thumb">
            <img src="https://amyseden.com/wp-content/uploads/2024/12/home-care_1.png" alt="Home care support" loading="lazy">
          </div>
          <div class="compare-card-thumb">
            <img src="https://amyseden.com/wp-content/uploads/2024/03/word-image-47518-3.jpeg" alt="Caregiver assistance" loading="lazy">
          </div>
        </div>
        <div class="compare-card-body">
          <h3>In-Home Care</h3>
          <div class="compare-card-subtitle">Care comes to you</div>
          <ul class="compare-benefits">
            <li>Stay in your own home</li>
            <li>Flexible scheduling &mdash; hourly to 24/7</li>
            <li>Familiar environment &amp; routines</li>
            <li>Personalized one-on-one care</li>
            <li>Family involvement in daily care</li>
          </ul>
          <div class="compare-best-for">
            <h4>Best For</h4>
            <p>Seniors who are mostly independent, need part-time assistance, recovering from surgery, or prefer to remain in their own home with supplemental care.</p>
          </div>
          <div class="compare-pricing">
            <strong>Hourly &amp; daily rates available</strong><br>
            Customized to your schedule and care needs
          </div>
          <div class="compare-card-cta">
            <a href="home-care.html" class="btn-secondary">Learn About Home Care &rarr;</a>
          </div>
        </div>
      </div>

      <!-- CARD 2: TWO-RESIDENT HOME -->
      <div class="compare-card reveal">
        <div class="compare-card-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/1.webp" alt="Two-Resident Home by Amy's Eden" loading="lazy">
          <span class="compare-card-tag">Signature Model</span>
        </div>
        <div class="compare-card-thumbs">
          <div class="compare-card-thumb">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/2.webp" alt="Amy's Eden home exterior" loading="lazy">
          </div>
          <div class="compare-card-thumb">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/3.webp" alt="Amy's Eden home interior" loading="lazy">
          </div>
          <div class="compare-card-thumb">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/4.webp" alt="Amy's Eden living space" loading="lazy">
          </div>
        </div>
        <div class="compare-card-body">
          <h3>Two-Resident Home&trade;</h3>
          <div class="compare-card-subtitle">A home built for care</div>
          <ul class="compare-benefits">
            <li>2:1 resident-to-caregiver ratio</li>
            <li>24/7 dedicated caregiver on-site</li>
            <li>All-inclusive care &amp; amenities</li>
            <li>Beautiful, licensed home setting</li>
            <li>Memory care &amp; specialized support</li>
          </ul>
          <div class="compare-best-for">
            <h4>Best For</h4>
            <p>Seniors needing full-time care, those with dementia or Alzheimer's, when in-home care costs exceed assisted living, or when safety at home is a concern.</p>
          </div>
          <div class="compare-pricing">
            <strong>All-inclusive monthly rate</strong><br>
            Care, meals, activities, and amenities included
          </div>
          <div class="compare-card-cta">
            <a href="https://amyseden.com" class="btn-primary">Explore Our Homes &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PHOTO GALLERY STRIP -->
  <section class="section section--white" style="padding-top: 48px; padding-bottom: 48px;">
    <div class="gallery-strip reveal">
      <div class="gallery-strip-item"><img src="https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp" alt="Amy's Eden in-home care" loading="lazy"></div>
      <div class="gallery-strip-item"><img src="https://amyseden.com/wp-content/uploads/2025/05/2.webp" alt="Amy's Eden home" loading="lazy"></div>
      <div class="gallery-strip-item"><img src="https://amyseden.com/wp-content/uploads/2024/12/home-care_1.png" alt="Senior care services" loading="lazy"></div>
      <div class="gallery-strip-item"><img src="https://amyseden.com/wp-content/uploads/2025/05/3.webp" alt="Amy's Eden residence" loading="lazy"></div>
      <div class="gallery-strip-item"><img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png" alt="Care environment" loading="lazy"></div>
      <div class="gallery-strip-item"><img src="https://amyseden.com/wp-content/uploads/2025/05/4.webp" alt="Amy's Eden home interior" loading="lazy"></div>
      <div class="gallery-strip-item"><img src="https://amyseden.com/wp-content/uploads/2025/09/10-1.webp" alt="Amy's Eden care" loading="lazy"></div>
      <div class="gallery-strip-item"><img src="https://amyseden.com/wp-content/uploads/2025/09/11.webp" alt="Amy's Eden living" loading="lazy"></div>
    </div>
  </section>

  <!-- IN-HOME CARE DEEP DIVE -->
  <section class="section section--warm">
    <div class="deep-dive-grid">
      <div class="deep-dive-photo reveal-left">
        <img src="https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp" alt="Professional in-home caregiver" loading="lazy">
        <div class="deep-dive-photo-badge">
          <strong>In-Home Care</strong>
          <span>Flexible, personalized support</span>
        </div>
      </div>
      <div class="deep-dive-text reveal-right">
        <span class="section-label">In-Home Care</span>
        <h3>Professional Care in Your Own Home</h3>
        <p>Our experienced caregivers come to your loved one's home, providing personalized assistance while they maintain their independence and daily routines. From a few hours a week to round-the-clock care, we adapt to your family's needs.</p>
        <div class="deep-dive-features">
          <div class="deep-dive-feature">
            <span class="deep-dive-feature-icon">&#128336;</span>
            <h4>Flexible Hours</h4>
            <p>Hourly, daily, or 24/7 scheduling</p>
          </div>
          <div class="deep-dive-feature">
            <span class="deep-dive-feature-icon">&#127968;</span>
            <h4>Your Home</h4>
            <p>Stay in familiar surroundings</p>
          </div>
          <div class="deep-dive-feature">
            <span class="deep-dive-feature-icon">&#128149;</span>
            <h4>One-on-One</h4>
            <p>Dedicated personal attention</p>
          </div>
          <div class="deep-dive-feature">
            <span class="deep-dive-feature-icon">&#129309;</span>
            <h4>Family First</h4>
            <p>Family stays involved in care</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TWO-RESIDENT HOME DEEP DIVE -->
  <section class="section section--white">
    <div class="deep-dive-grid reverse">
      <div class="deep-dive-photo reveal-right">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/1.webp" alt="Two-Resident Home exterior" loading="lazy">
        <div class="deep-dive-photo-badge">
          <strong>Two-Resident Home&trade;</strong>
          <span>24/7 all-inclusive care</span>
        </div>
      </div>
      <div class="deep-dive-text reveal-left">
        <span class="section-label">Signature Model</span>
        <h3>The Two-Resident Home&trade; Difference</h3>
        <p>Our signature care model limits each licensed home to just two residents, ensuring unparalleled personal attention 24 hours a day. Each home is carefully maintained with comfort and safety in mind, offering a true home environment rather than an institution.</p>
        <div class="deep-dive-features">
          <div class="deep-dive-feature">
            <span class="deep-dive-feature-icon">&#127775;</span>
            <h4>2:1 Ratio</h4>
            <p>Maximum two residents per home</p>
          </div>
          <div class="deep-dive-feature">
            <span class="deep-dive-feature-icon">&#127869;</span>
            <h4>All-Inclusive</h4>
            <p>Meals, activities, and amenities</p>
          </div>
          <div class="deep-dive-feature">
            <span class="deep-dive-feature-icon">&#128587;</span>
            <h4>Memory Care</h4>
            <p>Specialized dementia support</p>
          </div>
          <div class="deep-dive-feature">
            <span class="deep-dive-feature-icon">&#128274;</span>
            <h4>Safe &amp; Secure</h4>
            <p>Licensed, maintained homes</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DETAILED COMPARISON TABLE -->
  <section class="section section--peach">
    <div class="section-header reveal">
      <span class="section-label">Detailed Comparison</span>
      <h2>Side-by-Side at a Glance</h2>
      <p>A comprehensive look at what each care option includes so you can make the best decision.</p>
      <div class="accent-line"></div>
    </div>
    <div class="table-section-layout">
      <div class="comparison-table-wrapper reveal">
        <table class="comparison-table">
          <thead>
            <tr>
              <th>Feature</th>
              <th>In-Home Care</th>
              <th>Two-Resident Home&trade;</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Location</td>
              <td>Your own home</td>
              <td>Licensed Amy's Eden home</td>
            </tr>
            <tr>
              <td>Caregiver Ratio</td>
              <td>1:1 during scheduled hours</td>
              <td>1:2 dedicated caregiver, 24/7</td>
            </tr>
            <tr>
              <td>Availability</td>
              <td>Flexible: hourly, daily, or 24/7</td>
              <td>24 hours a day, 7 days a week</td>
            </tr>
            <tr>
              <td>Meals</td>
              <td>Meal prep assistance available</td>
              <td><span class="table-check">&#10003;</span> All meals included, home-cooked</td>
            </tr>
            <tr>
              <td>Housekeeping</td>
              <td>Light housekeeping included</td>
              <td><span class="table-check">&#10003;</span> Full housekeeping included</td>
            </tr>
            <tr>
              <td>Activities &amp; Socialization</td>
              <td>Companion care &amp; outings</td>
              <td><span class="table-check">&#10003;</span> Daily activities &amp; companionship</td>
            </tr>
            <tr>
              <td>Memory Care</td>
              <td>Available with specialized caregivers</td>
              <td><span class="table-check">&#10003;</span> Specialized memory care environment</td>
            </tr>
            <tr>
              <td>Medication Management</td>
              <td>Reminders &amp; assistance</td>
              <td><span class="table-check">&#10003;</span> Full management &amp; administration</td>
            </tr>
            <tr>
              <td>Night Coverage</td>
              <td>Optional (additional cost)</td>
              <td><span class="table-check">&#10003;</span> Included &mdash; caregiver on-site</td>
            </tr>
            <tr>
              <td>Best Value When</td>
              <td>Part-time care is needed</td>
              <td>Full-time / 24-7 care is needed</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="table-side-photos reveal">
        <div class="table-side-photo">
          <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png" alt="Amy's Eden care team" loading="lazy">
        </div>
        <div class="table-side-photo">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/5.webp" alt="Amy's Eden home" loading="lazy">
        </div>
        <div class="table-side-cta">
          <h4>Not Sure Yet?</h4>
          <p>Talk with our team and we will help you find the right fit.</p>
          <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn-primary" style="padding: 12px 24px; font-size: 14px;">Call <?php echo esc_html($phone); ?></a>
        </div>
      </div>
    </div>
  </section>

  <!-- DECISION GUIDE (with photo) -->
  <section class="section section--white">
    <div class="section-header reveal">
      <span class="section-label">Decision Guide</span>
      <h2>Which Option Is Right?</h2>
      <p>Answer these common questions to help determine the best care path for your loved one.</p>
      <div class="accent-line"></div>
    </div>
    <div class="decision-layout">
      <div class="decision-grid reveal">
        <div class="decision-row">
          <div class="decision-question">Does your loved one need 24/7 care?</div>
          <div class="decision-arrow">&rarr;</div>
          <div class="decision-answer">
            <span class="decision-tag tag-two-resident">Two-Resident Home&trade;</span>
          </div>
        </div>
        <div class="decision-row">
          <div class="decision-question">Do they prefer staying in their own home?</div>
          <div class="decision-arrow">&rarr;</div>
          <div class="decision-answer">
            <span class="decision-tag tag-home-care">Home Care</span>
          </div>
        </div>
        <div class="decision-row">
          <div class="decision-question">Has in-home care become too expensive?</div>
          <div class="decision-arrow">&rarr;</div>
          <div class="decision-answer">
            <span class="decision-tag tag-two-resident">Two-Resident Home&trade;</span>
          </div>
        </div>
        <div class="decision-row">
          <div class="decision-question">Do they need occasional help with daily tasks?</div>
          <div class="decision-arrow">&rarr;</div>
          <div class="decision-answer">
            <span class="decision-tag tag-home-care">Home Care</span>
          </div>
        </div>
        <div class="decision-row">
          <div class="decision-question">Do they have dementia or Alzheimer's?</div>
          <div class="decision-arrow">&rarr;</div>
          <div class="decision-answer">
            <span class="decision-tag tag-two-resident">Two-Resident Home&trade;</span>
          </div>
        </div>
        <div class="decision-row">
          <div class="decision-question">Are they recovering from surgery?</div>
          <div class="decision-arrow">&rarr;</div>
          <div class="decision-answer">
            <span class="decision-tag tag-home-care">Home Care</span>
          </div>
        </div>
        <div class="decision-row">
          <div class="decision-question">Is safety at home becoming a concern?</div>
          <div class="decision-arrow">&rarr;</div>
          <div class="decision-answer">
            <span class="decision-tag tag-two-resident">Two-Resident Home&trade;</span>
          </div>
        </div>
      </div>
      <div class="decision-photo reveal">
        <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-58.png" alt="Amy's Eden caregiver helping senior" loading="lazy">
      </div>
    </div>
  </section>

  <!-- SEAMLESS TRANSITIONS -->
  <section class="section section--warm">
    <div class="transitions-inner reveal">
      <span class="section-label">Continuity of Care</span>
      <h2>Seamless Transitions</h2>
      <p>Many families start with home care and transition to our Two-Resident Homes when needs change. Because you're already part of the Amy's Eden family, we make the move effortless &mdash; same trusted team, same standard of care, new setting.</p>
      <div class="transition-steps">
        <div class="transition-step">
          <span class="transition-step-icon">&#127968;</span>
          <h4>Home Care</h4>
          <p>Start with in-home support as needs emerge</p>
        </div>
        <div class="transition-arrow">&rarr;</div>
        <div class="transition-step">
          <span class="transition-step-icon">&#128203;</span>
          <h4>Reassessment</h4>
          <p>We monitor and adjust as needs evolve</p>
        </div>
        <div class="transition-arrow">&rarr;</div>
        <div class="transition-step">
          <span class="transition-step-icon">&#127969;</span>
          <h4>Two-Resident Home</h4>
          <p>Seamless move to 24/7 care when ready</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PHOTO GALLERY SHOWCASE -->
  <section class="section section--white">
    <div class="section-header reveal">
      <span class="section-label">See the Difference</span>
      <h2>Inside Amy's Eden</h2>
      <p>A closer look at our care environments &mdash; from in-home visits to our beautiful Two-Resident Homes.</p>
      <div class="accent-line"></div>
    </div>
    <div class="photo-gallery">
      <div class="photo-gallery-grid reveal">
        <div class="photo-gallery-item tall">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/1.webp" alt="Amy's Eden Two-Resident Home" loading="lazy">
          <div class="photo-gallery-caption">Two-Resident Home</div>
        </div>
        <div class="photo-gallery-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp" alt="In-home care visit" loading="lazy">
        </div>
        <div class="photo-gallery-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/2.webp" alt="Amy's Eden home" loading="lazy">
        </div>
        <div class="photo-gallery-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/09/10-1.webp" alt="Care environment" loading="lazy">
        </div>
        <div class="photo-gallery-item wide">
          <img src="https://amyseden.com/wp-content/uploads/2024/12/home-care_1.png" alt="Home care services" loading="lazy" style="height: 220px; object-fit: cover;">
          <div class="photo-gallery-caption">Professional In-Home Care</div>
        </div>
        <div class="photo-gallery-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/6.webp" alt="Amy's Eden interior" loading="lazy">
        </div>
        <div class="photo-gallery-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/09/11.webp" alt="Senior living" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- OUR HOMES SHOWCASE -->
  <section class="section section--peach">
    <div class="homes-showcase">
      <div class="section-header reveal">
        <span class="section-label">Our Homes</span>
        <h2>Beautiful Homes, Exceptional Care</h2>
        <p>Each Two-Resident Home is carefully selected and maintained to provide a warm, comfortable environment that feels like home.</p>
        <div class="accent-line"></div>
      </div>
      <div class="homes-grid reveal">
        <div class="homes-grid-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/5.webp" alt="Amy's Eden Two-Resident Home" loading="lazy">
        </div>
        <div class="homes-grid-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/6.webp" alt="Amy's Eden home interior" loading="lazy">
        </div>
        <div class="homes-grid-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/09/10-1.webp" alt="Amy's Eden care environment" loading="lazy">
        </div>
        <div class="homes-grid-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/09/11.webp" alt="Amy's Eden living space" loading="lazy">
        </div>
        <div class="homes-grid-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/09/12.webp" alt="Amy's Eden residence" loading="lazy">
        </div>
        <div class="homes-grid-item">
          <img src="https://amyseden.com/wp-content/uploads/2025/04/Group-2.png" alt="Amy's Eden care team" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="section section--white">
    <div class="section-header reveal">
      <span class="section-label">Testimonials</span>
      <h2>Families Trust Amy's Eden</h2>
      <p>Hear from families who have experienced the Amy's Eden difference firsthand.</p>
      <div class="accent-line"></div>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card reveal">
        <div class="testimonial-photo">
          <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png" alt="Senior care" loading="lazy">
          <div class="testimonial-photo-overlay"></div>
        </div>
        <div class="testimonial-body">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <blockquote>"We weren't sure whether Mom needed home care or assisted living. Amy's Eden walked us through both options and helped us find exactly the right fit. No pressure, just genuine guidance."</blockquote>
          <div class="testimonial-author">Karen D.</div>
          <div class="testimonial-role">Daughter of Resident &middot; Reno, NV</div>
        </div>
      </div>
      <div class="testimonial-card reveal">
        <div class="testimonial-photo">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/3.webp" alt="Amy's Eden home" loading="lazy">
          <div class="testimonial-photo-overlay"></div>
        </div>
        <div class="testimonial-body">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <blockquote>"Dad started with in-home care after his hip surgery. When he needed more support, the transition to their Two-Resident Home was completely seamless. He already knew his caregiver."</blockquote>
          <div class="testimonial-author">Robert S.</div>
          <div class="testimonial-role">Son of Resident &middot; Carson City, NV</div>
        </div>
      </div>
      <div class="testimonial-card reveal">
        <div class="testimonial-photo">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/4.webp" alt="Amy's Eden interior" loading="lazy">
          <div class="testimonial-photo-overlay"></div>
        </div>
        <div class="testimonial-body">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <blockquote>"The Two-Resident Home model is genius. My mother gets the personal attention of having a private caregiver, but at a fraction of what 24/7 in-home care would cost. She's thriving."</blockquote>
          <div class="testimonial-author">Patricia M.</div>
          <div class="testimonial-role">Daughter of Resident &middot; Reno, NV</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section section--warm">
    <div class="section-header reveal">
      <span class="section-label">Frequently Asked</span>
      <h2>Common Questions</h2>
      <p>Get answers to the questions families ask most when choosing between care options.</p>
      <div class="accent-line"></div>
    </div>
    <div class="faq-list">
      <div class="faq-item reveal">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What is the difference between in-home care and the Two-Resident Home?
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">In-home care means a professional caregiver comes to your loved one's own home to provide assistance on a flexible schedule. Our Two-Resident Home&trade; is a licensed residential care home where a maximum of two residents live with a dedicated caregiver on-site 24/7. Both provide personalized, one-on-one care &mdash; the main difference is the setting and the level of around-the-clock support.</div>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          How do I know which option is right for my loved one?
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">It depends on their level of independence, safety needs, and personal preferences. If they need help a few hours a day and want to stay at home, in-home care is ideal. If they need 24/7 supervision, have memory care needs, or if round-the-clock in-home care has become too costly, our Two-Resident Home offers a better solution. We offer free consultations to help you decide.</div>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          Can we start with home care and switch to the Two-Resident Home later?
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">Absolutely. Many families do exactly this. Since you're already part of the Amy's Eden family, the transition is seamless. Your loved one may even continue with the same caregiver they've already grown to trust, ensuring continuity and comfort.</div>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What areas do you serve?
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">Amy's Eden provides senior care services throughout Reno and Carson City, Nevada. We have 12 licensed Two-Resident Homes across both cities, and our in-home care team serves families throughout the greater Northern Nevada area.</div>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What is included in the Two-Resident Home monthly rate?
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">The Two-Resident Home rate is all-inclusive: 24/7 caregiver support, home-cooked meals, medication management, housekeeping, laundry, activities, transportation to medical appointments, and all amenities. There are no hidden fees or surprise charges.</div>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          Do you provide memory care for Alzheimer's and dementia?
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">Yes. Both our in-home care and Two-Resident Homes can support seniors with Alzheimer's and other forms of dementia. Our Two-Resident Homes are particularly well-suited for memory care, as the small, consistent environment with a dedicated caregiver provides the stability and safety that memory care residents need.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM -->
  <section class="section section--peach" id="contact">
    <div class="section-header reveal">
      <span class="section-label">Contact Us</span>
      <h2>Let's Find the Right Care Together</h2>
      <p>Not sure which option is best? Tell us about your loved one and we'll help guide you to the perfect solution.</p>
      <div class="accent-line"></div>
    </div>
    <div class="contact-grid">
      <div class="contact-info reveal">
        <h3>We're Here to Help</h3>
        <p>Every family's journey is different. Whether you're exploring options for the first time or ready to begin care, our team will listen and guide you with compassion and clarity.</p>
        <div class="contact-detail">
          <div class="contact-detail-icon">&#128222;</div>
          <div class="contact-detail-text">
            <strong>Phone</strong>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>"><?php echo esc_html($phone); ?></a>
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
        <div class="contact-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-58.png" alt="Amy's Eden care team" loading="lazy">
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
                <option value="not-sure">Not Sure Yet</option>
              </select>
            </div>
            <div class="form-group full">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Tell us about your loved one's needs and any questions you have..."></textarea>
            </div>
          </div>
          <button type="submit" class="btn-primary form-submit">Request a Free Consultation</button>
        </form>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="final-cta">
    <div class="final-cta-bg">
      <img src="https://amyseden.com/wp-content/uploads/2025/09/12.webp" alt="" loading="lazy" aria-hidden="true">
    </div>
    <div class="final-cta-content reveal">
      <span class="section-label">Take the First Step</span>
      <h2>The Right Care Is<br>Closer Than You Think</h2>
      <p>Whether at home or in one of our Two-Resident Homes, exceptional care starts with a conversation.</p>
      <div class="hero-ctas">
        <a href="#contact" class="btn-primary">Request a Free Consultation</a>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn-secondary">Call <?php echo esc_html($phone); ?></a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
