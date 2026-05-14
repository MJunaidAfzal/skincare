@extends('layouts.app')

@section('title', 'Product Detail - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')

    <!-- BREADCRUMB -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-inner">
            <a href="#">Home</a>
            <span><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i></span>
            <a href="#">Shop</a>
            <span><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i></span>
            <a href="#">Serums</a>
            <span><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i></span>
            <span class="current">Radiance Serum</span>
        </div>
    </section>

    <!-- PRODUCT DETAIL -->
    <section class="product-section">
        <div class="product-container">
            <div class="product-layout">

                <!-- LEFT: GALLERY -->
                <div class="gallery-wrapper">
                    <div class="main-image-wrap" id="mainImg">
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=700&q=80" alt="Radiance Serum" id="mainImgEl">
                        <div class="product-badge-wrap">
                            <span class="badge badge-bestseller"><i class="fas fa-star" style="font-size:0.7rem;"></i> Best Seller</span>
                            <span class="badge badge-new">New Formula</span>
                        </div>
                        <button class="wishlist-btn" id="mainWishlistBtn" onclick="toggleWishlist(this)" title="Add to Wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                        <div class="zoom-hint"><i class="fas fa-search-plus"></i> Hover to zoom</div>
                    </div>
                    <div class="thumbnails" id="thumbsContainer">
                        <div class="thumb active" onclick="setThumb(this,'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=700&q=80')">
                            <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=200&q=70" alt="">
                        </div>
                        <div class="thumb" onclick="setThumb(this,'https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=700&q=80')">
                            <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=200&q=70" alt="">
                        </div>
                        <div class="thumb" onclick="setThumb(this,'https://images.unsplash.com/photo-1596755389378-c31d21fd1273?w=700&q=80')">
                            <img src="https://images.unsplash.com/photo-1596755389378-c31d21fd1273?w=200&q=70" alt="">
                        </div>
                        <div class="thumb" onclick="setThumb(this,'https://images.unsplash.com/photo-1522338242992-e1a54906a8da?w=700&q=80')">
                            <img src="https://images.unsplash.com/photo-1522338242992-e1a54906a8da?w=200&q=70" alt="">
                        </div>
                        <div class="thumb" onclick="setThumb(this,'https://images.unsplash.com/photo-1599305091011-9e01e54d3e94?w=700&q=80')">
                            <img src="https://images.unsplash.com/photo-1599305091011-9e01e54d3e94?w=200&q=70" alt="">
                        </div>
                    </div>
                </div>

                <!-- RIGHT: INFO -->
                <div class="product-info">
                    <div class="product-category">Serums &amp; Treatments</div>
                    <h1 class="product-name">Radiance <span>Glow Serum</span></h1>
                    <p class="product-subtitle">24K Gold &amp; Rose Extract — Advanced Brightening Formula</p>

                    <div class="rating-row">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-score">4.8</span>
                        <span class="rating-count">(286 Reviews)</span>
                        <div class="rating-divider"></div>
                        <span class="sold-count"><strong>1,240+</strong> Sold</span>
                    </div>

                    <div class="price-block">
                        <span class="price-main">$68.00</span>
                        <span class="price-original">$89.00</span>
                        <span class="price-save">Save 24%</span>
                    </div>

                    <div class="divider-gold"></div>

                    <!-- Quantity -->
                    <div class="qty-row">
                        <span class="qty-label">Qty</span>
                        <div class="qty-control">
                            <button class="qty-btn" onclick="changeQty(-1)"><i class="fas fa-minus"></i></button>
                            <input class="qty-num" type="number" id="qtyInput" value="1" min="1" max="99" readonly>
                            <button class="qty-btn" onclick="changeQty(1)"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="stock-badge">
                            <span class="stock-dot"></span>
                            In Stock — <strong style="margin-left:3px;">12 left</strong>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="cta-buttons">
                        <button class="btn-cart" onclick="addToCart()">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </button>
                        <button class="btn-buynow" onclick="showToast('Redirecting to checkout…')">
                            <i class="fas fa-bolt"></i> Buy Now
                        </button>
                        <button class="btn-wishlist-full" id="wishlistFull" onclick="toggleWishlistFull(this)" title="Wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>

                    <!-- Share -->
                    <div class="share-row">
                        <span class="share-label">Share:</span>
                        <div class="share-btns">
                            <a class="share-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="share-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="share-btn" href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a class="share-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="share-btn" href="#" onclick="copyLink(event)"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT TABS -->
    <section class="tabs-section">
        <div class="product-container">
            <div class="tabs-nav">
                <button class="tab-btn active" onclick="switchTab(this,'desc')">Description</button>
                <button class="tab-btn" onclick="switchTab(this,'ingredients')">Key Ingredients</button>
                <button class="tab-btn" onclick="switchTab(this,'howto')">How To Use</button>
                <button class="tab-btn" onclick="switchTab(this,'reviews')">Reviews (286)</button>
            </div>

            <!-- Description -->
            <div class="tab-panel active" id="tab-desc">
                <div class="desc-grid">
                    <div class="desc-text">
                        <h3>Glow Like Never Before</h3>
                        <p>Introducing the Radiance Glow Serum — a luxurious fusion of 24K gold particles and concentrated rose extracts designed to restore your skin's youthful luminosity. Our advanced formula penetrates deep into the dermis to deliver unmatched hydration and brightening benefits.</p>
                        <p>Formulated with over 12 potent botanicals, this serum works around the clock to visibly reduce dark spots, fine lines, and uneven tone. Wake up to a complexion that looks refreshed, plump, and lit-from-within.</p>
                        <ul class="desc-highlights">
                            <li><i class="fas fa-check-circle"></i> Visibly brightens & evens skin tone in just 2 weeks</li>
                            <li><i class="fas fa-check-circle"></i> 72-hour deep hydration lock technology</li>
                            <li><i class="fas fa-check-circle"></i> Reduces fine lines and signs of aging</li>
                            <li><i class="fas fa-check-circle"></i> Lightweight, fast-absorbing texture</li>
                            <li><i class="fas fa-check-circle"></i> Dermatologist tested — safe for all skin types</li>
                            <li><i class="fas fa-check-circle"></i> Free from parabens, sulfates, and artificial fragrances</li>
                        </ul>
                    </div>
                    <div class="desc-image">
                        <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=700&q=80" alt="Product Detail">
                    </div>
                </div>
            </div>

            <!-- Ingredients -->
            <div class="tab-panel" id="tab-ingredients">
                <div class="ingredients-grid">
                    <div class="ingredient-card">
                        <div class="ing-icon"><i class="fas fa-gem"></i></div>
                        <div class="ing-name">24K Gold Particles</div>
                        <div class="ing-benefit">Stimulates collagen production, imparts a radiant glow, and provides powerful antioxidant protection against environmental aggressors.</div>
                    </div>
                    <div class="ingredient-card">
                        <div class="ing-icon"><i class="fas fa-leaf"></i></div>
                        <div class="ing-name">Bulgarian Rose Extract</div>
                        <div class="ing-benefit">Rich in vitamins A &amp; C, this premium extract deeply hydrates, soothes inflammation, and promotes a naturally rosy, even complexion.</div>
                    </div>
                    <div class="ingredient-card">
                        <div class="ing-icon"><i class="fas fa-tint"></i></div>
                        <div class="ing-name">Hyaluronic Acid Complex</div>
                        <div class="ing-benefit">A triple-molecular-weight complex that binds moisture at multiple skin layers, delivering plump, cushiony hydration that lasts all day.</div>
                    </div>
                    <div class="ingredient-card">
                        <div class="ing-icon"><i class="fas fa-leaf"></i></div>
                        <div class="ing-name">Green Tea Polyphenols</div>
                        <div class="ing-benefit">Potent antioxidants that neutralize free radicals, reduce redness, and protect skin from UV-induced damage and premature aging.</div>
                    </div>
                    <div class="ingredient-card">
                        <div class="ing-icon"><i class="fas fa-seedling"></i></div>
                        <div class="ing-name">Bakuchiol (Natural Retinol)</div>
                        <div class="ing-benefit">A plant-based retinol alternative that stimulates cell renewal and collagen synthesis without irritation — suitable for sensitive skin.</div>
                    </div>
                    <div class="ingredient-card">
                        <div class="ing-icon"><i class="fas fa-dot-circle"></i></div>
                        <div class="ing-name">Blueberry Stem Cells</div>
                        <div class="ing-benefit">Cutting-edge phyto-stem cell technology that protects skin stem cells from stress and revitalizes the skin's natural regeneration process.</div>
                    </div>
                </div>
            </div>

            <!-- How to Use -->
            <div class="tab-panel" id="tab-howto">
                <div class="how-steps">
                    <div class="how-step">
                        <div class="step-num">01</div>
                        <div class="step-icon"><i class="fas fa-soap"></i></div>
                        <div class="step-title">Cleanse</div>
                        <div class="step-desc">Begin with a gentle cleanser to remove makeup, SPF, and impurities. Pat your face dry with a clean towel — do not rub.</div>
                    </div>
                    <div class="how-step">
                        <div class="step-num">02</div>
                        <div class="step-icon"><i class="fas fa-tint"></i></div>
                        <div class="step-title">Tone</div>
                        <div class="step-desc">Apply your favorite toner using a cotton pad or your hands to prep skin and balance its pH for better serum absorption.</div>
                    </div>
                    <div class="how-step">
                        <div class="step-num">03</div>
                        <div class="step-icon"><i class="fas fa-hand-sparkles"></i></div>
                        <div class="step-title">Apply Serum</div>
                        <div class="step-desc">Dispense 3–5 drops onto fingertips. Gently press and massage into face and neck using upward circular motions.</div>
                    </div>
                    <div class="how-step">
                        <div class="step-num">04</div>
                        <div class="step-icon"><i class="fas fa-clock"></i></div>
                        <div class="step-title">Wait &amp; Absorb</div>
                        <div class="step-desc">Allow the serum to fully absorb for 2–3 minutes before applying moisturizer. This ensures maximum efficacy.</div>
                    </div>
                    <div class="how-step">
                        <div class="step-num">05</div>
                        <div class="step-icon"><i class="fas fa-spa"></i></div>
                        <div class="step-title">Moisturize</div>
                        <div class="step-desc">Lock in the serum's benefits with a rich moisturizer. In the morning, always finish with SPF 30+ for UV protection.</div>
                    </div>
                </div>
                <div style="margin-top:2rem; padding:1.5rem; background:linear-gradient(135deg,rgba(212,175,55,0.07),rgba(232,168,184,0.07)); border-radius:16px; border:1px solid var(--border);">
                    <p style="font-size:0.9rem; color:var(--text-light); line-height:1.8;"><strong style="color:var(--gold);"><i class="fas fa-lightbulb"></i> Pro Tip:</strong> For best results, use morning and evening. Consistency is key — most customers notice a visible difference within 7–14 days of regular use. Store in a cool, dry place away from direct sunlight.</p>
                </div>
            </div>

            <!-- Reviews -->
            <div class="tab-panel" id="tab-reviews">
                <div class="reviews-summary">
                    <div class="review-big-score">
                        <div class="big-num">4.8</div>
                        <div class="big-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        <div class="big-count">Based on 286 reviews</div>
                    </div>
                    <div class="review-bars">
                        <div class="review-bar-row"><span class="bar-label">5</span><div class="bar-track"><div class="bar-fill" style="width:72%"></div></div><span class="bar-count">206</span></div>
                        <div class="review-bar-row"><span class="bar-label">4</span><div class="bar-track"><div class="bar-fill" style="width:18%;background:linear-gradient(90deg,var(--pink),var(--rose))"></div></div><span class="bar-count">52</span></div>
                        <div class="review-bar-row"><span class="bar-label">3</span><div class="bar-track"><div class="bar-fill" style="width:6%;background:#e0c96a"></div></div><span class="bar-count">17</span></div>
                        <div class="review-bar-row"><span class="bar-label">2</span><div class="bar-track"><div class="bar-fill" style="width:2%;background:#ccc"></div></div><span class="bar-count">6</span></div>
                        <div class="review-bar-row"><span class="bar-label">1</span><div class="bar-track"><div class="bar-fill" style="width:1%;background:#ccc"></div></div><span class="bar-count">5</span></div>
                    </div>
                    <div style="display:flex;flex-direction:column;gap:0.75rem;min-width:180px;">
                        <div style="font-size:0.85rem;color:var(--text-light);margin-bottom:0.25rem;font-weight:500;">Customers say:</div>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.83rem;"><i class="fas fa-check" style="color:var(--gold);font-size:0.75rem;"></i> 94% say skin feels softer</div>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.83rem;"><i class="fas fa-check" style="color:var(--gold);font-size:0.75rem;"></i> 89% noticed brighter skin</div>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.83rem;"><i class="fas fa-check" style="color:var(--gold);font-size:0.75rem;"></i> 92% would recommend</div>
                    </div>
                </div>

                <div class="reviews-list">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer">
                                <div class="reviewer-avatar-fallback">S</div>
                                <div>
                                    <div class="reviewer-name">Sofia M.</div>
                                    <div class="reviewer-date">April 28, 2025</div>
                                </div>
                            </div>
                            <div>
                                <div class="review-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                <div class="verified-badge" style="margin-top:4px;"><i class="fas fa-check-circle"></i> Verified Purchase</div>
                            </div>
                        </div>
                        <div class="review-title">Best serum I've ever used — truly glowing!</div>
                        <div class="review-text">I've tried countless serums over the years, but this one stands apart. Within just 10 days my skin looked noticeably brighter and more hydrated. The texture is silky and absorbs beautifully without any sticky residue. My foundation applies so much smoother now. Absolutely repurchasing!</div>
                        <div class="review-helpful">
                            <button class="helpful-btn"><i class="fas fa-thumbs-up"></i> Helpful (34)</button>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer">
                                <div class="reviewer-avatar-fallback" style="background:linear-gradient(135deg,var(--pink),var(--rose));">A</div>
                                <div>
                                    <div class="reviewer-name">Aisha K.</div>
                                    <div class="reviewer-date">April 15, 2025</div>
                                </div>
                            </div>
                            <div>
                                <div class="review-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                <div class="verified-badge" style="margin-top:4px;"><i class="fas fa-check-circle"></i> Verified Purchase</div>
                            </div>
                        </div>
                        <div class="review-title">Game changer for hyperpigmentation</div>
                        <div class="review-text">I've struggled with dark spots for years. After a month of using this serum I can clearly see a difference. It's gentle enough for my sensitive skin yet powerful enough to make real change. The gold shimmer makes it feel extra luxurious too!</div>
                        <div class="review-helpful">
                            <button class="helpful-btn"><i class="fas fa-thumbs-up"></i> Helpful (21)</button>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer">
                                <div class="reviewer-avatar-fallback" style="background:linear-gradient(135deg,#a8d8ea,#7ec8e3);color:var(--dark);">R</div>
                                <div>
                                    <div class="reviewer-name">Rachel T.</div>
                                    <div class="reviewer-date">March 30, 2025</div>
                                </div>
                            </div>
                            <div>
                                <div class="review-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                <div class="verified-badge" style="margin-top:4px;"><i class="fas fa-check-circle"></i> Verified Purchase</div>
                            </div>
                        </div>
                        <div class="review-title">Love it — just be patient!</div>
                        <div class="review-text">I almost gave up after the first week but I'm so glad I didn't. Around week 2 my skin started looking visibly more radiant. It's now my holy grail morning serum. Great packaging too — feels very premium and luxurious.</div>
                        <div class="review-helpful">
                            <button class="helpful-btn"><i class="fas fa-thumbs-up"></i> Helpful (18)</button>
                        </div>
                    </div>
                </div>

                <div style="text-align:center;margin-top:2rem;">
                    <button onclick="showToast('Loading more reviews…')" style="padding:13px 36px;border-radius:30px;border:1.5px solid var(--border);background:white;font-family:'Poppins',sans-serif;font-size:0.9rem;font-weight:500;cursor:pointer;color:var(--dark);transition:all 0.25s;" onmouseover="this.style.borderColor='var(--gold)';this.style.color='var(--gold)';" onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--dark)';">
                        Load More Reviews <i class="fas fa-chevron-down" style="margin-left:6px;font-size:0.8rem;"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- RELATED PRODUCTS -->
    <section class="related-section">
        <div class="product-container">
            <div class="section-header">
                <div class="section-eyebrow">You May Also Love</div>
                <h2 class="section-title">Related <span>Products</span></h2>
            </div>
            <div class="related-grid">
                <div class="related-card">
                    <div class="related-img-wrap">
                        <img src="https://images.unsplash.com/photo-1556228841-a3c527ebefe5?w=500&q=80" alt="">
                        <button class="related-wishlist"><i class="far fa-heart"></i></button>
                        <div class="related-quick"><button class="related-quick-btn" onclick="showToast('Added to cart!')"><i class="fas fa-shopping-bag"></i> Quick Add</button></div>
                    </div>
                    <div class="related-info">
                        <div class="related-cat">Moisturizers</div>
                        <div class="related-name">Golden Hour Moisturizer</div>
                        <div class="related-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="related-price"><span class="price">$54.00</span><span class="orig">$72.00</span></div>
                    </div>
                </div>
                <div class="related-card">
                    <div class="related-img-wrap">
                        <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=500&q=80" alt="">
                        <button class="related-wishlist"><i class="far fa-heart"></i></button>
                        <div class="related-quick"><button class="related-quick-btn" onclick="showToast('Added to cart!')"><i class="fas fa-shopping-bag"></i> Quick Add</button></div>
                    </div>
                    <div class="related-info">
                        <div class="related-cat">Eye Creams</div>
                        <div class="related-name">Rose Eye Revive Cream</div>
                        <div class="related-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        <div class="related-price"><span class="price">$42.00</span><span class="orig">$55.00</span></div>
                    </div>
                </div>
                <div class="related-card">
                    <div class="related-img-wrap">
                        <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=500&q=80" alt="">
                        <button class="related-wishlist"><i class="far fa-heart"></i></button>
                        <div class="related-quick"><button class="related-quick-btn" onclick="showToast('Added to cart!')"><i class="fas fa-shopping-bag"></i> Quick Add</button></div>
                    </div>
                    <div class="related-info">
                        <div class="related-cat">Cleansers</div>
                        <div class="related-name">Petal Soft Foam Cleanser</div>
                        <div class="related-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="related-price"><span class="price">$32.00</span><span class="orig">$42.00</span></div>
                    </div>
                </div>
                <div class="related-card">
                    <div class="related-img-wrap">
                        <img src="https://images.unsplash.com/photo-1567721913486-6585f069b3b0?w=500&q=80" alt="">
                        <button class="related-wishlist"><i class="far fa-heart"></i></button>
                        <div class="related-quick"><button class="related-quick-btn" onclick="showToast('Added to cart!')"><i class="fas fa-shopping-bag"></i> Quick Add</button></div>
                    </div>
                    <div class="related-info">
                        <div class="related-cat">Face Masks</div>
                        <div class="related-name">24K Gold Glow Mask</div>
                        <div class="related-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        <div class="related-price"><span class="price">$38.00</span><span class="orig">$49.00</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STICKY BAR (mobile) -->
    <div class="sticky-bar" id="stickyBar">
        <div>
            <div class="sticky-product-name">Radiance Glow Serum</div>
            <div class="sticky-price">$68.00</div>
        </div>
        <button class="sticky-btn" onclick="addToCart()"><i class="fas fa-shopping-bag"></i> Add to Cart</button>
    </div>

    <!-- BACK TO TOP -->
    <button class="back-to-top" id="backTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- TOAST -->
    <div class="toast" id="toast"><i class="fas fa-check-circle"></i> <span id="toastMsg"></span></div>
