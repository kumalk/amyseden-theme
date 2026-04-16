<?php
/**
 * Template Name: Assisted Living
 * Template for the Assisted Living landing page
 */
get_header();

$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
$al_hero_bg = get_theme_mod('amyseden_al_hero_bg', 'https://amyseden.com/wp-content/uploads/2025/05/1.webp');
?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero">
  <div class="hero-bg" role="img" aria-label="Beautiful Amy's Eden senior care home" style="background-image: url('<?php echo esc_url($al_hero_bg); ?>');"></div>
  <div class="hero-content">
    <div class="container">
      <div class="hero-badge">
        <span class="hero-badge-dot"></span>
        13+ Years of Trusted Care
      </div>
      <h1>The Two-Resident Home&trade;</h1>
      <p class="hero-subtitle">Not a facility. A real home &mdash; where only two seniors share one dedicated caregiver, 24 hours a day.</p>
      <p class="hero-location">
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        12 Licensed Homes in Reno &amp; Carson City, Nevada
      </p>
      <div class="hero-buttons">
        <a href="#contact" class="btn btn-primary">Schedule a Private Tour</a>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call <?php echo esc_html($phone); ?>
        </a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="hero-stat-value">2:1</div>
          <div class="hero-stat-label">Resident-to-Caregiver Ratio</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-value">24/7</div>
          <div class="hero-stat-label">Dedicated Care</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-value">12</div>
          <div class="hero-stat-label">Licensed Homes</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY TWO RESIDENTS
     ============================================================ -->
<section class="why-section" id="why">
  <div class="container">
    <div class="why-grid reveal">
      <div class="why-image">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/1.webp" alt="Cozy interior of an Amy's Eden senior care home" loading="lazy" width="600" height="500">
      </div>
      <div class="why-text">
        <div class="section-label">The Philosophy</div>
        <h2>Because your loved one isn't a room number.</h2>
        <p>In most large assisted living facilities, one caregiver is responsible for <strong>15 to 30 residents</strong>. That means rushed meals, impersonal care, and a loved one who feels like just another name on a clipboard.</p>
        <p>At Amy's Eden, every home has <strong>only two residents</strong> and <strong>one dedicated caregiver</strong>. That means real attention, genuine connection, and care that adapts to your loved one &mdash; not the other way around.</p>
        <div class="why-comparison">
          <div class="comparison-card eden">
            <h4>Amy's Eden</h4>
            <div class="number">2</div>
            <div class="label">Residents per Home</div>
          </div>
          <div class="comparison-card facility">
            <h4>Typical Facility</h4>
            <div class="number">50+</div>
            <div class="label">Residents per Facility</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHAT'S INCLUDED
     ============================================================ -->
<section class="included-section" id="included">
  <div class="container">
    <div class="included-header reveal">
      <div class="section-label">All-Inclusive Care</div>
      <h2 class="section-title">Everything Your Loved One Needs</h2>
      <p class="section-subtitle">One simple monthly rate covers every aspect of daily living &mdash; no surprise fees, no hidden costs.</p>
    </div>
    <div class="included-grid">
      <div class="included-card reveal">
        <div class="included-icon">&#128100;</div>
        <h3>24/7 Dedicated Caregiver</h3>
        <p>A single caregiver who lives in the home and knows your loved one's needs, preferences, and routines intimately.</p>
      </div>
      <div class="included-card reveal">
        <div class="included-icon">&#127858;</div>
        <h3>Home-Cooked Meals</h3>
        <p>Three nutritious meals plus snacks daily, prepared fresh in the home kitchen and tailored to dietary needs and preferences.</p>
      </div>
      <div class="included-card reveal">
        <div class="included-icon">&#128138;</div>
        <h3>Medication Management</h3>
        <p>Careful medication administration and monitoring, coordinated with physicians and pharmacies for accuracy and safety.</p>
      </div>
      <div class="included-card reveal">
        <div class="included-icon">&#128588;</div>
        <h3>Personal Care Assistance</h3>
        <p>Dignified help with bathing, grooming, dressing, and mobility &mdash; always at your loved one's pace and comfort level.</p>
      </div>
      <div class="included-card reveal">
        <div class="included-icon">&#127968;</div>
        <h3>Housekeeping &amp; Laundry</h3>
        <p>A clean, comfortable living environment maintained daily &mdash; because home should always feel welcoming.</p>
      </div>
      <div class="included-card reveal">
        <div class="included-icon">&#127912;</div>
        <h3>Companionship &amp; Activities</h3>
        <p>Engaging activities, conversation, outings, and genuine friendship &mdash; not just a scheduled activity calendar.</p>
      </div>
      <div class="included-card reveal">
        <div class="included-icon">&#129657;</div>
        <h3>Hospice &amp; Health Coordination</h3>
        <p>Seamless coordination with hospice agencies, home health providers, physicians, and specialists as needed.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     PHOTO GALLERY
     ============================================================ -->
