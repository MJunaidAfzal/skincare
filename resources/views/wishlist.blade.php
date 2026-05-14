@extends('layouts.app')

@section('title', 'Wishlist - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">
@endsection

@section('content')
   
    <!-- ======== BREADCRUMB ======== -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-inner">
            <a href="#">Home</a>
            <span class="sep"><i class="fas fa-chevron-right"></i></span>
            <span class="current">My Wishlist</span>
        </div>
    </div>

    <!-- ======== HERO ======== -->
    <section class="wishlist-hero">
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
        <div class="wishlist-hero-inner">
            <div class="hero-eyebrow"><i class="fas fa-heart"></i> Curated Collection</div>
            <h1>My <span>Wishlist</span></h1>
            <div class="hero-divider"></div>
            <p>Your personal beauty sanctuary. Discover, save, and indulge in the products that speak to your skin.</p>
        </div>
    </section>

    <!-- ======== WISHLIST MAIN ======== -->
    <section class="wishlist-main">
        <div class="wishlist-container">
            <div class="wishlist-header reveal">
                <h2 class="wishlist-title">Saved Treasures</h2>
                <div class="wishlist-stats">
                    <span class="wishlist-count"><i class="fas fa-heart"></i> 5 items</span>
                    <div class="wishlist-actions">
                        <button class="btn-share" onclick="shareWishlist()"><i class="fas fa-share-alt"></i> Share</button>
                        <button class="btn-clear" onclick="clearWishlist()"><i class="fas fa-trash"></i> Clear All</button>
                    </div>
                </div>
            </div>

            <div class="wishlist-list">
                <div class="wishlist-item reveal">
                    <div class="item-image">
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=400&q=80" alt="Radiance Serum">
                    </div>
                    <div class="item-content">
                        <div class="item-header">
                            <div class="item-name">Radiance Glow Serum</div>
                            <div class="item-variant">30ml - Original Gold Formula</div>
                            <div class="item-meta">
                                <div class="item-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="rating-count">(286 reviews)</span>
                                </div>
                                <div class="item-price">$68.00</div>
                            </div>
                        </div>
                        <div class="item-actions">
                            <button class="btn-add-cart" onclick="addToCart('Radiance Glow Serum')">
                                <i class="fas fa-shopping-bag"></i> Add to Cart
                            </button>
                            <button class="btn-remove" onclick="removeFromWishlist(this)">
                                <i class="fas fa-heart-broken"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>

                <div class="wishlist-item reveal">
                    <div class="item-image">
                        <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=400&q=80" alt="Golden Hour Moisturizer">
                    </div>
                    <div class="item-content">
                        <div class="item-header">
                            <div class="item-name">Golden Hour Moisturizer</div>
                            <div class="item-variant">50ml - Hydrating SPF 30</div>
                            <div class="item-meta">
                                <div class="item-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(154 reviews)</span>
                                </div>
                                <div class="item-price">$54.00</div>
                            </div>
                        </div>
                        <div class="item-actions">
                            <button class="btn-add-cart" onclick="addToCart('Golden Hour Moisturizer')">
                                <i class="fas fa-shopping-bag"></i> Add to Cart
                            </button>
                            <button class="btn-remove" onclick="removeFromWishlist(this)">
                                <i class="fas fa-heart-broken"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>

                <div class="wishlist-item reveal">
                    <div class="item-image">
                        <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=400&q=80" alt="Rose Eye Revive Cream">
                    </div>
                    <div class="item-content">
                        <div class="item-header">
                            <div class="item-name">Rose Eye Revive Cream</div>
                            <div class="item-variant">15ml - Anti-Aging Treatment</div>
                            <div class="item-meta">
                                <div class="item-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="rating-count">(98 reviews)</span>
                                </div>
                                <div class="item-price">$42.00</div>
                            </div>
                        </div>
                        <div class="item-actions">
                            <button class="btn-add-cart" onclick="addToCart('Rose Eye Revive Cream')">
                                <i class="fas fa-shopping-bag"></i> Add to Cart
                            </button>
                            <button class="btn-remove" onclick="removeFromWishlist(this)">
                                <i class="fas fa-heart-broken"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>

                <div class="wishlist-item reveal">
                    <div class="item-image">
                        <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=400&q=80" alt="Petal Soft Cleanser">
                    </div>
                    <div class="item-content">
                        <div class="item-header">
                            <div class="item-name">Petal Soft Cleanser</div>
                            <div class="item-variant">200ml - Gentle Daily Cleanse</div>
                            <div class="item-meta">
                                <div class="item-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(203 reviews)</span>
                                </div>
                                <div class="item-price">$32.00</div>
                            </div>
                        </div>
                        <div class="item-actions">
                            <button class="btn-add-cart" onclick="addToCart('Petal Soft Cleanser')">
                                <i class="fas fa-shopping-bag"></i> Add to Cart
                            </button>
                            <button class="btn-remove" onclick="removeFromWishlist(this)">
                                <i class="fas fa-heart-broken"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>

                <div class="wishlist-item reveal">
                    <div class="item-image">
                        <img src="https://images.unsplash.com/photo-1567721913486-6585f069b3b0?w=400&q=80" alt="24K Gold Glow Mask">
                    </div>
                    <div class="item-content">
                        <div class="item-header">
                            <div class="item-name">24K Gold Glow Mask</div>
                            <div class="item-variant">100ml - Luxury Treatment</div>
                            <div class="item-meta">
                                <div class="item-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="rating-count">(67 reviews)</span>
                                </div>
                                <div class="item-price">$38.00</div>
                            </div>
                        </div>
                        <div class="item-actions">
                            <button class="btn-add-cart" onclick="addToCart('24K Gold Glow Mask')">
                                <i class="fas fa-shopping-bag"></i> Add to Cart
                            </button>
                            <button class="btn-remove" onclick="removeFromWishlist(this)">
                                <i class="fas fa-heart-broken"></i> Remove
                            </button>
                        </div>
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

        // ── Add to cart ──
        function addToCart(product) {
            showToast(product + ' added to cart!');
        }

        // ── Remove from wishlist ──
        function removeFromWishlist(btn) {
            const item = btn.closest('.wishlist-item');
            item.style.transform = 'translateX(-100%)';
            item.style.opacity = '0';
            setTimeout(() => item.remove(), 400);
            showToast('Removed from wishlist');
            updateWishlistCount();
        }

        // ── Share wishlist ──
        function shareWishlist() {
            if (navigator.share) {
                navigator.share({
                    title: 'My Glamour Skincare Wishlist',
                    text: 'Check out my saved beauty treasures!',
                    url: window.location.href
                });
            } else {
                navigator.clipboard.writeText(window.location.href);
                showToast('Wishlist link copied to clipboard!');
            }
        }

        // ── Clear wishlist ──
        function clearWishlist() {
            if (confirm('Are you sure you want to clear your entire wishlist?')) {
                document.querySelectorAll('.wishlist-item').forEach(item => {
                    item.style.transform = 'scale(0.8)';
                    item.style.opacity = '0';
                });
                setTimeout(() => {
                    document.querySelector('.wishlist-list').innerHTML = '<div class="wishlist-empty"><div class="empty-icon"><i class="fas fa-heart-broken"></i></div><h3 class="empty-title">Wishlist Cleared</h3><p class="empty-text">Your wishlist is now empty. Start exploring our collection to add new favorites!</p><a href="#" class="empty-btn"><i class="fas fa-arrow-left"></i> Continue Shopping</a></div>';
                    updateWishlistCount();
                }, 300);
            }
        }

        // ── Update wishlist count ──
        function updateWishlistCount() {
            const count = document.querySelectorAll('.wishlist-item').length;
            document.querySelector('.wishlist-count').innerHTML = `<i class="fas fa-heart"></i> ${count} item${count !== 1 ? 's' : ''}`;
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
                    setTimeout(() => entry.target.classList.add('visible'), idx * 100);
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin:'0px 0px -50px 0px' });
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
    </script>
@endsection