@extends('layouts.app')

@section('title', 'Cart - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
     <!-- ======== BREADCRUMB ======== -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-inner">
            <a href="#">Home</a>
            <span class="sep"><i class="fas fa-chevron-right"></i></span>
            <span class="current">Shopping Cart</span>
        </div>
    </div>

    <!-- ======== HERO ======== -->
    <section class="cart-hero">
        <div class="hero-decor">
            <div class="hero-decor-circle hdc1"></div>
            <div class="hero-decor-circle hdc2"></div>
            <div class="hero-decor-circle hdc3"></div>
            <div class="hero-decor-circle hdc4"></div>
        </div>
        <div class="cart-hero-inner">
            <div class="hero-eyebrow"><i class="fas fa-shopping-bag"></i> Your Beauty Basket</div>
            <h1>Shopping <span>Cart</span></h1>
            <div class="hero-divider"></div>
            <p>Review your selected items and proceed to checkout for radiant skin ahead.</p>
        </div>
    </section>

    <!-- ======== CART MAIN ======== -->
    <section class="cart-main">
        <div class="cart-container">
            <div class="cart-grid">

                <!-- CART ITEMS -->
                <div class="cart-items">
                    <div class="cart-item reveal">
                        <div class="item-image">
                            <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=300&q=80" alt="Radiance Serum">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Radiance Glow Serum</div>
                            <div class="item-variant">30ml - Original Gold</div>
                            <div class="item-price">$68.00</div>
                            <div class="item-controls">
                                <div class="qty-control">
                                    <button class="qty-btn" onclick="changeQty(this, -1)"><i class="fas fa-minus"></i></button>
                                    <input class="qty-num" type="number" value="1" min="1" max="99" readonly>
                                    <button class="qty-btn" onclick="changeQty(this, 1)"><i class="fas fa-plus"></i></button>
                                </div>
                                <button class="remove-btn" onclick="removeItem(this)"><i class="fas fa-trash"></i> Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="cart-item reveal">
                        <div class="item-image">
                            <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=300&q=80" alt="Golden Hour Moisturizer">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Golden Hour Moisturizer</div>
                            <div class="item-variant">50ml - Hydrating Formula</div>
                            <div class="item-price">$54.00</div>
                            <div class="item-controls">
                                <div class="qty-control">
                                    <button class="qty-btn" onclick="changeQty(this, -1)"><i class="fas fa-minus"></i></button>
                                    <input class="qty-num" type="number" value="2" min="1" max="99" readonly>
                                    <button class="qty-btn" onclick="changeQty(this, 1)"><i class="fas fa-plus"></i></button>
                                </div>
                                <button class="remove-btn" onclick="removeItem(this)"><i class="fas fa-trash"></i> Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="cart-item reveal">
                        <div class="item-image">
                            <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=300&q=80" alt="Rose Eye Revive Cream">
                        </div>
                        <div class="item-details">
                            <div class="item-name">Rose Eye Revive Cream</div>
                            <div class="item-variant">15ml - Anti-Aging</div>
                            <div class="item-price">$42.00</div>
                            <div class="item-controls">
                                <div class="qty-control">
                                    <button class="qty-btn" onclick="changeQty(this, -1)"><i class="fas fa-minus"></i></button>
                                    <input class="qty-num" type="number" value="1" min="1" max="99" readonly>
                                    <button class="qty-btn" onclick="changeQty(this, 1)"><i class="fas fa-plus"></i></button>
                                </div>
                                <button class="remove-btn" onclick="removeItem(this)"><i class="fas fa-trash"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CART SUMMARY -->
                <div class="cart-summary reveal">
                    <div class="summary-title">Order Summary</div>
                    <div class="summary-row">
                        <span class="summary-label">Subtotal (3 items)</span>
                        <span class="summary-value">$164.00</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Shipping</span>
                        <span class="summary-value">$5.99</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Tax</span>
                        <span class="summary-value">$13.12</span>
                    </div>
                    <div class="summary-row total">
                        <span class="summary-label">Total</span>
                        <span class="summary-total">$183.11</span>
                    </div>
                    <button class="checkout-btn" onclick="checkout()">
                        <i class="fas fa-lock"></i> Secure Checkout
                    </button>
                    <div class="promo-section">
                        <div class="promo-label">Have a promo code?</div>
                        <input type="text" class="promo-input" placeholder="Enter code" id="promoInput">
                        <button class="promo-btn" onclick="applyPromo()">Apply Code</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======== RECOMMENDED PRODUCTS ======== -->
    <section class="recommended-section">
        <div class="cart-container">
            <div class="section-header">
                <div class="section-eyebrow">Complete Your Routine</div>
                <h2 class="section-title">You May Also <span>Love</span></h2>
            </div>
            <div class="recommended-grid">
                <div class="rec-card reveal">
                    <div class="rec-img-wrap">
                        <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=500&q=80" alt="">
                        <button class="rec-btn" onclick="addToCart('Petal Soft Cleanser')">Add to Cart</button>
                    </div>
                    <div class="rec-info">
                        <div class="rec-name">Petal Soft Cleanser</div>
                        <div class="rec-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="rec-price"><span class="price">$32.00</span></div>
                    </div>
                </div>
                <div class="rec-card reveal">
                    <div class="rec-img-wrap">
                        <img src="https://images.unsplash.com/photo-1567721913486-6585f069b3b0?w=500&q=80" alt="">
                        <button class="rec-btn" onclick="addToCart('24K Gold Glow Mask')">Add to Cart</button>
                    </div>
                    <div class="rec-info">
                        <div class="rec-name">24K Gold Glow Mask</div>
                        <div class="rec-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        <div class="rec-price"><span class="price">$38.00</span></div>
                    </div>
                </div>
                <div class="rec-card reveal">
                    <div class="rec-img-wrap">
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500&q=80" alt="">
                        <button class="rec-btn" onclick="addToCart('Vitamin C Brightening Toner')">Add to Cart</button>
                    </div>
                    <div class="rec-info">
                        <div class="rec-name">Vitamin C Brightening Toner</div>
                        <div class="rec-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="rec-price"><span class="price">$28.00</span></div>
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
       // ── Quantity control ──
        function changeQty(btn, delta) {
            const input = btn.parentElement.querySelector('.qty-num');
            let val = parseInt(input.value) + delta;
            if (val < 1) val = 1;
            if (val > 99) val = 99;
            input.value = val;
            updateTotals();
        }

        // ── Remove item ──
        function removeItem(btn) {
            const item = btn.closest('.cart-item');
            item.style.transform = 'translateX(-100%)';
            item.style.opacity = '0';
            setTimeout(() => item.remove(), 300);
            updateTotals();
            showToast('Item removed from cart');
        }

        // ── Update totals ──
        function updateTotals() {
            // Simple calculation, in real app would recalculate properly
            const items = document.querySelectorAll('.cart-item');
            let subtotal = 0;
            items.forEach(item => {
                const price = parseFloat(item.querySelector('.item-price').textContent.replace('$', ''));
                const qty = parseInt(item.querySelector('.qty-num').value);
                subtotal += price * qty;
            });
            const shipping = subtotal > 100 ? 0 : 5.99;
            const tax = subtotal * 0.08;
            const total = subtotal + shipping + tax;

            document.querySelector('.summary-row:nth-child(1) .summary-value').textContent = '$' + subtotal.toFixed(2);
            document.querySelector('.summary-row:nth-child(2) .summary-value').textContent = shipping === 0 ? 'Free' : '$' + shipping.toFixed(2);
            document.querySelector('.summary-row:nth-child(3) .summary-value').textContent = '$' + tax.toFixed(2);
            document.querySelector('.summary-total').textContent = '$' + total.toFixed(2);
        }

        // ── Checkout ──
        function checkout() {
            showToast('Redirecting to secure checkout...');
            setTimeout(() => {
                // In real app, redirect to checkout page
                showToast('Checkout not implemented in demo');
            }, 1500);
        }

        // ── Apply promo ──
        function applyPromo() {
            const code = document.getElementById('promoInput').value.trim().toUpperCase();
            if (code === 'GLOW10') {
                showToast('Promo code applied! 10% off');
                updateTotals(); // Would apply discount
            } else {
                showToast('Invalid promo code');
            }
        }

        // ── Add to cart ──
        function addToCart(product) {
            showToast(product + ' added to cart!');
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