<section class="gallery-section" id="gallery">
  <div class="container">
    <div class="gallery-header reveal">
      <div class="section-label">Our Homes</div>
      <h2 class="section-title">Where Care Feels Like Home</h2>
      <p class="section-subtitle">Every Amy's Eden home is a real residence &mdash; warm, inviting, and designed for comfort and dignity.</p>
    </div>
    <div class="gallery-grid reveal">
      <div class="gallery-item tall" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/2.webp" alt="Amy's Eden home interior" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/3.webp" alt="Amy's Eden comfortable living room" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/4.webp" alt="Amy's Eden home kitchen" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/5.webp" alt="Amy's Eden bedroom" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/6.webp" alt="Amy's Eden home exterior" loading="lazy">
      </div>
      <div class="gallery-item wide" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/7.webp" alt="Amy's Eden dining area" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/8.webp" alt="Amy's Eden garden area" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/9.webp" alt="Amy's Eden backyard" loading="lazy">
      </div>
      <div class="gallery-item tall" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/10-1.webp" alt="Amy's Eden home view" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/11.webp" alt="Amy's Eden senior living home" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/12.webp" alt="Amy's Eden home detail" loading="lazy">
      </div>
      <div class="gallery-item wide" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/13.webp" alt="Amy's Eden cozy home" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/14-1.webp" alt="Amy's Eden residence" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/15.webp" alt="Amy's Eden home setting" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/17-1.webp" alt="Amy's Eden property" loading="lazy">
      </div>
      <div class="gallery-item" onclick="openLightbox(this)">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/18-1.webp" alt="Amy's Eden home exterior view" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
  <button class="lightbox-close" aria-label="Close">&times;</button>
  <img src="" alt="Gallery photo enlarged" id="lightboxImg">
</div>

<!-- ============================================================
     SPECIALIZED CARE TABS
     ============================================================ -->
