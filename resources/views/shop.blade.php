@extends('layouts.app')

@section('title', 'Shop - Glamour Skincare')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')
 
    <!-- Shop Hero -->
    <section class="shop-hero">
        <div class="shop-hero-bg" style="background-image: url('https://images.unsplash.com/photo-1556228720-195a672e8a03?w=1200&h=800&fit=crop');"></div>
        <div class="shop-hero-overlay"></div>
        <div class="shop-hero-content">
         
            <h1>Discover Your <span class="highlight">Perfect Glow</span></h1>
            <div class="shop-hero-divider"></div>
            <p class="shop-hero-description">Explore our curated collection of premium skincare products designed to nourish, protect, and enhance your natural beauty.</p>
            <div class="shop-hero-stats">
                <div class="shop-stat-item">
                    <div class="shop-stat-number">500+</div>
                    <div class="shop-stat-label">Premium Products</div>
                </div>
                <div class="shop-stat-item">
                    <div class="shop-stat-number">50K+</div>
                    <div class="shop-stat-label">Happy Customers</div>
                </div>
                <div class="shop-stat-item">
                    <div class="shop-stat-number">4.9</div>
                    <div class="shop-stat-label">Average Rating</div>
                </div>
            </div>
        </div>
        <div class="shop-hero-decoration">
            <div class="shop-decoration-shape shop-shape1"></div>
            <div class="shop-decoration-shape shop-shape2"></div>
            <div class="shop-decoration-shape shop-shape3"></div>
            <div class="shop-decoration-shape shop-shape4"></div>
        </div>
        <div class="shop-particles">
            <div class="shop-particle shop-p1"></div>
            <div class="shop-particle shop-p2"></div>
            <div class="shop-particle shop-p3"></div>
            <div class="shop-particle shop-p4"></div>
            <div class="shop-particle shop-p5"></div>
            <div class="shop-particle shop-p6"></div>
            <div class="shop-particle shop-p7"></div>
            <div class="shop-particle shop-p8"></div>
        </div>
    </section>

    <!-- Shop Content -->
    <div class="shop-container">
        <!-- Filters Sidebar -->
        <aside class="filters-sidebar">
            <!-- Search Bar -->
            <div class="search-container">
                <div class="search-input-wrapper">
                    <input type="text" class="search-input" placeholder="Search products..." autocomplete="off">
                    <i class="fas fa-search search-icon"></i>
                </div>
                <div class="search-suggestions">
                    <div class="suggestion-item" data-product="Hydrating Cleanser">Hydrating Cleanser</div>
                    <div class="suggestion-item" data-product="Vitamin C Serum">Vitamin C Serum</div>
                    <div class="suggestion-item" data-product="Clay Mask">Purifying Clay Mask</div>
                    <div class="suggestion-item" data-product="Retinol Cream">Retinol Renewal Night Cream</div>
                    <div class="suggestion-item" data-product="Eye Cream">Hydrating Eye Cream</div>
                    <div class="suggestion-item" data-product="Lip Balm">Nourishing Lip Balm</div>
                    <div class="suggestion-item" data-product="Face Oil">Rosehip Face Oil</div>
                    <div class="suggestion-item" data-product="Sheet Mask">Hydration Sheet Mask Set</div>
                </div>
            </div>

            <!-- Active Filters Tags -->
            <div class="active-filters" style="display: none;">
                <div class="filter-tags">
                    <!-- Active filter tags will be added here dynamically -->
                </div>
            </div>

            <div class="filters-header">
                <h3>Filters</h3>
                <button class="clear-filters">Clear All</button>
            </div>

            <!-- Category Filter -->
            <div class="filter-group">
                <div class="filter-group-header">
                    <h4>Category</h4>
                    <i class="fas fa-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-content">
                    <div class="filter-options">
                        <div class="filter-option active" data-filter="category" data-value="all">
                            <div class="filter-checkbox"></div>
                            <span>All Products</span>
                            <span class="filter-count">(48)</span>
                        </div>
                        <div class="filter-option" data-filter="category" data-value="cleansers">
                            <div class="filter-checkbox"></div>
                            <span>Cleansers</span>
                            <span class="filter-count">(8)</span>
                        </div>
                        <div class="filter-option" data-filter="category" data-value="moisturizers">
                            <div class="filter-checkbox"></div>
                            <span>Moisturizers</span>
                            <span class="filter-count">(12)</span>
                        </div>
                        <div class="filter-option" data-filter="category" data-value="serums">
                            <div class="filter-checkbox"></div>
                            <span>Serums</span>
                            <span class="filter-count">(6)</span>
                        </div>
                        <div class="filter-option" data-filter="category" data-value="masks">
                            <div class="filter-checkbox"></div>
                            <span>Masks</span>
                            <span class="filter-count">(5)</span>
                        </div>
                        <div class="filter-option" data-filter="category" data-value="sunscreen">
                            <div class="filter-checkbox"></div>
                            <span>Sunscreen</span>
                            <span class="filter-count">(4)</span>
                        </div>
                        <div class="filter-option" data-filter="category" data-value="eye-care">
                            <div class="filter-checkbox"></div>
                            <span>Eye Care</span>
                            <span class="filter-count">(3)</span>
                        </div>
                        <div class="filter-option" data-filter="category" data-value="lip-care">
                            <div class="filter-checkbox"></div>
                            <span>Lip Care</span>
                            <span class="filter-count">(2)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skin Type Filter -->
            <div class="filter-group">
                <div class="filter-group-header">
                    <h4>Skin Type</h4>
                    <i class="fas fa-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-content">
                    <div class="filter-options">
                        <div class="filter-option" data-filter="skin-type" data-value="dry">
                            <div class="filter-checkbox"></div>
                            <span>Dry Skin</span>
                            <span class="filter-count">(15)</span>
                        </div>
                        <div class="filter-option" data-filter="skin-type" data-value="oily">
                            <div class="filter-checkbox"></div>
                            <span>Oily Skin</span>
                            <span class="filter-count">(10)</span>
                        </div>
                        <div class="filter-option" data-filter="skin-type" data-value="combination">
                            <div class="filter-checkbox"></div>
                            <span>Combination</span>
                            <span class="filter-count">(12)</span>
                        </div>
                        <div class="filter-option" data-filter="skin-type" data-value="sensitive">
                            <div class="filter-checkbox"></div>
                            <span>Sensitive</span>
                            <span class="filter-count">(8)</span>
                        </div>
                        <div class="filter-option active" data-filter="skin-type" data-value="all">
                            <div class="filter-checkbox"></div>
                            <span>All Skin Types</span>
                            <span class="filter-count">(48)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Price Range -->
            <div class="filter-group">
                <div class="filter-group-header">
                    <h4>Price Range</h4>
                    <i class="fas fa-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-content">
                    <div class="price-range">
                        <div class="price-inputs">
                            <input type="number" class="price-input" placeholder="$0" min="0" max="500" value="0">
                            <span class="price-separator">-</span>
                            <input type="number" class="price-input" placeholder="$500" min="0" max="500" value="500">
                        </div>
                        <div class="price-slider-container">
                            <input type="range" class="price-slider" id="price-min" min="0" max="500" value="0">
                            <input type="range" class="price-slider" id="price-max" min="0" max="500" value="500">
                        </div>
                        <div class="price-presets">
                            <button class="price-preset active" data-min="0" data-max="25">$0 - $25</button>
                            <button class="price-preset" data-min="25" data-max="50">$25 - $50</button>
                            <button class="price-preset" data-min="50" data-max="100">$50 - $100</button>
                            <button class="price-preset" data-min="100" data-max="500">$100+</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rating Filter -->
            <div class="filter-group collapsed">
                <div class="filter-group-header">
                    <h4>Customer Rating</h4>
                    <i class="fas fa-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-content">
                    <div class="rating-filter">
                        <div class="rating-option active" data-filter="rating" data-value="all">
                            <div class="filter-checkbox"></div>
                            <span>All Ratings</span>
                            <span class="filter-count">(48)</span>
                        </div>
                        <div class="rating-option" data-filter="rating" data-value="5">
                            <div class="filter-checkbox"></div>
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-text">& Up (12)</span>
                        </div>
                        <div class="rating-option" data-filter="rating" data-value="4">
                            <div class="filter-checkbox"></div>
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star empty-star"></i>
                            </div>
                            <span class="rating-text">& Up (24)</span>
                        </div>
                        <div class="rating-option" data-filter="rating" data-value="3">
                            <div class="filter-checkbox"></div>
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star empty-star"></i>
                                <i class="far fa-star empty-star"></i>
                            </div>
                            <span class="rating-text">& Up (42)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Availability Filter -->
            <div class="filter-group collapsed">
                <div class="filter-group-header">
                    <h4>Availability</h4>
                    <i class="fas fa-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-content">
                    <div class="availability-filter">
                        <div class="availability-option active" data-filter="availability" data-value="all">
                            <div class="filter-checkbox"></div>
                            <span>All Products</span>
                            <span class="filter-count">(48)</span>
                        </div>
                        <div class="availability-option" data-filter="availability" data-value="in-stock">
                            <div class="filter-checkbox"></div>
                            <span class="availability-dot in-stock"></span>
                            <span>In Stock</span>
                            <span class="filter-count">(42)</span>
                        </div>
                        <div class="availability-option" data-filter="availability" data-value="low-stock">
                            <div class="filter-checkbox"></div>
                            <span class="availability-dot low-stock"></span>
                            <span>Low Stock</span>
                            <span class="filter-count">(4)</span>
                        </div>
                        <div class="availability-option" data-filter="availability" data-value="out-of-stock">
                            <div class="filter-checkbox"></div>
                            <span class="availability-dot out-of-stock"></span>
                            <span>Out of Stock</span>
                            <span class="filter-count">(2)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Brand Filter -->
            <div class="filter-group collapsed">
                <div class="filter-group-header">
                    <h4>Brand</h4>
                    <i class="fas fa-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-content">
                    <div class="filter-options">
                        <div class="filter-option active" data-filter="brand" data-value="all">
                            <div class="filter-checkbox"></div>
                            <span>All Brands</span>
                            <span class="filter-count">(48)</span>
                        </div>
                        <div class="filter-option" data-filter="brand" data-value="glamour">
                            <div class="filter-checkbox"></div>
                            <span>Glamour</span>
                            <span class="filter-count">(20)</span>
                        </div>
                        <div class="filter-option" data-filter="brand" data-value="natural-glow">
                            <div class="filter-checkbox"></div>
                            <span>Natural Glow</span>
                            <span class="filter-count">(12)</span>
                        </div>
                        <div class="filter-option" data-filter="brand" data-value="pure-beauty">
                            <div class="filter-checkbox"></div>
                            <span>Pure Beauty</span>
                            <span class="filter-count">(10)</span>
                        </div>
                        <div class="filter-option" data-filter="brand" data-value="eco-skin">
                            <div class="filter-checkbox"></div>
                            <span>Eco Skin</span>
                            <span class="filter-count">(6)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sort Options in Sidebar -->
            <div class="filter-group collapsed">
                <div class="filter-group-header">
                    <h4>Sort By</h4>
                    <i class="fas fa-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-content">
                    <div class="sort-options">
                        <div class="sort-option active" data-sort="featured">
                            <i class="fas fa-star"></i>
                            <span>Featured</span>
                        </div>
                        <div class="sort-option" data-sort="price-low">
                            <i class="fas fa-arrow-up"></i>
                            <span>Price: Low to High</span>
                        </div>
                        <div class="sort-option" data-sort="price-high">
                            <i class="fas fa-arrow-down"></i>
                            <span>Price: High to Low</span>
                        </div>
                        <div class="sort-option" data-sort="rating">
                            <i class="fas fa-star-half-alt"></i>
                            <span>Highest Rated</span>
                        </div>
                        <div class="sort-option" data-sort="newest">
                            <i class="fas fa-clock"></i>
                            <span>Newest</span>
                        </div>
                        <div class="sort-option" data-sort="name">
                            <i class="fas fa-sort-alpha-down"></i>
                            <span>Name A-Z</span>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Products Section -->
        <main class="products-section">
            <div class="products-header">
                <button class="mobile-filters-toggle">Filters</button>
                <div class="products-count">Showing 1-12 of 48 products</div>
                <select class="sort-select">
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest</option>
                    <option>Best Rated</option>
                </select>   
            </div>

            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card" style="--i: 1;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&h=400&fit=crop" alt="Hydrating Cleanser">
                        <div class="product-badge">New</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Cleanser</div>
                        <h3>Gentle Hydrating Cleanser</h3>
                        <div class="product-price">$28.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Gentle Hydrating Cleanser')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Gentle Hydrating Cleanser')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card" style="--i: 2;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1570197788417-0e82375c9371?w=400&h=400&fit=crop" alt="Vitamin C Serum">
                        <div class="product-badge">Sale</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Serum</div>
                        <h3>Brightening Vitamin C Serum</h3>
                        <div class="product-price">
                            <span class="old-price">$45.00</span>
                            <span class="discount">$36.00</span>
                        </div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Brightening Vitamin C Serum')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Brightening Vitamin C Serum')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card" style="--i: 3;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=400&h=400&fit=crop" alt="Nourishing Moisturizer">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Moisturizer</div>
                        <h3>Daily Nourishing Moisturizer</h3>
                        <div class="product-price">$32.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Daily Nourishing Moisturizer')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Daily Nourishing Moisturizer')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card" style="--i: 4;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=400&h=400&fit=crop" alt="Clay Mask">
                        <div class="product-badge">Bestseller</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Mask</div>
                        <h3>Purifying Clay Mask</h3>
                        <div class="product-price">$25.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Purifying Clay Mask')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Purifying Clay Mask')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card" style="--i: 5;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=400&h=400&fit=crop&crop=center" alt="SPF 50 Sunscreen">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Sunscreen</div>
                        <h3>Mineral SPF 50 Sunscreen</h3>
                        <div class="product-price">$38.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Mineral SPF 50 Sunscreen')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Mineral SPF 50 Sunscreen')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card" style="--i: 6;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1570197788417-0e82375c9371?w=400&h=400&fit=crop&crop=center" alt="Retinol Night Cream">
                        <div class="product-badge">Limited</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Night Care</div>
                        <h3>Retinol Renewal Night Cream</h3>
                        <div class="product-price">$55.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Retinol Renewal Night Cream')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Retinol Renewal Night Cream')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card" style="--i: 7;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&h=400&fit=crop&crop=center" alt="Eye Cream">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Eye Care</div>
                        <h3>Hydrating Eye Cream</h3>
                        <div class="product-price">$42.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Hydrating Eye Cream')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Hydrating Eye Cream')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card" style="--i: 8;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1570197788417-0e82375c9371?w=400&h=400&fit=crop&crop=top" alt="Lip Balm">
                        <div class="product-badge">New</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Lip Care</div>
                        <h3>Nourishing Lip Balm</h3>
                        <div class="product-price">$12.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Nourishing Lip Balm')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Nourishing Lip Balm')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card" style="--i: 9;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=400&h=400&fit=crop&crop=bottom" alt="Face Oil">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Oil</div>
                        <h3>Rosehip Face Oil</h3>
                        <div class="product-price">$48.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Rosehip Face Oil')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Rosehip Face Oil')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="product-card" style="--i: 10;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=400&h=400&fit=crop&crop=left" alt="Toner">
                        <div class="product-badge">Sale</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Toner</div>
                        <h3>Balancing Herbal Toner</h3>
                        <div class="product-price">
                            <span class="old-price">$30.00</span>
                            <span class="discount">$24.00</span>
                        </div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Balancing Herbal Toner')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Balancing Herbal Toner')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 11 -->
                <div class="product-card" style="--i: 11;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1570197788417-0e82375c9371?w=400&h=400&fit=crop&crop=right" alt="Exfoliating Scrub">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Exfoliator</div>
                        <h3>Gentle Exfoliating Scrub</h3>
                        <div class="product-price">$35.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Gentle Exfoliating Scrub')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Gentle Exfoliating Scrub')">View Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Product 12 -->
                <div class="product-card" style="--i: 12;">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&h=400&fit=crop&crop=top" alt="Sheet Mask Set">
                        <div class="product-badge">Bundle</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn wishlist-btn"><i class="fas fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Mask Set</div>
                        <h3>Hydration Sheet Mask Set</h3>
                        <div class="product-price">$65.00</div>
                        <div class="product-buttons">
                            <button class="add-to-cart" onclick="addToCart('Hydration Sheet Mask Set')">Add to Cart</button>
                            <button class="view-detail" onclick="viewDetail('Hydration Sheet Mask Set')">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </main>
    </div>
