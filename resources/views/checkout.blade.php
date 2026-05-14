@extends('layouts.app')

@section('title', 'Checkout - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endsection

@section('content')
    
    <!-- ======== BREADCRUMB ======== -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-inner">
            <a href="#">Home</a>
            <span class="sep"><i class="fas fa-chevron-right"></i></span>
            <a href="#">Cart</a>
            <span class="sep"><i class="fas fa-chevron-right"></i></span>
            <span class="current">Checkout</span>
        </div>
    </div>

    <!-- ======== HERO ======== -->
    <section class="checkout-hero">
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
        <div class="checkout-hero-inner">
            <div class="hero-eyebrow"><i class="fas fa-credit-card"></i> Secure Checkout</div>
            <h1>Complete Your <span>Order</span></h1>
            <div class="hero-divider"></div>
            <p>Almost there! Review your details and complete your purchase for radiant, glowing skin.</p>
        </div>
    </section>

    <!-- ======== CHECKOUT MAIN ======== -->
    <section class="checkout-main">
        <div class="checkout-container">
            <div class="checkout-layout">

                <!-- CHECKOUT FORM -->
                <div class="checkout-form">

                    <!-- Contact Information -->
                    <div class="form-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-envelope"></i></div>
                            <h3 class="section-title">Contact Information</h3>
                        </div>
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
                            <div class="form-group full">
                                <label class="form-label">Email Address <span class="req">*</span></label>
                                <input class="form-input" type="email" placeholder="sarah@example.com" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group full">
                                <label class="form-label">Phone Number</label>
                                <input class="form-input" type="tel" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="form-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-truck"></i></div>
                            <h3 class="section-title">Shipping Address</h3>
                        </div>
                        <div class="form-row">
                            <div class="form-group full">
                                <label class="form-label">Street Address <span class="req">*</span></label>
                                <input class="form-input" type="text" placeholder="123 Beauty Street" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group full">
                                <label class="form-label">Apartment, suite, etc.</label>
                                <input class="form-input" type="text" placeholder="Suite 400">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">City <span class="req">*</span></label>
                                <input class="form-input" type="text" placeholder="Glamour City" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">State/Province <span class="req">*</span></label>
                                <input class="form-input" type="text" placeholder="CA" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">ZIP/Postal Code <span class="req">*</span></label>
                                <input class="form-input" type="text" placeholder="12345" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Country <span class="req">*</span></label>
                                <select class="form-select" required>
                                    <option value="" disabled selected>Select Country</option>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="form-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-credit-card"></i></div>
                            <h3 class="section-title">Payment Method</h3>
                        </div>
                        <div class="payment-methods">
                            <div class="payment-method selected" onclick="selectPayment(this)">
                                <div class="payment-icon"><i class="fab fa-cc-visa"></i></div>
                                <div class="payment-info">
                                    <div class="payment-name">Credit Card</div>
                                    <div class="payment-desc">Visa, Mastercard, Amex</div>
                                </div>
                            </div>
                            <div class="payment-method" onclick="selectPayment(this)">
                                <div class="payment-icon"><i class="fab fa-paypal"></i></div>
                                <div class="payment-info">
                                    <div class="payment-name">PayPal</div>
                                    <div class="payment-desc">Secure payment</div>
                                </div>
                            </div>
                            <div class="payment-method" onclick="selectPayment(this)">
                                <div class="payment-icon"><i class="fas fa-university"></i></div>
                                <div class="payment-info">
                                    <div class="payment-name">Bank Transfer</div>
                                    <div class="payment-desc">Direct transfer</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="cardFields" style="margin-top:1.5rem;">
                            <div class="form-group full">
                                <label class="form-label">Card Number <span class="req">*</span></label>
                                <input class="form-input" type="text" placeholder="1234 5678 9012 3456" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Expiry Date <span class="req">*</span></label>
                                <input class="form-input" type="text" placeholder="MM/YY" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">CVV <span class="req">*</span></label>
                                <input class="form-input" type="text" placeholder="123" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group full">
                                <label class="form-label">Name on Card <span class="req">*</span></label>
                                <input class="form-input" type="text" placeholder="Sarah Johnson" required>
                            </div>
                        </div>
                    </div>

                    <!-- Order Notes -->
                    <div class="form-section reveal">
                        <div class="section-header">
                            <div class="section-icon"><i class="fas fa-sticky-note"></i></div>
                            <h3 class="section-title">Order Notes</h3>
                        </div>
                        <div class="order-notes">
                            <textarea placeholder="Special delivery instructions or gift messages..."></textarea>
                        </div>
                    </div>

                </div>

                <!-- ORDER SUMMARY -->
                <div class="order-summary reveal">
                    <div class="summary-header">
                        <div class="summary-icon"><i class="fas fa-shopping-bag"></i></div>
                        <h3 class="summary-title">Order Summary</h3>
                    </div>

                    <div class="summary-items">
                        <div class="summary-item">
                            <div class="item-thumb">
                                <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=400&q=80" alt="Radiance Serum">
                            </div>
                            <div class="item-details">
                                <div class="item-name">Radiance Glow Serum</div>
                                <div class="item-variant">30ml x 1</div>
                            </div>
                            <div class="item-price">$68.00</div>
                        </div>
                        <div class="summary-item">
                            <div class="item-thumb">
                                <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=400&q=80" alt="Golden Hour Moisturizer">
                            </div>
                            <div class="item-details">
                                <div class="item-name">Golden Hour Moisturizer</div>
                                <div class="item-variant">50ml x 2</div>
                            </div>
                            <div class="item-price">$108.00</div>
                        </div>
                        <div class="summary-item">
                            <div class="item-thumb">
                                <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=400&q=80" alt="Rose Eye Revive Cream">
                            </div>
                            <div class="item-details">
                                <div class="item-name">Rose Eye Revive Cream</div>
                                <div class="item-variant">15ml x 1</div>
                            </div>
                            <div class="item-price">$42.00</div>
                        </div>
                    </div>

                    <div class="summary-totals">
                        <div class="summary-row subtotal">
                            <span>Subtotal</span>
                            <span>$218.00</span>
                        </div>
                        <div class="summary-row shipping">
                            <span>Shipping</span>
                            <span>$5.99</span>
                        </div>
                        <div class="summary-row tax">
                            <span>Tax</span>
                            <span>$17.44</span>
                        </div>
                        <div class="summary-row total">
                            <span>Total</span>
                            <span class="summary-total">$241.43</span>
                        </div>
                    </div>

                    <div class="promo-section">
                        <input type="text" class="promo-input" placeholder="Promo code" id="promoInput">
                        <button class="promo-btn" onclick="applyPromo()">Apply Code</button>
                    </div>

                    <button class="checkout-btn" onclick="placeOrder()">
                        <i class="fas fa-lock"></i> Place Order
                    </button>

                    <div class="checkout-terms">
                        By placing your order, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
                    </div>
                </div>

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
         // ── Back to top ──
        window.addEventListener('scroll', () => {
            document.getElementById('backTop').classList.toggle('show', window.scrollY > 300);
        });

        // ── Payment method selection ──
        function selectPayment(method) {
            document.querySelectorAll('.payment-method').forEach(m => m.classList.remove('selected'));
            method.classList.add('selected');
            // In real app, show/hide relevant fields
        }

        // ── Apply promo ──
        function applyPromo() {
            const code = document.getElementById('promoInput').value.trim().toUpperCase();
            if (code === 'GLOW10') {
                showToast('Promo code applied! 10% off');
            } else {
                showToast('Invalid promo code');
            }
        }

        // ── Place order ──
        function placeOrder() {
            showToast('Processing order...');
            setTimeout(() => {
                showToast('Order placed successfully!');
                // In real app, redirect to confirmation page
            }, 2000);
        }

        // ── Toast ──
        let toastTimer;
        function showToast(msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toastMsg').textContent = msg;
            toast.classList.add('show');
            clearTimeout(toastTimer);
            toastTimer = setTimeout(() => toast.classList.remove('show'), 3000);
        }

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