<section class="care-section" id="care">
  <div class="container">
    <div class="care-header reveal">
      <div class="section-label">Specialized Care</div>
      <h2 class="section-title">Expert Care for Every Need</h2>
      <p class="section-subtitle">Our Two-Resident Home model is uniquely suited for seniors with varying levels of care needs.</p>
    </div>

    <div class="tab-nav reveal">
      <button class="tab-btn active" data-tab="alzheimers">Alzheimer's Care</button>
      <button class="tab-btn" data-tab="memory">Memory Care</button>
      <button class="tab-btn" data-tab="dementia">Dementia Care</button>
      <button class="tab-btn" data-tab="senior">Senior Living</button>
      <button class="tab-btn" data-tab="independent">Independent Living</button>
      <button class="tab-btn" data-tab="hospice">Hospice Support</button>
    </div>

    <!-- Alzheimer's -->
    <div class="tab-panel active" id="tab-alzheimers">
      <div class="tab-content reveal">
        <div class="tab-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png" alt="Alzheimer's care at Amy's Eden" loading="lazy">
        </div>
        <div class="tab-info">
          <h3>Alzheimer's Care</h3>
          <p>Alzheimer's care requires consistency, patience, and a deep understanding of each individual. In our Two-Resident Homes, one caregiver devotes their full attention to learning the unique nuances, triggers, and comforts of each resident.</p>
          <p>No rotating staff. No unfamiliar faces. Just a trusted companion who knows your loved one's story.</p>
          <ul class="tab-features">
            <li>Consistent daily routines that reduce confusion</li>
            <li>Secure, home-like environment</li>
            <li>One caregiver who learns every nuance</li>
            <li>Meaningful engagement activities</li>
            <li>Family communication and updates</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Memory Care -->
    <div class="tab-panel" id="tab-memory">
      <div class="tab-content">
        <div class="tab-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png" alt="Memory care at Amy's Eden" loading="lazy">
        </div>
        <div class="tab-info">
          <h3>Memory Care</h3>
          <p>Memory care at Amy's Eden goes beyond safety &mdash; it's about preserving dignity, encouraging cognitive engagement, and creating moments of joy every day.</p>
          <p>Our calm, home environment dramatically reduces agitation and confusion compared to large facilities with constant noise and commotion.</p>
          <ul class="tab-features">
            <li>Cognitive engagement and brain-stimulating activities</li>
            <li>Calm, quiet environment that reduces anxiety</li>
            <li>Music therapy and sensory stimulation</li>
            <li>Personalized memory-support routines</li>
            <li>Coordination with neurologists and specialists</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Dementia Care -->
    <div class="tab-panel" id="tab-dementia">
      <div class="tab-content">
        <div class="tab-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/07/Frame-58.png" alt="Dementia care at Amy's Eden" loading="lazy">
        </div>
        <div class="tab-info">
          <h3>Dementia Care</h3>
          <p>Dementia presents unique behavioral challenges that require patience, expertise, and individualized approaches. Our one-on-one model allows caregivers to respond thoughtfully rather than reactively.</p>
          <ul class="tab-features">
            <li>Behavioral management with dignity-first approach</li>
            <li>Sundowning awareness and responsive care</li>
            <li>Consistent caregiver reduces behavioral episodes</li>
            <li>Safe wandering environment</li>
            <li>Family education and support</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Senior Living -->
    <div class="tab-panel" id="tab-senior">
      <div class="tab-content">
        <div class="tab-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/3.webp" alt="Senior living at Amy's Eden" loading="lazy">
        </div>
        <div class="tab-info">
          <h3>Senior Living</h3>
          <p>For seniors who want to enjoy their golden years in comfort without the institutional feel of a large facility. Our homes offer an active, engaged lifestyle with the security of 24/7 support.</p>
          <ul class="tab-features">
            <li>Active lifestyle with outings and activities</li>
            <li>Home-cooked meals tailored to preferences</li>
            <li>Comfortable, private living spaces</li>
            <li>Transportation to appointments and errands</li>
            <li>Genuine companionship and social connection</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Independent Living -->
    <div class="tab-panel" id="tab-independent">
      <div class="tab-content">
        <div class="tab-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/05/5.webp" alt="Independent living at Amy's Eden" loading="lazy">
        </div>
        <div class="tab-info">
          <h3>Independent Living</h3>
          <p>Maintain your independence and daily routines in a comfortable home setting. Our caregivers provide just the right amount of support while respecting your autonomy.</p>
          <ul class="tab-features">
            <li>Maintain personal routines and preferences</li>
            <li>Private living space within a real home</li>
            <li>Companionship without being intrusive</li>
            <li>Help is always nearby when needed</li>
            <li>Freedom to come and go with support</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Hospice Support -->
    <div class="tab-panel" id="tab-hospice">
      <div class="tab-content">
        <div class="tab-image">
          <img src="https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp" alt="Compassionate hospice support at Amy's Eden" loading="lazy">
        </div>
        <div class="tab-info">
          <h3>Hospice Support</h3>
          <p>When the time comes for end-of-life care, our homes provide a peaceful, dignified setting. We coordinate seamlessly with hospice agencies to ensure your loved one is comfortable and surrounded by compassion.</p>
          <ul class="tab-features">
            <li>Compassionate end-of-life environment</li>
            <li>Coordination with hospice agencies</li>
            <li>Comfort-focused care and pain management support</li>
            <li>Family visitation welcomed anytime</li>
            <li>Emotional support for families</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     COMPARISON TABLE
     ============================================================ -->