@endsection

@section('scripts')
    <script>
        // Thumbnail gallery
        function setThumb(el, src) {
            document.getElementById('mainImgEl').src = src;
            document.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
            el.classList.add('active');
        }

        // Wishlist
        function toggleWishlist(btn) {
            btn.classList.toggle('active');
            const icon = btn.querySelector('i');
            if (btn.classList.contains('active')) {
                icon.className = 'fas fa-heart';
                showToast('Added to Wishlist');
            } else {
                icon.className = 'far fa-heart';
            }
        }
        function toggleWishlistFull(btn) {
            const icon = btn.querySelector('i');
            if (icon.className === 'far fa-heart') {
                icon.className = 'fas fa-heart';
                btn.style.background = 'var(--rose)';
                btn.style.color = 'white';
                btn.style.borderColor = 'var(--rose)';
                showToast('Added to Wishlist');
            } else {
                icon.className = 'far fa-heart';
                btn.style.background = '';
                btn.style.color = '';
                btn.style.borderColor = '';
            }
        }

        // Size select
        function selectSize(el, size) {
            document.querySelectorAll('.size-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
            document.getElementById('selectedSize').textContent = '— ' + size;
        }

        // Shade select
        function selectShade(el, name) {
            document.querySelectorAll('.shade-dot').forEach(d => d.classList.remove('active'));
            el.classList.add('active');
            document.getElementById('selectedShade').textContent = '— ' + name;
        }

        // Quantity
        function changeQty(delta) {
            const input = document.getElementById('qtyInput');
            let val = parseInt(input.value) + delta;
            if (val < 1) val = 1;
            if (val > 99) val = 99;
            input.value = val;
        }

        // Add to cart
        function addToCart() {
            showToast('Added to cart!');
            const cartCount = document.querySelector('.cart-count');
            cartCount.textContent = parseInt(cartCount.textContent) + 1;
        }

        // Toast
        let toastTimeout;
        function showToast(msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toastMsg').textContent = msg;
            toast.classList.add('show');
            clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => toast.classList.remove('show'), 2800);
        }

        // Copy link
        function copyLink(e) {
            e.preventDefault();
            navigator.clipboard?.writeText(window.location.href).catch(()=>{});
            showToast('Link copied to clipboard!');
        }

        // Tabs
        function switchTab(btn, id) {
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById('tab-' + id).classList.add('active');
        }

        // Related wishlist toggle
        document.querySelectorAll('.related-wishlist').forEach(btn => {
            btn.addEventListener('click', () => {
                const icon = btn.querySelector('i');
                if (icon.className === 'far fa-heart') {
                    icon.className = 'fas fa-heart';
                    btn.style.background = 'var(--rose)';
                    btn.style.color = 'white';
                    showToast('Added to Wishlist');
                } else {
                    icon.className = 'far fa-heart';
                    btn.style.background = '';
                    btn.style.color = '';
                }
            });
        });
    </script>
@endsection