@endsection

@section('scripts')
<script>
       // Mobile menu functionality
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });


        // Search functionality
        const searchInput = document.querySelector('.search-input');
        const searchSuggestions = document.querySelector('.search-suggestions');
        const suggestionItems = document.querySelectorAll('.suggestion-item');

        if (searchInput) {
            searchInput.addEventListener('input', (e) => {
                const query = e.target.value.toLowerCase().trim();
                let hasVisible = false;

                suggestionItems.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(query) && query.length > 0) {
                        item.style.display = 'block';
                        hasVisible = true;
                    } else {
                        item.style.display = 'none';
                    }
                });

                searchSuggestions.classList.toggle('show', hasVisible && query.length > 0);
            });

            searchInput.addEventListener('focus', () => {
                if (searchInput.value.trim().length > 0) {
                    searchSuggestions.classList.add('show');
                }
            });

            searchInput.addEventListener('blur', () => {
                setTimeout(() => {
                    searchSuggestions.classList.remove('show');
                }, 200);
            });

            // Handle suggestion clicks
            suggestionItems.forEach(item => {
                item.addEventListener('click', () => {
                    searchInput.value = item.textContent;
                    searchSuggestions.classList.remove('show');
                    // Here you would typically trigger a search
                    console.log('Searching for:', item.dataset.product);
                });
            });
        }

        // Collapsible filter groups
        const filterGroupHeaders = document.querySelectorAll('.filter-group-header');

        filterGroupHeaders.forEach(header => {
            header.addEventListener('click', () => {
                const group = header.parentElement;
                group.classList.toggle('collapsed');
            });
        });

        // Enhanced filter functionality with active tags
        const filterOptions = document.querySelectorAll('.filter-option, .rating-option, .availability-option');
        const activeFilters = document.querySelector('.active-filters');
        const filterTags = document.querySelector('.filter-tags');

        function updateActiveFilters() {
            const activeOptions = document.querySelectorAll('.filter-option.active, .rating-option.active, .availability-option.active');
            filterTags.innerHTML = '';

            if (activeOptions.length > 0) {
                activeFilters.style.display = 'block';

                activeOptions.forEach(option => {
                    if (!option.dataset.value || option.dataset.value === 'all') return;

                    const filterType = option.dataset.filter;
                    const filterValue = option.dataset.value;
                    const filterText = option.querySelector('span:not(.filter-count):not(.rating-text)').textContent.trim();

                    const tag = document.createElement('div');
                    tag.className = 'filter-tag';
                    tag.innerHTML = `
                        <span>${filterText}</span>
                        <span class="filter-tag-remove" data-filter="${filterType}" data-value="${filterValue}">×</span>
                    `;
                    filterTags.appendChild(tag);
                });
            } else {
                activeFilters.style.display = 'none';
            }
        }

        filterOptions.forEach(option => {
            option.addEventListener('click', () => {
                const filterType = option.dataset.filter;
                const filterValue = option.dataset.value;

                if (filterType && filterValue === 'all') {
                    // If "All" option is clicked, deactivate all others in the same group
                    const sameGroup = document.querySelectorAll(`[data-filter="${filterType}"]`);
                    sameGroup.forEach(opt => opt.classList.remove('active'));
                    option.classList.add('active');
                } else if (filterType) {
                    // Deactivate "All" option if a specific option is selected
                    const allOption = document.querySelector(`[data-filter="${filterType}"][data-value="all"]`);
                    if (allOption) allOption.classList.remove('active');

                    // Toggle the clicked option
                    option.classList.toggle('active');

                    // If no options are active in this group, activate "All"
                    const activeInGroup = document.querySelectorAll(`[data-filter="${filterType}"].active`);
                    if (activeInGroup.length === 0) {
                        if (allOption) allOption.classList.add('active');
                    }
                }

                updateActiveFilters();
            });
        });

        // Filter tag removal
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('filter-tag-remove')) {
                const filterType = e.target.dataset.filter;
                const filterValue = e.target.dataset.value;

                const option = document.querySelector(`[data-filter="${filterType}"][data-value="${filterValue}"]`);
                if (option) {
                    option.classList.remove('active');

                    // Check if we need to activate "All" option
                    const activeInGroup = document.querySelectorAll(`[data-filter="${filterType}"].active`);
                    if (activeInGroup.length === 0) {
                        const allOption = document.querySelector(`[data-filter="${filterType}"][data-value="all"]`);
                        if (allOption) allOption.classList.add('active');
                    }
                }

                updateActiveFilters();
            }
        });

        // Clear filters
        const clearFiltersBtn = document.querySelector('.clear-filters');

        if (clearFiltersBtn) {
            clearFiltersBtn.addEventListener('click', () => {
                filterOptions.forEach(option => {
                    option.classList.remove('active');
                });

                // Reset "All" options to active
                const allOptions = document.querySelectorAll('[data-value="all"]');
                allOptions.forEach(option => option.classList.add('active'));

                // Reset price inputs
                const priceInputs = document.querySelectorAll('.price-input');
                priceInputs[0].value = '0';
                priceInputs[1].value = '500';

                // Reset price sliders
                const priceSliders = document.querySelectorAll('.price-slider');
                priceSliders[0].value = '0';
                priceSliders[1].value = '500';

                // Reset price presets
                const pricePresets = document.querySelectorAll('.price-preset');
                pricePresets.forEach(preset => preset.classList.remove('active'));
                if (pricePresets[3]) pricePresets[3].classList.add('active'); // $100+ preset

                updateActiveFilters();
            });
        }

        // Enhanced price range functionality
        const priceInputs = document.querySelectorAll('.price-input');
        const priceSliders = document.querySelectorAll('.price-slider');
        const pricePresets = document.querySelectorAll('.price-preset');

        function updatePriceInputs() {
            const minVal = parseInt(priceSliders[0].value);
            const maxVal = parseInt(priceSliders[1].value);

            priceInputs[0].value = minVal;
            priceInputs[1].value = maxVal;

            // Update slider backgrounds
            priceSliders[0].style.background = `linear-gradient(to right, #ddd 0%, #ddd ${(minVal/500)*100}%, var(--gold) ${(minVal/500)*100}%, var(--gold) 100%)`;
            priceSliders[1].style.background = `linear-gradient(to right, var(--gold) 0%, var(--gold) ${(maxVal/500)*100}%, #ddd ${(maxVal/500)*100}%, #ddd 100%)`;
        }

        priceSliders.forEach((slider, index) => {
            slider.addEventListener('input', () => {
                updatePriceInputs();
                // Reset price presets
                pricePresets.forEach(preset => preset.classList.remove('active'));
            });
        });

        priceInputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                let value = parseInt(e.target.value) || 0;
                value = Math.max(0, Math.min(500, value));

                if (index === 0 && value > parseInt(priceInputs[1].value)) {
                    value = parseInt(priceInputs[1].value);
                } else if (index === 1 && value < parseInt(priceInputs[0].value)) {
                    value = parseInt(priceInputs[0].value);
                }

                priceSliders[index].value = value;
                input.value = value;

                updatePriceInputs();
                pricePresets.forEach(preset => preset.classList.remove('active'));
            });
        });

        // Price presets
        pricePresets.forEach(preset => {
            preset.addEventListener('click', () => {
                const min = parseInt(preset.dataset.min);
                const max = parseInt(preset.dataset.max);

                priceInputs[0].value = min;
                priceInputs[1].value = max;
                priceSliders[0].value = min;
                priceSliders[1].value = max;

                pricePresets.forEach(p => p.classList.remove('active'));
                preset.classList.add('active');

                updatePriceInputs();
            });
        });

        // Sort options
        const sortOptions = document.querySelectorAll('.sort-option');

        sortOptions.forEach(option => {
            option.addEventListener('click', () => {
                sortOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
                console.log('Sorting by:', option.dataset.sort);
            });
        });

        // Wishlist functionality
        const wishlistBtns = document.querySelectorAll('.wishlist-btn');

        wishlistBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                btn.classList.toggle('active');
                const icon = btn.querySelector('i');
                if (btn.classList.contains('active')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                }
            });
        });



        // Initialize price inputs
        updatePriceInputs();

        function addToCart(productName) {
            const cartCount = document.querySelector('.cart-count');
            let count = parseInt(cartCount.textContent);
            count++;
            cartCount.textContent = count;

            const btn = event.target;
            btn.textContent = 'Added!';
            btn.style.background = 'linear-gradient(135deg, #28a745, #20c997)';
            btn.style.transform = 'scale(1.05)';

            setTimeout(() => {
                btn.textContent = 'Add to Cart';
                btn.style.background = 'linear-gradient(135deg, var(--gold), #c9a22f)';
                btn.style.transform = 'scale(1)';
            }, 2000);
        }

        function viewDetail(productName) {
            alert(`Viewing details for ${productName}\n\nThis is a placeholder for the product detail page.`);
        }

        // Mobile filters toggle
        const toggleBtn = document.querySelector('.mobile-filters-toggle');
        const filtersSidebar = document.querySelector('.filters-sidebar');

        if (toggleBtn && filtersSidebar) {
            toggleBtn.addEventListener('click', function() {
                filtersSidebar.classList.toggle('mobile-active');
            });
        }
</script>
@endsection