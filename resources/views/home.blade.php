@extends('layouts.app')

@section('title', 'Home - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <!-- ATTRACTIVE HERO SECTION -->
    <section class="hero">
        <div class="hero-bg" style="background-image: url('{{ asset('images/main.jpg') }}');"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <i class="fas fa-sparkles"></i>
                    LUXURY SKINCARE EXPERIENCE
                </div>
                <h1>Luxury <span class="gold-text">Skincare</span><br>Redefined</h1>
                <hr class="hero-divider">
                <p class="hero-description">
                    Premium skincare with 24K gold and natural botanicals for radiant, glowing skin.
                </p>
                <div class="hero-features">
                    <div class="feature-item">
                        <i class="fas fa-crown"></i>
                        <span>Premium Quality</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-leaf"></i>
                        <span>Natural Ingredients</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Dermatologist Tested</span>
                    </div>
                </div>
                <div class="hero-actions">
                    <a href="#products" class="cta-button primary">
                        <i class="fas fa-shopping-bag"></i>
                        Shop Now
                    </a>
                    <a href="{{ route('about') }}" class="cta-button secondary">
                        <i class="fas fa-play-circle"></i>
                        Our Story
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number" data-target="50">0</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="24">0</div>
                        <div class="stat-label">Pure Gold</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="100">0</div>
                        <div class="stat-label">Natural</div>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <img src="{{ asset('images/main.jpg') }}" alt="Glamour Skincare Product" class="hero-image">
                    <div class="floating-elements">
                        <div class="floating-element el1"><i class="fas fa-sparkles"></i></div>
                        <div class="floating-element el2"><i class="fas fa-leaf"></i></div>
                        <div class="floating-element el3"><i class="fas fa-star"></i></div>
                        <div class="floating-element el4"><i class="fas fa-flower"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-decoration">
            <div class="decoration-shape shape1"></div>
            <div class="decoration-shape shape2"></div>
            <div class="decoration-shape shape3"></div>
        </div>
        <div class="particles">
            <div class="particle p1"></div>
            <div class="particle p2"></div>
            <div class="particle p3"></div>
            <div class="particle p4"></div>
            <div class="particle p5"></div>
            <div class="particle p6"></div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
            <span>Scroll to explore</span>
        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose <span class="gold-text">Glamour Skincare</span> ?</h2>
                <p>Experience the perfect blend of luxury, science, and nature</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" style="--i:1">
                    <div class="feature-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3>24K Gold Infused</h3>
                    <p>Premium formulations enriched with pure 24K gold for radiant, luminous skin</p>
                </div>
                <div class="feature-card" style="--i:2">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Botanical Extracts</h3>
                    <p>Nature's finest ingredients carefully selected for maximum efficacy</p>
                </div>
                <div class="feature-card" style="--i:3">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Dermatologist Tested</h3>
                    <p>Safe, effective, and suitable for all skin types with clinical backing</p>
                </div>
                <div class="feature-card" style="--i:4">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Eco-Friendly</h3>
                    <p>Sustainable packaging and cruelty-free testing for conscious beauty</p>
                </div>
            </div>
        </div>
        <div class="features-decoration">
            <div class="features-shape fshape1"></div>
            <div class="features-shape fshape2"></div>
            <div class="features-shape fshape3"></div>
        </div>
        <div class="features-floating-elements">
            <div class="features-floating-element fel1"><i class="fas fa-sparkles"></i></div>
            <div class="features-floating-element fel2"><i class="fas fa-leaf"></i></div>
            <div class="features-floating-element fel3"><i class="fas fa-star"></i></div>
            <div class="features-floating-element fel4"><i class="fas fa-flower"></i></div>
        </div>
        <div class="features-particles">
            <div class="features-particle fp1"></div>
            <div class="features-particle fp2"></div>
            <div class="features-particle fp3"></div>
            <div class="features-particle fp4"></div>
        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section class="products" id="products">
        <div class="container">
            <div class="section-header">
                <h2>Bestselling <span class="gold-text">Products</span></h2>
                <p>Discover our most loved skincare essentials</p>
            </div>
            <div class="products-grid">
                <div class="product-card" style="--i:1">
                    <div class="product-image">
                        <img src="{{ asset('images/product1.webp') }}" alt="Golden Serum">
                        <div class="product-badge">Bestseller</div>
                    </div>
                    <div class="product-info">
                        <h3>24K Gold Serum</h3>
                        <p>Anti-aging serum with 24K gold particles</p>
                        <div class="product-price">$89</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card" style="--i:2">
                    <div class="product-image">
                        <img src="{{ asset('images/product2.webp') }}" alt="Rose Mask">
                        <div class="product-badge">New</div>
                    </div>
                    <div class="product-info">
                        <h3>Rose Hydrating Mask</h3>
                        <p>Deep hydration with organic rose extracts</p>
                        <div class="product-price">$45</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card" style="--i:3">
                    <div class="product-image">
                        <img src="{{ asset('images/product3.jpg') }}" alt="Gold Moisturizer">
                    </div>
                    <div class="product-info">
                        <h3>Gold Radiance Cream</h3>
                        <p>Day and night moisturizer for glowing skin</p>
                        <div class="product-price">$65</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card" style="--i:4">
                    <div class="product-image">
                        <img src="{{ asset('images/product4.jpg') }}" alt="Eye Cream">
                        <div class="product-badge">Popular</div>
                    </div>
                    <div class="product-info">
                        <h3>Gold Eye Cream</h3>
                        <p>Reduce dark circles and fine lines around eyes</p>
                        <div class="product-price">$55</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card" style="--i:5">
                    <div class="product-image">
                        <img src="{{ asset('images/product5.webp') }}" alt="Cleanser">
                        <div class="product-badge">Sale</div>
                    </div>
                    <div class="product-info">
                        <h3>Gold Cleansing Gel</h3>
                        <p>Gentle foaming cleanser for daily use</p>
                        <div class="product-price">$35</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card" style="--i:6">
                    <div class="product-image">
                        <img src="{{ asset('images/product6.jpg') }}" alt="Toner">
                    </div>
                    <div class="product-info">
                        <h3>Gold Toner</h3>
                        <p>Balance and refresh your skin tone</p>
                        <div class="product-price">$40</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="view-more-container">
                <button class="view-more-btn">
                    <i class="fas fa-plus"></i>
                    View More Products
                </button>
            </div>
        </div>
        <div class="products-decoration">
            <div class="products-shape pshape1"></div>
            <div class="products-shape pshape2"></div>
            <div class="products-shape pshape3"></div>
        </div>
        <div class="products-floating-elements">
            <div class="products-floating-element pel1"><i class="fas fa-sparkles"></i></div>
            <div class="products-floating-element pel2"><i class="fas fa-leaf"></i></div>
            <div class="products-floating-element pel3"><i class="fas fa-star"></i></div>
            <div class="products-floating-element pel4"><i class="fas fa-flower"></i></div>
        </div>
        <div class="products-particles">
            <div class="products-particle pp1"></div>
            <div class="products-particle pp2"></div>
            <div class="products-particle pp3"></div>
            <div class="products-particle pp4"></div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>What Our <span class="gold-text">Customers</span> Say</h2>
                <p>Join thousands of satisfied skincare enthusiasts</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card" style="--i: 0">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"This serum transformed my skin! I've never felt so confident. The gold particles really work."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/man1.jpg') }}" alt="Sarah M.">
                        <div>
                            <strong>Sarah M.</strong>
                            <span>Verified Buyer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" style="--i: 1">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"Luxurious packaging and incredible results. My skin has never looked better!"</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/man2.webp') }}" alt="Emma L.">
                        <div>
                            <strong>Emma L.</strong>
                            <span>Beauty Blogger</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" style="--i: 2">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"The hydration mask is a game-changer. Perfect for my dry skin."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/man4.png') }}" alt="Jessica K.">
                        <div>
                            <strong>Jessica K.</strong>
                            <span>Skin Specialist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials-decoration">
            <div class="testimonials-shape tshape1"></div>
            <div class="testimonials-shape tshape2"></div>
            <div class="testimonials-shape tshape3"></div>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Our <span class="gold-text">Story</span></h2>
                    <p>Founded in 2018, Glamour Skincare was born from a passion for combining ancient beauty rituals with cutting-edge science. Our founder, Dr. Elena Rodriguez, discovered the transformative power of 24K gold in skincare while researching natural healing methods.</p>
                    <p>Today, we craft each product with meticulous care, using only the finest ingredients sourced sustainably from around the world. Our mission is to empower every individual to feel confident and radiant in their own skin.</p>
                    <div class="about-values">
                        <div class="value">
                            <i class="fas fa-heart"></i>
                            <h4>Passion</h4>
                            <p>Driven by love for beauty</p>
                        </div>
                        <div class="value">
                            <i class="fas fa-lightbulb"></i>
                            <h4>Innovation</h4>
                            <p>Pushing boundaries s</p>
                        </div>

                        <div class="value">
                            <i class="fas fa-leaf"></i>
                            <h4>Sustainability</h4>
                            <p>Committed to eco-friendly</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="{{ asset('images/story.png') }}" alt="Glamour Skincare Story">
                    <div class="about-overlay">
                        <div class="stats-box">
                            <div class="stat-large">
                                <span>5+</span>
                                <p>Years of Excellence</p>
                            </div>
                            <div class="stat-large">
                                <span>25+</span>
                                <p>Countries Served</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-decoration">
            <div class="about-shape ashape1"></div>
            <div class="about-shape ashape2"></div>
            <div class="about-shape ashape3"></div>
        </div>
        <div class="about-floating-elements">
            <div class="about-floating-element ael1"><i class="fas fa-sparkles"></i></div>
            <div class="about-floating-element ael2"><i class="fas fa-leaf"></i></div>
            <div class="about-floating-element ael3"><i class="fas fa-star"></i></div>
            <div class="about-floating-element ael4"><i class="fas fa-flower"></i></div>
        </div>
        <div class="about-particles">
            <div class="about-particle ap1"></div>
            <div class="about-particle ap2"></div>
            <div class="about-particle ap3"></div>
            <div class="about-particle ap4"></div>
        </div>
    </section>

    <!-- SKINCARE GUIDE SECTION -->
    <section class="guide" id="guide">
        <div class="container">
            <div class="section-header">
                <h2>Your <span class="gold-text">Perfect Skincare</span> Routine</h2>
                <p>Follow our expert-recommended steps for glowing, healthy skin</p>
            </div>
            <div class="guide-steps">
                <div class="step" style="--i: 0">
                    <div class="step-number">1</div>
                    <h3>Cleanse</h3>
                    <p>Start with our gentle gold-infused cleanser to remove impurities without stripping natural moisture.</p>

                </div>
                <div class="step" style="--i: 1">
                    <div class="step-number">2</div>
                    <h3>Tone</h3>
                    <p>Balance your skin's pH with our rose water toner, infused with calming botanicals.</p>

                </div>
                <div class="step" style="--i: 2">
                    <div class="step-number">3</div>
                    <h3>Treat</h3>
                    <p>Apply targeted serums like our 24K Gold Serum for specific skin concerns.</p>

                </div>
                <div class="step" style="--i: 3">
                    <div class="step-number">4</div>
                    <h3>Moisturize</h3>
                    <p>Lock in hydration with our luxurious gold radiance cream.</p>

                </div>
                <div class="step" style="--i: 4">
                    <div class="step-number">5</div>
                    <h3>Protect</h3>
                    <p>Finish with SPF protection to shield your skin from environmental damage.</p>

                </div>
                  <div class="step" style="--i: 5">
                    <div class="step-number">6</div>
                    <h3>Night Care</h3>
                    <p>Complete your routine with our nourishing night cream for overnight repair and renewal.</p>

                </div>
            </div>
        </div>
        <div class="guide-decoration">
            <div class="guide-shape gshape1"></div>
            <div class="guide-shape gshape2"></div>
            <div class="guide-shape gshape3"></div>
        </div>
        <div class="guide-floating-elements">
            <div class="guide-floating-element gel1"><i class="fas fa-sparkles"></i></div>
            <div class="guide-floating-element gel2"><i class="fas fa-leaf"></i></div>
            <div class="guide-floating-element gel3"><i class="fas fa-star"></i></div>
            <div class="guide-floating-element gel4"><i class="fas fa-flower"></i></div>
        </div>
        <div class="guide-particles">
            <div class="guide-particle gp1"></div>
            <div class="guide-particle gp2"></div>
            <div class="guide-particle gp3"></div>
            <div class="guide-particle gp4"></div>
        </div>
    </section>

    <!-- NEWSLETTER SECTION -->
    <section class="newsletter">
        <div class="newsletter-decoration">
            <div class="newsletter-shape nshape1"></div>
            <div class="newsletter-shape nshape2"></div>
            <div class="newsletter-shape nshape3"></div>
        </div>

        <div class="newsletter-floating-elements">
            <div class="newsletter-floating-element nel1"><i class="fas fa-envelope"></i></div>
            <div class="newsletter-floating-element nel2"><i class="fas fa-heart"></i></div>
            <div class="newsletter-floating-element nel3"><i class="fas fa-star"></i></div>
            <div class="newsletter-floating-element nel4"><i class="fas fa-sparkles"></i></div>
        </div>

        <div class="newsletter-particles">
            <div class="newsletter-particle np1"></div>
            <div class="newsletter-particle np2"></div>
            <div class="newsletter-particle np3"></div>
            <div class="newsletter-particle np4"></div>
        </div>

        <div class="container">
            <div class="newsletter-content">
                <h2>Stay Beautiful</h2>
                <p>Subscribe to our newsletter for exclusive offers and skincare tips</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection