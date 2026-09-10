<footer class="site-footer">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/footer_part/footer_section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/footer_part/footer_brand.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/footer_part/footer_links.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/footer_part/footer_resp.css') }}">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="{{ route('home') }}" class="footer-logo-link">
                        <img src="{{ asset('images/logo.PNG') }}" alt="ZNZ Handels GmbH" class="footer-logo">
                    </a>
                    <p>The customer is at the heart of our unique business model, combining design, quality and reliable
                        global textile production.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="Pinterest"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <span class="footer-label">Explore</span>
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('product') }}">Product</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contacts</a></li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <span class="footer-label">Stay Connected</span>
                    <h5>Newsletter</h5>
                    <p>Be the first to know about new arrivals, look books, sales and promotions.</p>
                    <form action="#" class="footer-newsletter-form">
                        <div class="footer-input-wrapper">
                            <input type="email" placeholder="Your email address" required>
                            <button type="submit" aria-label="Subscribe">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-copyright">
                    <span>ZNZ Handels GmbH © 2024 - Present</span>
                    <span>All Rights Reserved.</span>
                </div>
                <div class="footer-credit">
                    <span>Designed &amp; Developed by</span>
                    <strong>Md. Labib Arefin</strong>
                </div>
            </div>
        </div>
    </div>
</footer>
