@extends('layouts.app')

@section('title', 'Refund Policy - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/refund.css') }}">
@endsection

@section('content')
   <!-- ======== BREADCRUMB ======== -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-inner">
            <a href="#">Home</a>
            <span class="sep"><i class="fas fa-chevron-right"></i></span>
            <span class="current">Refund Policy</span>
        </div>
    </div>

    <!-- ======== HERO ======== -->
    <section class="refund-hero">
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
        <div class="refund-hero-inner">
            <div class="hero-eyebrow"><i class="fas fa-undo-alt"></i> Hassle-Free Returns</div>
            <h1>Refund <span>Policy</span></h1>
            <div class="hero-divider"></div>
            <p>We're committed to your satisfaction. Learn about our fair and transparent refund process designed to make returns easy.</p>
        </div>
    </section>

    <!-- ======== REFUND MAIN ======== -->
    <section class="refund-main">
        <div class="refund-container">
            <div class="refund-content">

                <div class="content-intro reveal">
                    <div class="intro-icon"><i class="fas fa-shield-alt"></i></div>
                    <h2 class="intro-title">Your Satisfaction is Our Priority</h2>
                    <p class="intro-text">At Glamour Skincare, we believe in the quality of our products. If you're not completely satisfied, our refund policy ensures you can return items with confidence. Here's everything you need to know about our return and refund process.</p>
                </div>

                <div class="refund-sections">

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-calendar-check"></i></div>
                            <h3 class="section-title">Refund Eligibility</h3>
                        </div>
                        <div class="section-content">
                            <p>You may request a refund for products purchased from Glamour Skincare within <span class="highlight">30 days</span> of delivery, provided the following conditions are met:</p>
                            <ul>
                                <li>Items must be in their original packaging and unused</li>
                                <li>Product must be in resalable condition</li>
                                <li>Original receipt or order confirmation must be provided</li>
                                <li>Items must not be on our non-refundable list</li>
                            </ul>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-route"></i></div>
                            <h3 class="section-title">How to Start a Return</h3>
                        </div>
                        <div class="section-content">
                            <p>Starting a return is simple and can be done in several ways:</p>
                            <ul>
                                <li><span class="highlight">Online Portal:</span> Log into your account and initiate a return request</li>
                                <li><span class="highlight">Email:</span> Contact our customer service at returns@glamourskincare.com</li>
                                <li><span class="highlight">Phone:</span> Call our support team at +1 (555) 123-4567</li>
                                <li><span class="highlight">In-Store:</span> Visit our physical location with your receipt</li>
                            </ul>
                            <p>Once your return is approved, we'll provide a prepaid return shipping label.</p>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-clock"></i></div>
                            <h3 class="section-title">Processing Timeline</h3>
                        </div>
                        <div class="section-content">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-dot"></div>
                                    <div class="timeline-content">
                                        <div class="timeline-title">Return Request (Day 1-2)</div>
                                        <div class="timeline-text">Submit your return request through our portal or contact support. We'll review and approve within 24-48 hours.</div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-dot"></div>
                                    <div class="timeline-content">
                                        <div class="timeline-title">Return Shipping (Day 3-7)</div>
                                        <div class="timeline-text">Package and ship your items using the provided label. Returns typically arrive at our warehouse within 3-5 business days.</div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-dot"></div>
                                    <div class="timeline-content">
                                        <div class="timeline-title">Inspection & Processing (Day 8-10)</div>
                                        <div class="timeline-text">Our team inspects returned items. Approved refunds are processed within 2 business days of inspection.</div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-dot"></div>
                                    <div class="timeline-content">
                                        <div class="timeline-title">Refund Issued (Day 11-14)</div>
                                        <div class="timeline-text">Refunds appear in your account within 3-5 business days, depending on your payment method.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-credit-card"></i></div>
                            <h3 class="section-title">Refund Methods</h3>
                        </div>
                        <div class="section-content">
                            <p>Refunds are processed using the same payment method used for purchase:</p>
                            <ul>
                                <li><span class="highlight">Credit/Debit Cards:</span> Refund posted within 3-5 business days</li>
                                <li><span class="highlight">PayPal:</span> Refund appears in PayPal account within 1-3 business days</li>
                                <li><span class="highlight">Store Credit:</span> Immediate credit to your account for future purchases</li>
                                <li><span class="highlight">Bank Transfer:</span> Direct deposit within 5-7 business days</li>
                            </ul>
                            <p>Processing times may vary depending on your financial institution.</p>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-ban"></i></div>
                            <h3 class="section-title">Non-Refundable Items</h3>
                        </div>
                        <div class="section-content">
                            <p>The following items are not eligible for refunds:</p>
                            <ul>
                                <li>Opened or used cosmetic products (for hygiene reasons)</li>
                                <li>Items damaged due to misuse or accidents</li>
                                <li>Products purchased during promotional sales (marked as final sale)</li>
                                <li>Custom or personalized items</li>
                                <li>Gift cards or digital products</li>
                                <li>Items returned after 30 days from delivery</li>
                            </ul>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-exchange-alt"></i></div>
                            <h3 class="section-title">Exchanges</h3>
                        </div>
                        <div class="section-content">
                            <p>We offer free exchanges for defective or incorrect items. For size/color exchanges:</p>
                            <ul>
                                <li>Exchange requests must be made within 30 days of delivery</li>
                                <li>Items must be unused and in original packaging</li>
                                <li>Exchange shipping is free for defective items</li>
                                <li>Customer pays return shipping for size/color exchanges</li>
                                <li>New item shipping is always free</li>
                            </ul>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-truck"></i></div>
                            <h3 class="section-title">Shipping Costs</h3>
                        </div>
                        <div class="section-content">
                            <p><span class="highlight">Return Shipping:</span> We provide prepaid return labels for defective items. For other returns, customers are responsible for return shipping costs unless the item was shipped incorrectly.</p>
                            <p><span class="highlight">Original Shipping:</span> Original shipping charges are not refunded unless the return is due to our error.</p>
                            <p><span class="highlight">International Returns:</span> Customers are responsible for all international return shipping costs and customs fees.</p>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-tags"></i></div>
                            <h3 class="section-title">Promotional Items</h3>
                        </div>
                        <div class="section-content">
                            <p>Items purchased with promotional codes or during sales may be subject to different return policies:</p>
                            <ul>
                                <li>Clearance or final sale items may not be eligible for return</li>
                                <li>Promotional discounts may be deducted from refund amounts</li>
                                <li>Free gift items must be returned with the purchased product</li>
                                <li>Bundled items may require all components to be returned</li>
                            </ul>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-gift"></i></div>
                            <h3 class="section-title">Gift Returns</h3>
                        </div>
                        <div class="section-content">
                            <p>For gift purchases, the recipient has 30 days from delivery to initiate a return:</p>
                            <ul>
                                <li>Gift recipient must contact us with order details</li>
                                <li>Store credit will be issued to the original purchaser</li>
                                <li>Cash refunds are not available for gift returns</li>
                                <li>Gift cards can be returned for store credit only</li>
                            </ul>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-question-circle"></i></div>
                            <h3 class="section-title">Damaged or Defective Items</h3>
                        </div>
                        <div class="section-content">
                            <p>If you receive a damaged or defective item:</p>
                            <ul>
                                <li>Contact us within 48 hours of delivery with photos</li>
                                <li>We'll arrange free return shipping and replacement</li>
                                <li>Full refunds issued if replacement is unavailable</li>
                                <li>Priority processing for defective items</li>
                            </ul>
                        </div>
                    </div>

                    <div class="refund-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-envelope"></i></div>
                            <h3 class="section-title">Contact Us</h3>
                        </div>
                        <div class="section-content">
                            <p>Have questions about our refund policy? We're here to help:</p>
                            <ul>
                                <li><span class="highlight">Email:</span> returns@glamourskincare.com</li>
                                <li><span class="highlight">Phone:</span> +1 (555) 123-4567 (Mon-Fri, 9am-6pm EST)</li>
                                <li><span class="highlight">Live Chat:</span> Available on our website during business hours</li>
                                <li><span class="highlight">Address:</span> 123 Beauty Street, Glamour City, GC 12345</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="contact-section">
                    <div class="contact-icon"><i class="fas fa-headset"></i></div>
                    <h3 class="contact-title">Need Help with a Return?</h3>
                    <p class="contact-text">Our customer service team is ready to assist you with any questions or concerns about returns and refunds. We strive to make the process as smooth as possible for you.</p>
                    <a href="contact.html" class="contact-btn">
                        <i class="fas fa-comments"></i> Start a Return
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Back to Top -->
    <button class="back-top" id="backTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <i class="fas fa-arrow-up"></i>
    </button>
@endsection

@section('scripts')
    <script>
        // ── Back to top ──
        window.addEventListener('scroll', () => {
            document.getElementById('backTop').classList.toggle('show', window.scrollY > 300);
        });

        // ── Scroll reveal ──
        const revealObserver = new IntersectionObserver(entries => {
            entries.forEach((entry, idx) => {
                if (entry.isIntersecting) {
                    setTimeout(() => entry.target.classList.add('visible'), idx * 80);
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin:'0px 0px -50px 0px' });
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
    </script>
@endsection