<section class="compare-section" id="compare">
  <div class="container">
    <div class="compare-header reveal">
      <div class="section-label">The Difference</div>
      <h2 class="section-title">See How We Compare</h2>
      <p class="section-subtitle">A side-by-side look at why the Two-Resident Home model provides superior care.</p>
    </div>
    <div class="compare-table-wrap reveal">
      <table class="compare-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Amy's Eden</th>
            <th>Large Facility</th>
            <th>24hr In-Home Care</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Resident-to-Caregiver Ratio</td>
            <td><span class="check">2:1</span></td>
            <td><span class="x">15-30:1</span></td>
            <td><span class="check">1:1</span></td>
          </tr>
          <tr>
            <td>Living Environment</td>
            <td><span class="check">Real home setting</span></td>
            <td><span class="x">Institutional facility</span></td>
            <td>Client's own home</td>
          </tr>
          <tr>
            <td>Meals</td>
            <td><span class="check">Home-cooked, personalized</span></td>
            <td><span class="x">Cafeteria-style, mass prepared</span></td>
            <td>Caregiver-prepared</td>
          </tr>
          <tr>
            <td>Personalized Attention</td>
            <td><span class="check">Exceptional &mdash; 2 residents only</span></td>
            <td><span class="x">Limited &mdash; shared among 50+</span></td>
            <td><span class="check">High</span></td>
          </tr>
          <tr>
            <td>Staff Consistency</td>
            <td><span class="check">Same dedicated caregiver</span></td>
            <td><span class="x">Rotating shifts, high turnover</span></td>
            <td>Varies by agency</td>
          </tr>
          <tr>
            <td>Medication Management</td>
            <td><span class="check">Personalized, attentive</span></td>
            <td><span class="x">Scheduled rounds</span></td>
            <td><span class="check">Personalized</span></td>
          </tr>
          <tr>
            <td>Cost Transparency</td>
            <td><span class="check">All-inclusive, no hidden fees</span></td>
            <td><span class="x">Base rate + level-of-care charges</span></td>
            <td>Hourly rates, overtime charges</td>
          </tr>
          <tr>
            <td>Flexibility</td>
            <td><span class="check">Tailored to resident's schedule</span></td>
            <td><span class="x">Fixed facility schedule</span></td>
            <td><span class="check">Flexible</span></td>
          </tr>
          <tr>
            <td>Monthly Cost</td>
            <td><span class="check">Competitive all-inclusive rate</span></td>
            <td>$4K-$8K + add-ons</td>
            <td><span class="x">$15K-$20K+/month</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="testimonials-section" id="testimonials">
  <div class="container">
    <div class="testimonials-header reveal">
      <div class="section-label">Family Stories</div>
      <h2 class="section-title">What Families Are Saying</h2>
      <p class="section-subtitle">Real stories from families who chose the Two-Resident Home difference.</p>
    </div>
    <div class="testimonials-grid reveal">
      <div class="testimonial-card">
        <div class="testimonial-accent"></div>
        <div class="testimonial-stars">
          <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
        </div>
        <p class="testimonial-quote">"My 98-year-old mother has found a lovely home at Amy's Eden. The caregiver is attentive, kind, and genuinely cares about my mother's wellbeing. The home is clean, warm, and feels like a real family environment. We couldn't be happier with our decision."</p>
        <div class="testimonial-author">Ingrid Paine</div>
        <div class="testimonial-role">Daughter</div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-accent"></div>
        <div class="testimonial-stars">
          <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
        </div>
        <p class="testimonial-quote">"My mother-in-law has been happy at Amy's Eden for years. The personalized care she receives is something that no large facility could ever match. She's treated like family, not a patient. The consistency of having the same caregiver has made all the difference."</p>
        <div class="testimonial-author">Aloha Bennett</div>
        <div class="testimonial-role">Family Member</div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-accent"></div>
        <div class="testimonial-stars">
          <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
        </div>
        <p class="testimonial-quote">"We needed emergency placement for our loved one and Amy's Eden made it happen quickly and seamlessly. From the very first day, the level of care exceeded our expectations. The transition was smooth, and our family member adjusted beautifully to the home environment."</p>
        <div class="testimonial-author">Collett Rigdon</div>
        <div class="testimonial-role">Family Member</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     TRANSPARENT PRICING
     ============================================================ -->
