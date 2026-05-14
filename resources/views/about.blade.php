@extends('layouts.app')

@section('title', 'About Us - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
   <!-- About Us Hero Section -->
    <section class="about-hero">
        <div class="about-hero-bg" style="background-image: url('about-hero-bg.jpg');"></div>
        <div class="about-hero-overlay"></div>

        <!-- Floating Elements -->
        <div class="about-floating-elements">
            <div class="about-floating-element about-el1">
                <i class="fas fa-spa"></i>
            </div>
            <div class="about-floating-element about-el2">
                <i class="fas fa-heart"></i>
            </div>
            <div class="about-floating-element about-el3">
                <i class="fas fa-star"></i>
            </div>
            <div class="about-floating-element about-el4">
                <i class="fas fa-leaf"></i>
            </div>
            <div class="about-floating-element about-el5">
                <i class="fas fa-crown"></i>
            </div>
            <div class="about-floating-element about-el6">
                <i class="fas fa-gem"></i>
            </div>
        </div>

        <!-- Decorative Shapes -->
        <div class="about-hero-decoration">
            <div class="about-decoration-shape about-shape1"></div>
            <div class="about-decoration-shape about-shape2"></div>
            <div class="about-decoration-shape about-shape3"></div>
            <div class="about-decoration-shape about-shape4"></div>
        </div>

        <!-- Particles -->
        <div class="about-particles">
            <div class="about-particle about-p1"></div>
            <div class="about-particle about-p2"></div>
            <div class="about-particle about-p3"></div>
            <div class="about-particle about-p4"></div>
            <div class="about-particle about-p5"></div>
            <div class="about-particle about-p6"></div>
            <div class="about-particle about-p7"></div>
            <div class="about-particle about-p8"></div>
        </div>

        <div class="about-hero-content">
            <div class="about-hero-badge">
                <i class="fas fa-heart"></i>
                Our Story
            </div>
            <h1>Discover the <span class="highlight">Beauty</span> Within</h1>
            <div class="about-hero-divider"></div>
            <p class="about-hero-description">
                At Glamour Skincare, we believe that true beauty comes from within. For over a decade, we've been crafting luxurious skincare products that nurture your skin and boost your confidence.
            </p>
            <div class="about-hero-stats">
                <div class="about-stat-item">
                    <div class="about-stat-number">10+</div>
                    <div class="about-stat-label">Years of Excellence</div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-number">50K+</div>
                    <div class="about-stat-label">Happy Customers</div>
                </div>
                <div class="about-stat-item">
                    <div class="about-stat-number">100+</div>
                    <div class="about-stat-label">Premium Products</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="story">
        <!-- Particles -->
        <div class="story-particles">
            <div class="story-particle story-p1"></div>
            <div class="story-particle story-p2"></div>
            <div class="story-particle story-p3"></div>
            <div class="story-particle story-p4"></div>
        </div>

        <div class="container">
            <div class="story-content">
                <div class="story-text">
                    <h2>Our <span class="highlight">Journey</span> Begins</h2>
                    <p>
                        Founded in 2014 by skincare enthusiast Sarah Johnson, Glamour Skincare started as a small passion project in a home kitchen.
                        What began as <span class="story-highlight">handcrafted lotions for friends and family</span> quickly evolved into a full-fledged beauty brand
                        when customers couldn't get enough of our natural, effective formulas.
                    </p>
                    <p>
                        Today, we're proud to serve skincare lovers worldwide, maintaining our commitment to quality, innovation, and sustainability.
                        Every product is crafted with love, using the finest natural ingredients and cutting-edge science.
                    </p>
                </div>
                <div class="story-image">
                    <img src="images/about.jpg" alt="Our Story">
                    <div class="story-image-overlay">
                        <div class="story-overlay-text">Since 2014</div>
                        <div class="story-overlay-subtext">Building beauty from passion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <div class="section-header">
                <h2>Meet <span class="highlight">Our Experts</span></h2>
                <p>The passionate professionals behind your favorite skincare products</p>
            </div>
            <div class="team-grid">
                <div class="team-member" style="--i: 1;">
                    <div class="team-member-image">
                        <img src="images/team1.jpg" alt="John Doe">
                    </div>
                    <div class="team-member-info">
                        <h3>John Doe</h3>
                        <div class="role">Founder & CEO</div>
                        <p>With over 15 years in skincare research, John leads our product development with expertise in natural formulations.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member" style="--i: 2;">
                    <div class="team-member-image">
                        <img src="images/team2.jpg" alt="Dr. Jane Smith">
                    </div>
                    <div class="team-member-info">
                        <h3>Dr. Jane Smith</h3>
                        <div class="role">Chief Scientist</div>
                        <p>PhD in Dermatology with 12+ years experience. Jane ensures every formula meets the highest scientific standards.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member" style="--i: 3;">
                    <div class="team-member-image">
                        <img src="images/team3.jpg" alt="Harry Johnson">
                    </div>
                    <div class="team-member-info">
                        <h3>Harry Johnson</h3>
                        <div class="role">Head of Marketing</div>
                        <p>Beauty industry veteran who connects our brand with skincare enthusiasts worldwide through authentic storytelling.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values">
        <div class="container">
            <div class="section-header">
                <h2>Our <span class="highlight">Core Values</span></h2>
                <p>The principles that guide everything we do</p>
            </div>
            <div class="values-grid">
                <div class="value-card" style="--i: 1;">
                    <i class="fas fa-leaf value-icon"></i>
                    <h3>Natural Ingredients</h3>
                    <p>We source the purest, most effective natural ingredients from sustainable farms worldwide, ensuring both efficacy and environmental responsibility.</p>
                </div>
                <div class="value-card" style="--i: 2;">
                    <i class="fas fa-flask value-icon"></i>
                    <h3>Scientific Excellence</h3>
                    <p>Every product undergoes rigorous scientific testing and clinical trials to guarantee safety, efficacy, and real results for our customers.</p>
                </div>
                <div class="value-card" style="--i: 3;">
                    <i class="fas fa-heart value-icon"></i>
                    <h3>Customer First</h3>
                    <p>Your satisfaction and skin health are our top priorities. We're committed to transparency, education, and exceptional customer service.</p>
                </div>
                <div class="value-card" style="--i: 4;">
                    <i class="fas fa-globe value-icon"></i>
                    <h3>Sustainability</h3>
                    <p>We minimize our environmental impact through eco-friendly packaging, ethical sourcing, and carbon-neutral shipping initiatives.</p>
                </div>
                <div class="value-card" style="--i: 5;">
                    <i class="fas fa-lightbulb value-icon"></i>
                    <h3>Innovation</h3>
                    <p>We continuously push boundaries with cutting-edge formulations, advanced delivery systems, and breakthrough skincare technology.</p>
                </div>
                <div class="value-card" style="--i: 6;">
                    <i class="fas fa-award value-icon"></i>
                    <h3>Quality Assurance</h3>
                    <p>Every product meets the highest standards of purity, efficacy, and safety through rigorous testing and quality control processes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="achievements">
        <div class="container">
            <div class="section-header">
                <h2>Our <span class="highlight">Achievements</span></h2>
                <p>Milestones that showcase our commitment to excellence</p>
            </div>
            <div class="achievements-grid">
                <div class="achievement-card" style="--i: 1;">
                    <div class="achievement-number">15+</div>
                    <div class="achievement-label">Awards Won</div>
                </div>
                <div class="achievement-card" style="--i: 2;">
                    <div class="achievement-number">98%</div>
                    <div class="achievement-label">Customer Satisfaction</div>
                </div>
                <div class="achievement-card" style="--i: 3;">
                    <div class="achievement-number">25</div>
                    <div class="achievement-label">Countries Served</div>
                </div>
                <div class="achievement-card" style="--i: 4;">
                    <div class="achievement-number">2M+</div>
                    <div class="achievement-label">Products Sold</div>
                </div>
                <div class="achievement-card" style="--i: 5;">
                    <div class="achievement-number">5</div>
                    <div class="achievement-label">Research Patents</div>
                </div>
                <div class="achievement-card" style="--i: 6;">
                    <div class="achievement-number">100%</div>
                    <div class="achievement-label">Cruelty Free</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose">
        <div class="container">
            <div class="why-choose-content">
                <div class="why-choose-text">
                    <h2>Why Choose <span class="highlight">Glamour Skincare</span>?</h2>
                    <p>
                        When you choose Glamour Skincare, you're not just selecting beauty products – you're investing in a comprehensive approach 
                        to skincare that combines science, nature, and luxury.
                    </p>
                    <ul class="why-choose-features">
                        <li><i class="fas fa-check-circle"></i> 100% natural ingredients with no harmful chemicals</li>
                        <li><i class="fas fa-check-circle"></i> Sustainable packaging and eco-friendly practices</li>
                        <li><i class="fas fa-check-circle"></i> 30-day money-back guarantee on all products</li>
                        <li><i class="fas fa-check-circle"></i> Free shipping on orders over $50 worldwide</li>
                    </ul>
                </div>
                <div class="why-choose-image">
                    <img src="images/why.png" alt="Why Choose Us">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-about">
        <div class="container">
            <h2>Ready to Transform Your Skincare Routine?</h2>
            <p>Join thousands of satisfied customers who have discovered their skin's true potential with Glamour Skincare.</p>
            <a href="index.html#products" class="cta-button">
                Shop Our Collection
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

@endsection
