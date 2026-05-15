        // Header scroll effect
        const header = document.getElementById('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 80) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                // Close mobile menu after navigation
                const navMenu = document.querySelector('.nav-menu');
                if (navMenu) {
                    navMenu.classList.remove('active');
                }
                const hamburger = document.querySelector('.hamburger');
                if (hamburger) {
                    hamburger.classList.remove('active');
                }
            });
        });

        // Mobile menu toggle (hamburger)
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        if (hamburger && navMenu) {
            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            });
        }

        // Newsletter form submission
        const newsletterForm = document.querySelector('.newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const email = newsletterForm.querySelector('input').value;
                alert(`Thank you for subscribing! We'll send skincare tips to ${email} ✨`);
                newsletterForm.reset();
            });
        }

        // Add to cart functionality (basic)
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const productName = button.parentElement.querySelector('h3')?.textContent || 'Item';
                alert(`${productName} added to cart! 🛒`);
            });
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');

        if (backToTopButton) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            });

            backToTopButton.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe feature cards, steps, and values
        document.querySelectorAll('.feature-card, .product-card, .testimonial-card, .step, .value').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Keyboard accessibility
        document.addEventListener('keydown', function(e) {
            if (e.key === '/' && document.activeElement.tagName !== "INPUT") {
                e.preventDefault();
                // Could focus search here in future
            }
        });

        // Animated counters for hero stats
        function animateCounter(element, target, suffix = '', duration = 2000) {
            const start = 0;
            const startTime = performance.now();

            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                const easeInOut = progress < 0.5
                    ? 2 * progress * progress
                    : 1 - Math.pow(-2 * progress + 2, 2) / 2;

                const current = Math.floor(start + (target - start) * easeInOut);
                element.textContent = current + suffix;

                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }

            requestAnimationFrame(update);
        }

        // Intersection Observer for stat animations
        const statObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumber = entry.target.querySelector('.stat-number');
                    const target = parseInt(statNumber.dataset.target);
                    const label = entry.target.querySelector('.stat-label').textContent;

                    let suffix = '';
                    if (label.includes('Customers')) suffix = 'K+';
                    else if (label.includes('Gold')) suffix = 'K';
                    else if (label.includes('Natural')) suffix = '%';

                    animateCounter(statNumber, target, suffix);
                    statObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.stat-item').forEach(stat => {
            statObserver.observe(stat);
        });

        console.log('%cGlamour Skincare - Enhanced Hero Ready ✨', 'color: #d4af37; font-size: 14px; font-family: Poppins');