<section class="pricing-section" id="pricing">
  <div class="container">
    <div class="pricing-grid reveal">
      <div class="pricing-image">
        <img src="https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp" alt="Amy's Eden caregiver with senior resident" loading="lazy" width="600" height="420">
      </div>
      <div>
        <div class="section-label">Transparent Pricing</div>
        <h2 class="section-title">Simple, All-Inclusive Pricing</h2>
        <p>No hidden fees. No surprise charges. No confusing level-of-care add-ons. Just one straightforward monthly rate that covers everything your loved one needs.</p>
        <p style="margin-top:12px;">Our all-inclusive rate is <strong>significantly more affordable than 24-hour in-home care</strong>, which typically costs $15,000&ndash;$20,000+ per month. You get equivalent &mdash; or better &mdash; one-on-one attention at a fraction of the cost.</p>
        <ul class="pricing-features">
          <li>All-inclusive base rate &mdash; no hidden fees</li>
          <li>More affordable than 24-hour in-home care</li>
          <li>No level-of-care surcharges</li>
          <li>Personalized quotes based on individual needs</li>
          <li>No long-term contracts required</li>
        </ul>
        <div style="margin-top:32px; display:flex; gap:16px; flex-wrap:wrap;">
          <a href="#contact" class="btn btn-primary">Get a Personalized Quote</a>
          <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline-dark">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <?php echo esc_html($phone); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     VIRTUAL TOUR
     ============================================================ -->
<section class="tour-section">
  <div class="tour-bg" role="img" aria-label="Amy's Eden homes overview"></div>
  <div class="container">
    <div class="tour-content reveal">
      <div class="section-label" style="color:rgba(255,255,255,0.7);">Virtual Tour</div>
      <h2>See Our Homes for Yourself</h2>
      <p>We invite you to take a private tour of any of our 12 licensed homes in Reno and Carson City. Experience the warmth, comfort, and care firsthand.</p>
      <a href="#contact" class="btn btn-primary">Schedule a Private Tour</a>
      <div class="tour-photos">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/19.webp" alt="Amy's Eden home 1" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/4.webp" alt="Amy's Eden home 2" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/05/6.webp" alt="Amy's Eden home 3" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/15.webp" alt="Amy's Eden home 4" loading="lazy">
        <img src="https://amyseden.com/wp-content/uploads/2025/09/17-1.webp" alt="Amy's Eden home 5" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FAQ
     ============================================================ -->
<section class="faq-section" id="faq">
  <div class="container">
    <div class="faq-header reveal">
      <div class="section-label">Common Questions</div>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-subtitle">Get answers to the most common questions families ask about our Two-Resident Homes.</p>
    </div>
    <div class="faq-grid reveal">

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>What type of clients are a good fit for Amy's Eden?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Amy's Eden is ideal for seniors who need personalized attention beyond what a large facility can provide. We serve those with Alzheimer's, dementia, Parkinson's, mobility challenges, and anyone who simply wants a higher quality of life with dedicated one-on-one care in a real home setting.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Is Amy's Eden a good option when in-home care becomes too costly?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Absolutely. 24-hour in-home care typically costs $15,000&ndash;$20,000+ per month. Amy's Eden provides equivalent (or better) personalized attention with a dedicated caregiver at a significantly lower cost. Many families find it to be the perfect middle ground between in-home care and a large facility.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Do you collaborate with home health and hospice agencies?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Yes, we actively coordinate with home health agencies, hospice providers, physicians, and specialists. Our caregivers work closely with these professionals to ensure seamless, comprehensive care for each resident.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Are your homes licensed?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Yes, all 12 of our homes are fully licensed by the State of Nevada. We maintain rigorous standards and are regularly inspected to ensure compliance with all state regulations for residential care facilities.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>What areas do you serve?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">We have 12 licensed homes located throughout Reno and Carson City, Nevada. Our homes are situated in quiet residential neighborhoods that provide a peaceful, comfortable living environment.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>What's included in the monthly base rate?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Our all-inclusive rate covers everything: a 24/7 dedicated caregiver, three home-cooked meals plus snacks daily, medication management, personal care assistance (bathing, grooming, dressing), housekeeping and laundry, companionship and activities, and coordination with health providers. No hidden fees or level-of-care surcharges.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>How quickly can you admit a new resident?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">We understand that care needs can arise suddenly. We can often accommodate new residents within days, and we do handle emergency placements. Contact us anytime to discuss availability and your timeline.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Do you accept residents on hospice?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. Our homes provide a peaceful, dignified setting for end-of-life care. We coordinate closely with hospice agencies to ensure residents receive compassionate, comfort-focused care in a home environment.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Do you accept couples?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Yes! Our Two-Resident Home model is actually ideal for couples. Both partners can share a home together while receiving the individualized care each one needs. Many couples find this to be the perfect arrangement that allows them to stay together.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Are pets allowed?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">We evaluate pet requests on a case-by-case basis. We understand the importance of the bond between seniors and their pets and work to accommodate them whenever possible. Please discuss your specific situation with us during consultation.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Do you support residents with dementia, Alzheimer's, or Parkinson's?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Yes, and our model is particularly ideal for these conditions. With only two residents per home and one dedicated caregiver, we provide the consistent, patient, individualized attention that people with cognitive and neurological conditions need. Our caregivers are trained in managing the unique challenges of each condition.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Can you care for insulin-dependent diabetics?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. We work in coordination with physicians, home health agencies, and pharmacies to ensure proper insulin administration and blood sugar monitoring. Our one-on-one care model allows for the close attention that diabetes management requires.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Can you accommodate residents who need Hoyer lifts or are at high fall risk?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">We evaluate these situations on a case-by-case basis. Some of our homes can accommodate Hoyer lifts and other mobility equipment. Our goal is always to ensure resident safety while providing the highest quality of care. Please contact us to discuss your specific needs.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Do you accept residents with mental health conditions?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">Yes, we support residents managing depression, anxiety, and other mental health conditions. The intimate, home-like setting and consistent caregiver relationship often provide a therapeutic benefit that large facilities cannot match. Our caregivers are trained to provide compassionate, understanding care.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleFaq(this)">
          <h4>Can you care for residents with feeding tubes or ostomy bags?</h4>
          <div class="faq-toggle">+</div>
        </div>
        <div class="faq-answer"><div class="faq-answer-inner">We evaluate these needs on a case-by-case basis and coordinate with home health agencies to ensure proper management. Our one-on-one care model provides the focused attention needed for these more complex medical needs. Contact us to discuss your loved one's specific requirements.</div></div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     CONTACT FORM
     ============================================================ -->
