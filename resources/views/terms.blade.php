@extends('layouts.app')

@section('title', 'Terms and Conditions - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/terms.css') }}">
@endsection

@section('content')
   
    <!-- ======== BREADCRUMB ======== -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-inner">
            <a href="#">Home</a>
            <span class="sep"><i class="fas fa-chevron-right"></i></span>
            <span class="current">Terms & Conditions</span>
        </div>
    </div>

    <!-- ======== HERO ======== -->
    <section class="terms-hero">
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
        <div class="terms-hero-inner">
            <div class="hero-eyebrow"><i class="fas fa-file-contract"></i> Legal Agreement</div>
            <h1>Terms & <span>Conditions</span></h1>
            <div class="hero-divider"></div>
            <p>Please read these terms carefully before using our services. By accessing Glamour Skincare, you agree to be bound by these terms.</p>
        </div>
    </section>

    <!-- ======== TERMS MAIN ======== -->
    <section class="terms-main">
        <div class="terms-container">
            <div class="terms-content">

                <div class="content-intro reveal">
                    <div class="intro-icon"><i class="fas fa-handshake"></i></div>
                    <h2 class="intro-title">Our Agreement With You</h2>
                    <p class="intro-text">These Terms & Conditions govern your use of Glamour Skincare's website and services. By accessing or using our platform, you acknowledge that you have read, understood, and agree to be bound by these terms.</p>
                </div>

                <div class="terms-sections">

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-check-circle"></i></div>
                            <h3 class="section-title">Acceptance of Terms</h3>
                        </div>
                        <div class="section-content">
                            <p>By accessing and using Glamour Skincare's website, mobile application, or any of our services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-shopping-bag"></i></div>
                            <h3 class="section-title">Use of Our Services</h3>
                        </div>
                        <div class="section-content">
                            <p>You agree to use our services only for lawful purposes and in accordance with these Terms. You are prohibited from:</p>
                            <ul>
                                <li>Using our services in any way that violates any applicable laws or regulations</li>
                                <li>Attempting to gain unauthorized access to our systems</li>
                                <li>Using automated tools to access our services without permission</li>
                                <li>Transmitting harmful code or interfering with our services</li>
                                <li>Impersonating others or providing false information</li>
                            </ul>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-box-open"></i></div>
                            <h3 class="section-title">Products and Pricing</h3>
                        </div>
                        <div class="section-content">
                            <p><span class="highlight">Product Information:</span> We strive to provide accurate product descriptions, but we do not warrant that product descriptions are complete, reliable, current, or error-free.</p>
                            <p><span class="highlight">Pricing:</span> All prices are subject to change without notice. We reserve the right to modify or discontinue products without prior notice.</p>
                            <p><span class="highlight">Availability:</span> Product availability is not guaranteed. We reserve the right to limit quantities or refuse service to any customer.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-credit-card"></i></div>
                            <h3 class="section-title">Orders and Payment</h3>
                        </div>
                        <div class="section-content">
                            <p><span class="highlight">Order Acceptance:</span> All orders are subject to acceptance and availability. We reserve the right to refuse or cancel any order for any reason.</p>
                            <p><span class="highlight">Payment:</span> Payment must be made at the time of order. We accept major credit cards and other payment methods as displayed.</p>
                            <p><span class="highlight">Taxes:</span> You are responsible for all applicable taxes. Prices displayed may or may not include taxes depending on your location.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-truck"></i></div>
                            <h3 class="section-title">Shipping and Delivery</h3>
                        </div>
                        <div class="section-content">
                            <p><span class="highlight">Shipping:</span> We will make reasonable efforts to deliver products within the estimated timeframe, but delivery dates are estimates only.</p>
                            <p><span class="highlight">Risk of Loss:</span> Risk of loss passes to the buyer upon delivery to the carrier. We are not responsible for delays caused by carriers.</p>
                            <p><span class="highlight">International Shipping:</span> Additional customs duties, taxes, or fees may apply for international orders.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-undo"></i></div>
                            <h3 class="section-title">Returns and Refunds</h3>
                        </div>
                        <div class="section-content">
                            <p><span class="highlight">Return Policy:</span> Items may be returned within 30 days of delivery, subject to our return policy conditions.</p>
                            <p><span class="highlight">Refund Processing:</span> Refunds will be processed within 5-7 business days after receipt and inspection of returned items.</p>
                            <p><span class="highlight">Exchanges:</span> We offer exchanges for different sizes or products, subject to availability.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-user-shield"></i></div>
                            <h3 class="section-title">User Accounts</h3>
                        </div>
                        <div class="section-content">
                            <p><span class="highlight">Account Creation:</span> You may need to create an account to access certain features. You are responsible for maintaining the confidentiality of your account.</p>
                            <p><span class="highlight">Account Security:</span> You agree to notify us immediately of any unauthorized use of your account.</p>
                            <p><span class="highlight">Account Termination:</span> We reserve the right to terminate accounts that violate these terms.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-copyright"></i></div>
                            <h3 class="section-title">Intellectual Property</h3>
                        </div>
                        <div class="section-content">
                            <p>The content, features, and functionality of our website are owned by Glamour Skincare and are protected by copyright, trademark, and other intellectual property laws.</p>
                            <p>You may not reproduce, distribute, or create derivative works without our express written permission.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-gavel"></i></div>
                            <h3 class="section-title">Limitation of Liability</h3>
                        </div>
                        <div class="section-content">
                            <p>Glamour Skincare shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of our services.</p>
                            <p>Our total liability to you for any claim related to our services shall not exceed the amount paid by you for the specific product or service in question.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-external-link-alt"></i></div>
                            <h3 class="section-title">Third-Party Links</h3>
                        </div>
                        <div class="section-content">
                            <p>Our website may contain links to third-party websites. We are not responsible for the content or practices of these external sites.</p>
                            <p>Links to external sites do not constitute endorsement by Glamour Skincare.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-sync-alt"></i></div>
                            <h3 class="section-title">Governing Law</h3>
                        </div>
                        <div class="section-content">
                            <p>These Terms shall be governed by and construed in accordance with the laws of [Your Jurisdiction], without regard to conflict of law principles.</p>
                            <p>Any disputes arising from these terms shall be resolved through binding arbitration in [Your Location].</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-edit"></i></div>
                            <h3 class="section-title">Changes to Terms</h3>
                        </div>
                        <div class="section-content">
                            <p>We reserve the right to modify these Terms at any time. Changes will be effective immediately upon posting on our website.</p>
                            <p>Your continued use of our services after changes constitutes acceptance of the modified terms.</p>
                        </div>
                    </div>

                    <div class="terms-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-envelope"></i></div>
                            <h3 class="section-title">Contact Information</h3>
                        </div>
                        <div class="section-content">
                            <p>If you have questions about these Terms & Conditions, please contact us:</p>
                            <ul>
                                <li><span class="highlight">Email:</span> legal@glamourskincare.com</li>
                                <li><span class="highlight">Address:</span> 123 Beauty Street, Glamour City, GC 12345</li>
                                <li><span class="highlight">Phone:</span> +1 (555) 123-4567</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="contact-section">
                    <div class="contact-icon"><i class="fas fa-comments"></i></div>
                    <h3 class="contact-title">Need Help Understanding?</h3>
                    <p class="contact-text">Our terms are designed to be fair and protect both you and us. If you have any questions or concerns about these terms, please don't hesitate to reach out. We're here to help!</p>
                    <a href="contact.html" class="contact-btn">
                        <i class="fas fa-paper-plane"></i> Contact Support
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