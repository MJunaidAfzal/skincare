@extends('layouts.app')

@section('title', 'Privacy Policy - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/privacy.css') }}">
@endsection

@section('content')
     <!-- ======== BREADCRUMB ======== -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-inner">
            <a href="#">Home</a>
            <span class="sep"><i class="fas fa-chevron-right"></i></span>
            <span class="current">Privacy Policy</span>
        </div>
    </div>

    <!-- ======== HERO ======== -->
    <section class="privacy-hero">
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
        <div class="privacy-hero-inner">
            <div class="hero-eyebrow"><i class="fas fa-shield-alt"></i> Your Privacy Matters</div>
            <h1>Privacy <span>Policy</span></h1>
            <div class="hero-divider"></div>
            <p>We are committed to protecting your personal information and being transparent about our data practices.</p>
        </div>
    </section>

    <!-- ======== PRIVACY MAIN ======== -->
    <section class="privacy-main">
        <div class="privacy-container">
            <div class="privacy-content">

                <div class="content-intro reveal">
                    <div class="intro-icon"><i class="fas fa-user-shield"></i></div>
                    <h2 class="intro-title">How We Protect Your Information</h2>
                    <p class="intro-text">This Privacy Policy explains how Glamour Skincare collects, uses, discloses, and safeguards your information when you visit our website and use our services. We respect your privacy and are committed to protecting your personal data.</p>
                </div>

                <div class="policy-sections">

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-info-circle"></i></div>
                            <h3 class="section-title">Information We Collect</h3>
                        </div>
                        <div class="section-content">
                            <p>We collect information you provide directly to us, such as when you create an account, make a purchase, or contact us for support. This may include:</p>
                            <ul>
                                <li><span class="highlight">Personal Information:</span> Name, email address, phone number, shipping/billing address</li>
                                <li><span class="highlight">Account Information:</span> Username, password, purchase history</li>
                                <li><span class="highlight">Payment Information:</span> Credit card details (processed securely by third-party providers)</li>
                                <li><span class="highlight">Communication Data:</span> Messages, reviews, and feedback you send us</li>
                            </ul>
                            <p>We also automatically collect certain information when you use our website, including IP address, browser type, and browsing behavior.</p>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-cogs"></i></div>
                            <h3 class="section-title">How We Use Your Information</h3>
                        </div>
                        <div class="section-content">
                            <p>We use the information we collect to:</p>
                            <ul>
                                <li>Process and fulfill your orders</li>
                                <li>Provide customer service and support</li>
                                <li>Send you important updates about your orders</li>
                                <li>Improve our products and services</li>
                                <li>Send marketing communications (with your consent)</li>
                                <li>Prevent fraud and ensure security</li>
                                <li>Comply with legal obligations</li>
                            </ul>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-share-alt"></i></div>
                            <h3 class="section-title">Information Sharing</h3>
                        </div>
                        <div class="section-content">
                            <p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
                            <ul>
                                <li><span class="highlight">Service Providers:</span> With trusted partners who help us operate our business (payment processors, shipping companies)</li>
                                <li><span class="highlight">Legal Requirements:</span> When required by law or to protect our rights</li>
                                <li><span class="highlight">Business Transfers:</span> In connection with a merger, acquisition, or sale of assets</li>
                                <li><span class="highlight">With Your Consent:</span> When you explicitly agree to sharing</li>
                            </ul>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-cookie-bite"></i></div>
                            <h3 class="section-title">Cookies and Tracking</h3>
                        </div>
                        <div class="section-content">
                            <p>We use cookies and similar technologies to enhance your browsing experience, analyze site traffic, and personalize content. You can control cookie settings through your browser preferences.</p>
                            <div class="data-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Cookie Type</th>
                                            <th>Purpose</th>
                                            <th>Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Essential Cookies</td>
                                            <td>Website functionality</td>
                                            <td>Session</td>
                                        </tr>
                                        <tr>
                                            <td>Analytics Cookies</td>
                                            <td>Usage statistics</td>
                                            <td>2 years</td>
                                        </tr>
                                        <tr>
                                            <td>Marketing Cookies</td>
                                            <td>Personalized ads</td>
                                            <td>1 year</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-lock"></i></div>
                            <h3 class="section-title">Data Security</h3>
                        </div>
                        <div class="section-content">
                            <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. This includes:</p>
                            <ul>
                                <li>SSL encryption for data transmission</li>
                                <li>Secure payment processing</li>
                                <li>Regular security audits</li>
                                <li>Employee access controls</li>
                                <li>Data backup and recovery procedures</li>
                            </ul>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-user-edit"></i></div>
                            <h3 class="section-title">Your Rights</h3>
                        </div>
                        <div class="section-content">
                            <p>You have the following rights regarding your personal information:</p>
                            <ul>
                                <li><span class="highlight">Access:</span> Request a copy of your personal data</li>
                                <li><span class="highlight">Correction:</span> Update inaccurate information</li>
                                <li><span class="highlight">Deletion:</span> Request removal of your data</li>
                                <li><span class="highlight">Portability:</span> Receive your data in a structured format</li>
                                <li><span class="highlight">Opt-out:</span> Unsubscribe from marketing communications</li>
                            </ul>
                            <p>To exercise these rights, please contact us using the information below.</p>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-calendar-alt"></i></div>
                            <h3 class="section-title">Data Retention</h3>
                        </div>
                        <div class="section-content">
                            <p>We retain your personal information only as long as necessary to fulfill the purposes outlined in this policy, unless a longer retention period is required by law. Account data is retained while your account is active and for a reasonable period thereafter for customer service and legal purposes.</p>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-external-link-alt"></i></div>
                            <h3 class="section-title">Third-Party Links</h3>
                        </div>
                        <div class="section-content">
                            <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites. We encourage you to review the privacy policies of any third-party websites you visit.</p>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-child"></i></div>
                            <h3 class="section-title">Children's Privacy</h3>
                        </div>
                        <div class="section-content">
                            <p>Our services are not intended for children under 13. We do not knowingly collect personal information from children under 13. If we become aware that we have collected personal information from a child under 13, we will take steps to delete such information.</p>
                        </div>
                    </div>

                    <div class="policy-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-sync-alt"></i></div>
                            <h3 class="section-title">Policy Updates</h3>
                        </div>
                        <div class="section-content">
                            <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last Updated" date. We encourage you to review this policy periodically.</p>
                        </div>
                    </div>

                </div>

                <div class="contact-section">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <h3 class="contact-title">Questions About Your Privacy?</h3>
                    <p class="contact-text">If you have any questions about this Privacy Policy or our data practices, please don't hesitate to contact us. We're here to help and ensure your experience with Glamour Skincare is safe and enjoyable.</p>
                    <a href="contact.html" class="contact-btn">
                        <i class="fas fa-paper-plane"></i> Contact Us
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