<section class="contact-section" id="contact">
  <div class="container">
    <div class="contact-grid reveal">
      <div class="contact-image">
        <img src="https://amyseden.com/wp-content/uploads/2025/06/Untitled-design-23-1.webp" alt="Amy's Eden senior care home with caregiver" loading="lazy" width="600" height="600">
      </div>
      <div class="contact-form-card">
        <div class="section-label">Get Started</div>
        <h2>Schedule Your Private Tour</h2>
        <p>Tell us about your loved one and we'll help you find the perfect home. No pressure, no obligation &mdash; just answers.</p>
        <form id="contactForm" action="#" method="POST">
          <div class="form-row">
            <div class="form-group">
              <label for="firstName">First Name *</label>
              <input type="text" id="firstName" name="firstName" required placeholder="First name">
            </div>
            <div class="form-group">
              <label for="lastName">Last Name *</label>
              <input type="text" id="lastName" name="lastName" required placeholder="Last name">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="phone">Phone *</label>
              <input type="tel" id="phone" name="phone" required placeholder="(775) 000-0000">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="you@example.com">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="location">Preferred Location</label>
              <select id="location" name="location">
                <option value="">Select location...</option>
                <option value="reno">Reno, NV</option>
                <option value="carson-city">Carson City, NV</option>
                <option value="either">Either Location</option>
              </select>
            </div>
            <div class="form-group">
              <label for="interest">I'm Interested In</label>
              <select id="interest" name="interest">
                <option value="">Select...</option>
                <option value="assisted-living">Assisted Living</option>
                <option value="memory-care">Memory Care</option>
                <option value="alzheimers">Alzheimer's Care</option>
                <option value="dementia">Dementia Care</option>
                <option value="hospice">Hospice Support</option>
                <option value="respite">Respite Care</option>
                <option value="couples">Couples Care</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Tell Us About Your Loved One</label>
            <textarea id="message" name="message" placeholder="Share any details about care needs, timeline, or questions you have..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary form-submit">Request a Private Tour</button>
        </form>
        <div class="contact-info">
          <div class="contact-info-item">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <?php echo esc_html($phone); ?>
          </div>
          <div class="contact-info-item">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Reno &amp; Carson City, NV
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>