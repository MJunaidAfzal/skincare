@extends('layouts.app')

@section('title', 'Contact Us - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
   
    <!-- ======== HERO ======== -->
    <section class="contact-hero">
        <div class="hero-decor">
            <div class="hero-decor-circle hdc1"></div>
            <div class="hero-decor-circle hdc2"></div>
            <div class="hero-decor-circle hdc3"></div>
            <div class="hero-decor-circle hdc4"></div>
        </div>
        <div class="hero-particles">
            <div class="hp hp1"></div><div class="hp hp2"></div>
            <div class="hp hp3"></div><div class="hp hp4"></div>
        </div>
        <div class="contact-hero-inner">
            <div class="hero-eyebrow"><i class="fas fa-envelope-open-text"></i> We'd Love to Hear From You</div>
            <h1>Get in <span>Touch</span></h1>
            <div class="hero-divider"></div>
            <p>Whether you have a question about our products, need skincare advice, or want to share your glow story — our team is here to help you.</p>
        </div>
    </section>

    <!-- ======== BREADCRUMB ======== -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-inner">
            <a href="#">Home</a>
            <span class="sep"><i class="fas fa-chevron-right"></i></span>
            <span class="current">Contact Us</span>
        </div>
    </div>

    <!-- ======== QUICK CONTACT CARDS ======== -->
    <section class="quick-cards-section">
        <div class="section-container">
            <div class="quick-cards reveal">
                <a href="tel:+15551234567" class="quick-card">
                    <div class="qc-icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="qc-title">Call Us</div>
                    <div class="qc-detail">+1 (555) 123-4567<br>Mon–Fri, 9am–6pm EST</div>
                    <div class="qc-action">Call Now <i class="fas fa-arrow-right"></i></div>
                </a>
                <a href="mailto:hello@glamourskincare.com" class="quick-card">
                    <div class="qc-icon" style="background:linear-gradient(135deg,var(--pink),var(--rose));"><i class="fas fa-envelope"></i></div>
                    <div class="qc-title">Email Us</div>
                    <div class="qc-detail">hello@glamourskincare.com<br>We reply within 24 hours</div>
                    <div class="qc-action">Send Email <i class="fas fa-arrow-right"></i></div>
                </a>
                <a href="#" class="quick-card">
                    <div class="qc-icon" style="background:linear-gradient(135deg,#a8d8ea,#7ec8e3);"><i class="fab fa-whatsapp" style="font-size:1.8rem;"></i></div>
                    <div class="qc-title">WhatsApp</div>
                    <div class="qc-detail">Chat with our skincare<br>experts instantly</div>
                    <div class="qc-action">Open Chat <i class="fas fa-arrow-right"></i></div>
                </a>
                <a href="#" class="quick-card">
                    <div class="qc-icon" style="background:linear-gradient(135deg,#c8e6c9,#81c784);"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="qc-title">Visit Us</div>
                    <div class="qc-detail">123 Beauty Street<br>Glamour City, GC 12345</div>
                    <div class="qc-action">Get Directions <i class="fas fa-arrow-right"></i></div>
                </a>
            </div>
        </div>
    </section>

    <!-- ======== MAIN CONTACT ======== -->
    <section class="contact-main">
        <div class="section-container">
            <div class="contact-grid">

                <!-- LEFT: Info Panel -->
                <div class="contact-info-panel reveal">
                    <div class="panel-badge">Reach Out</div>
                    <h2 class="panel-title">We're Always <span>Here for You</span></h2>
                    <p class="panel-desc">Our dedicated skincare specialists are passionate about helping you find the perfect routine. Don't hesitate to reach out — every question deserves a thoughtful, expert answer.</p>

                    <div class="info-items">
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="info-content">
                                <div class="info-label">Phone</div>
                                <div class="info-val">+1 (555) 123-4567</div>
                                <div class="info-sub">Mon–Fri, 9:00am – 6:00pm EST</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon" style="background:linear-gradient(135deg,var(--pink),var(--rose));"><i class="fas fa-envelope"></i></div>
                            <div class="info-content">
                                <div class="info-label">Email</div>
                                <div class="info-val">hello@glamourskincare.com</div>
                                <div class="info-sub">Average response time: under 24 hours</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon" style="background:linear-gradient(135deg,#a8d8ea,#7ec8e3);color:var(--dark);"><i class="fas fa-map-marker-alt" style="color:white;"></i></div>
                            <div class="info-content">
                                <div class="info-label">Address</div>
                                <div class="info-val">123 Beauty Street, Suite 400</div>
                                <div class="info-sub">Glamour City, GC 12345, United States</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon" style="background:linear-gradient(135deg,#c8e6c9,#81c784);"><i class="fab fa-whatsapp" style="font-size:1.1rem;"></i></div>
                            <div class="info-content">
                                <div class="info-label">WhatsApp</div>
                                <div class="info-val">+1 (555) 987-6543</div>
                                <div class="info-sub">Available 7 days a week, 10am–8pm</div>
                            </div>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div class="hours-card reveal">
                        <div class="hours-header">
                            <i class="fas fa-clock"></i>
                            <span>Business Hours</span>
                        </div>
                        <div class="hours-list">
                            <div class="hours-row"><span class="day">Monday – Friday</span><span class="time">9:00am – 6:00pm</span></div>
                            <div class="hours-divider"></div>
                            <div class="hours-row"><span class="day">Saturday</span><span class="time">10:00am – 4:00pm</span></div>
                            <div class="hours-divider"></div>
                            <div class="hours-row"><span class="day">Sunday</span><span class="time closed">Closed</span></div>
                            <div class="hours-divider"></div>
                            <div class="hours-row"><span class="day">Public Holidays</span><span class="time closed">Closed</span></div>
                        </div>
                    </div>

                    <!-- Social -->
                    <div class="social-connect">
                        <div class="social-label">Follow Us</div>
                        <div class="social-row">
                            <a class="soc-btn" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                            <a class="soc-btn" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                            <a class="soc-btn" href="#"><i class="fab fa-pinterest-p"></i> Pinterest</a>
                            <a class="soc-btn" href="#"><i class="fab fa-tiktok"></i> TikTok</a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Form -->
                <div class="contact-form-wrap reveal">
                    <!-- Topic chips above header -->
                    <div class="form-header">
                        <div class="form-header-top">
                            <h3 class="form-title">Send Us a <span>Message</span></h3>
                            <div class="response-badge"><span class="resp-dot"></span> Replies in &lt;24h</div>
                        </div>
                        <p class="form-subtitle">Choose a topic below and fill in the form — we'll get back to you shortly.</p>
                    </div>

                    <div class="topic-chips">
                        <button class="topic-chip active" onclick="selectTopic(this)">General Inquiry</button>
                        <button class="topic-chip" onclick="selectTopic(this)">Product Help</button>
                        <button class="topic-chip" onclick="selectTopic(this)">Order & Shipping</button>
                        <button class="topic-chip" onclick="selectTopic(this)">Skincare Advice</button>
                        <button class="topic-chip" onclick="selectTopic(this)">Returns & Refunds</button>
                        <button class="topic-chip" onclick="selectTopic(this)">Partnership</button>
                    </div>

                    <div class="form-body" id="formBody">
                        <form id="contactForm" novalidate>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">First Name <span class="req">*</span></label>
                                    <input class="form-input" type="text" placeholder="Sarah" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last Name <span class="req">*</span></label>
                                    <input class="form-input" type="text" placeholder="Johnson" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Email Address <span class="req">*</span></label>
                                    <input class="form-input" type="email" placeholder="sarah@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input class="form-input" type="tel" placeholder="+1 (555) 000-0000">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Order Number <span style="color:var(--mid-gray);font-weight:400;font-size:0.78rem;">(if applicable)</span></label>
                                    <input class="form-input" type="text" placeholder="GS-12345">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Skin Type</label>
                                    <select class="form-select">
                                        <option value="" disabled selected>Select your skin type</option>
                                        <option>Normal</option>
                                        <option>Dry</option>
                                        <option>Oily</option>
                                        <option>Combination</option>
                                        <option>Sensitive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group full">
                                    <label class="form-label">Subject <span class="req">*</span></label>
                                    <input class="form-input" type="text" placeholder="How can we help you today?" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group full">
                                    <label class="form-label">Message <span class="req">*</span></label>
                                    <textarea class="form-textarea" placeholder="Tell us more about your inquiry. The more detail you provide, the better we can help you..." required></textarea>
                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="form-group" style="margin-bottom:1.25rem;">
                                <label class="form-label">Attach a Photo <span style="color:var(--mid-gray);font-weight:400;font-size:0.78rem;">(optional — helps us assist better)</span></label>
                                <div class="upload-zone" id="uploadZone">
                                    <input type="file" accept="image/*,.pdf" onchange="handleFile(this)">
                                    <div class="upload-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <div class="upload-text" id="uploadText"><strong>Click to upload</strong> or drag & drop</div>
                                    <div class="upload-hint">PNG, JPG, PDF — max 5MB</div>
                                </div>
                            </div>

                            <!-- Experience Rating -->
                            <div class="form-group" style="margin-bottom:1.25rem;">
                                <label class="form-label">Rate Your Experience With Us</label>
                                <div class="rating-group">
                                    <span class="rating-label-sm">Overall satisfaction:</span>
                                    <div class="star-rate" id="starRate">
                                        <i class="far fa-star" data-val="1"></i>
                                        <i class="far fa-star" data-val="2"></i>
                                        <i class="far fa-star" data-val="3"></i>
                                        <i class="far fa-star" data-val="4"></i>
                                        <i class="far fa-star" data-val="5"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Newsletter checkbox -->
                            <div class="check-group">
                                <input type="checkbox" id="newsCheck">
                                <label class="check-custom" for="newsCheck"><i class="fas fa-check"></i></label>
                                <span class="check-text">I'd love to receive skincare tips, exclusive offers, and product updates. <a href="#">Unsubscribe anytime.</a></span>
                            </div>
                            <div class="check-group" style="padding-top:0.65rem;">
                                <input type="checkbox" id="privacyCheck" required>
                                <label class="check-custom" for="privacyCheck"><i class="fas fa-check"></i></label>
                                <span class="check-text">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>. <span class="req" style="color:var(--rose);">*</span></span>
                            </div>

                            <div class="form-submit-row">
                                <button class="btn-submit" type="submit" id="submitBtn">
                                    <i class="fas fa-paper-plane"></i> Send Message
                                </button>
                                <div class="submit-note"><i class="fas fa-lock"></i> Your data is 100% secure & private</div>
                            </div>
                        </form>
                    </div>

                    <!-- SUCCESS STATE -->
                    <div class="form-success" id="formSuccess">
                        <div class="success-icon"><i class="fas fa-check"></i></div>
                        <div class="success-title">Message Sent!</div>
                        <p class="success-text">Thank you for reaching out to us. Our skincare specialists will review your message and get back to you within 24 hours. ✨</p>
                        <button class="btn-back" onclick="resetForm()"><i class="fas fa-arrow-left" style="margin-right:6px;font-size:0.8rem;"></i> Send Another Message</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======== MAP ======== -->
    <section class="map-section">
        <div class="section-container">
            <div class="map-wrap reveal">
                <div class="map-overlay-card">
                    <div class="map-card-title"><i class="fas fa-map-marker-alt"></i> Our Location</div>
                    <div class="map-card-addr">123 Beauty Street, Suite 400<br>Glamour City, GC 12345<br>United States</div>
                    <a href="#" class="map-card-btn"><i class="fas fa-directions"></i> Get Directions</a>
                </div>
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Interactive map — paste your Google Maps embed here</p>
                </div>
                <!-- Replace above with: <iframe src="YOUR_GOOGLE_MAPS_EMBED" width="100%" height="400" style="border:0;" allowfullscreen loading="lazy"></iframe> -->
            </div>
        </div>
    </section>

    <!-- ======== FAQ ======== -->
    <section class="faq-section">
        <div class="section-container">
            <div class="faq-header reveal">
                <div class="faq-eyebrow">Quick Answers</div>
                <h2 class="faq-title">Frequently Asked <span>Questions</span></h2>
            </div>
            <div class="faq-grid reveal">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        How long does shipping take?
                        <div class="faq-toggle"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="faq-answer"><div class="faq-answer-inner">Standard shipping takes 3–5 business days. Express shipping (1–2 days) is available at checkout. Free standard shipping on all orders over $50. International orders typically arrive within 7–14 business days depending on your location.</div></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        What is your return policy?
                        <div class="faq-toggle"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="faq-answer"><div class="faq-answer-inner">We offer a hassle-free 30-day return policy. If you're not completely satisfied, return the product in its original condition for a full refund or exchange. Simply contact us and we'll guide you through the easy process.</div></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Are your products cruelty-free?
                        <div class="faq-toggle"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="faq-answer"><div class="faq-answer-inner">Absolutely! All Glamour Skincare products are 100% cruelty-free and never tested on animals. We're proud members of the Leaping Bunny Program and certified by PETA. Our formulations are also free from parabens, sulfates, and artificial fragrances.</div></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Can I track my order?
                        <div class="faq-toggle"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="faq-answer"><div class="faq-answer-inner">Yes! Once your order ships, you'll receive a tracking number via email. You can use this to monitor your package in real time. If you haven't received your tracking info within 2 business days of ordering, please contact us.</div></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Do you offer skincare consultations?
                        <div class="faq-toggle"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="faq-answer"><div class="faq-answer-inner">Yes! We offer free virtual skincare consultations with our certified beauty specialists. You can book a session via our website or simply describe your skin concerns in the contact form above — we're happy to recommend the perfect routine for you.</div></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        Do you ship internationally?
                        <div class="faq-toggle"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="faq-answer"><div class="faq-answer-inner">We ship to over 40 countries worldwide! International shipping rates and delivery times vary by destination. Please note that import duties and taxes may apply depending on your country's regulations. Check our shipping page for the full list of countries we serve.</div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======== NEWSLETTER ======== -->
    <section class="newsletter-strip">
        <div class="nl-decor nl-d1"></div>
        <div class="nl-decor nl-d2"></div>
        <div class="newsletter-inner">
            <div class="nl-icon"><i style="color: white;" class="fas fa-envelope"></i></div>
            <h2 class="nl-title">Stay in the <span>Glow</span></h2>
            <p class="nl-sub">Subscribe for exclusive skincare tips, early access to new launches, and members-only offers delivered straight to your inbox.</p>
            <div class="nl-form">
                <input class="nl-input" type="email" placeholder="Enter your email address…" id="nlEmail">
                <button class="nl-btn" onclick="subscribeNewsletter()"><i class="fas fa-paper-plane" style="margin-right:6px;"></i> Subscribe</button>
            </div>
        </div>
    </section>


    <!-- Back to Top -->
    <button class="back-top" id="backTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Toast -->
    <div class="toast" id="toast"><i class="fas fa-check-circle"></i><span id="toastMsg"></span></div>

@endsection

@section('scripts')
 <script>
        // ── Topic chips ──
        function selectTopic(btn) {
            document.querySelectorAll('.topic-chip').forEach(c => c.classList.remove('active'));
            btn.classList.add('active');
        }

        // ── Star rating ──
        const stars = document.querySelectorAll('#starRate i');
        let selectedRating = 0;
        stars.forEach(star => {
            star.addEventListener('mouseenter', () => {
                const val = parseInt(star.dataset.val);
                stars.forEach((s, i) => {
                    s.className = i < val ? 'fas fa-star lit' : 'far fa-star';
                });
            });
            star.addEventListener('mouseleave', () => {
                stars.forEach((s, i) => {
                    s.className = i < selectedRating ? 'fas fa-star lit' : 'far fa-star';
                });
            });
            star.addEventListener('click', () => {
                selectedRating = parseInt(star.dataset.val);
                stars.forEach((s, i) => {
                    s.className = i < selectedRating ? 'fas fa-star lit' : 'far fa-star';
                });
                showToast(selectedRating === 5 ? 'Thank you for the 5 stars!' : 'Thanks for your rating!');
            });
        });

        // ── File upload ──
        function handleFile(input) {
            if (input.files && input.files[0]) {
                document.getElementById('uploadText').innerHTML =
                    '<strong style="color:var(--gold);">' + input.files[0].name + '</strong> — ready to send';
                document.getElementById('uploadZone').style.borderColor = 'var(--gold)';
                document.getElementById('uploadZone').style.background = 'rgba(212,175,55,0.04)';
            }
        }
        const uploadZone = document.getElementById('uploadZone');
        uploadZone.addEventListener('dragover', e => { e.preventDefault(); uploadZone.classList.add('drag-over'); });
        uploadZone.addEventListener('dragleave', () => uploadZone.classList.remove('drag-over'));
        uploadZone.addEventListener('drop', e => { e.preventDefault(); uploadZone.classList.remove('drag-over'); });

        // ── Form submit ──
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…';
            btn.classList.add('loading');
            setTimeout(() => {
                document.getElementById('formBody').style.display = 'none';
                document.getElementById('formSuccess').style.display = 'block';
                document.querySelector('.topic-chips').style.display = 'none';
            }, 1800);
        });

        function resetForm() {
            document.getElementById('contactForm').reset();
            document.getElementById('formBody').style.display = 'block';
            document.getElementById('formSuccess').style.display = 'none';
            document.querySelector('.topic-chips').style.display = 'flex';
            document.getElementById('submitBtn').innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
            document.getElementById('submitBtn').classList.remove('loading');
            selectedRating = 0;
            stars.forEach(s => s.className = 'far fa-star');
            document.getElementById('uploadText').innerHTML = '<strong>Click to upload</strong> or drag & drop';
            document.getElementById('uploadZone').style.borderColor = '';
            document.getElementById('uploadZone').style.background = '';
        }

        // ── FAQ ──
        function toggleFaq(btn) {
            const item = btn.closest('.faq-item');
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        }

        // ── Newsletter ──
        function subscribeNewsletter() {
            const email = document.getElementById('nlEmail').value.trim();
            if (!email || !email.includes('@')) { showToast('Please enter a valid email'); return; }
            showToast('Welcome to the Glamour family!');
            document.getElementById('nlEmail').value = '';
        }

        // ── Toast ──
        let toastTimer;
        function showToast(msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toastMsg').textContent = msg;
            toast.classList.add('show');
            clearTimeout(toastTimer);
            toastTimer = setTimeout(() => toast.classList.remove('show'), 2800);
        }

        // ── Scroll reveal ──
        const revealObserver = new IntersectionObserver(entries => {
            entries.forEach((entry, idx) => {
                if (entry.isIntersecting) {
                    setTimeout(() => entry.target.classList.add('visible'), idx * 80);
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin:'0px 0px -40px 0px' });
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
    </script>
@endsection