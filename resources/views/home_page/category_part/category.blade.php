<section class="category-section" id="categories">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/category_part/category_section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/category_part/category_preview.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/category_part/category_list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/category_part/category_item.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/category_part/category_animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/category_part/category_responsive.css') }}">
    <div class="container">
        <div class="category-heading">
            <span class="category-eyebrow">Explore Our Collection</span>
            <h2>Categories</h2>
            <p>Discover thoughtfully selected collections designed for every style, season and occasion.</p>
        </div>
        <div class="category-showcase">
            <div class="category-preview-column">
                <div class="category-preview-frame">
                    <div class="category-preview-image-wrap">
                        <img id="categoryPreviewImage" src="{{ asset('images/readymate garments.jpg') }}" alt="Garments"
                            class="category-preview-image">
                    </div>
                    <div class="category-preview-overlay"></div>
                    <div class="category-preview-content">
                        <span id="categoryPreviewNumber">01</span>
                        <div>
                            <span class="category-preview-label">Featured Collection</span>
                            <h3 id="categoryPreviewTitle">Garments</h3>
                        </div>
                    </div>
                    <div class="category-preview-progress">
                        <span id="categoryPreviewProgress"></span>
                    </div>
                    <button type="button" class="category-preview-view" data-bs-toggle="modal"
                        data-bs-target="#imageModal" data-bs-image="{{ asset('images/readymate garments.jpg') }}">
                        <i class="bi bi-arrows-fullscreen"></i>
                        <span>View Collection</span>
                    </button>
                </div>
            </div>
            <div class="category-list-column">
                <div class="category-list-header">
                    <span>Our Collections</span>
                    <span id="categoryCount">12 Categories</span>
                </div>
                <div class="category-list" id="categoryList">
                    <button type="button" class="category-item active"
                        data-image="{{ asset('images/readymate garments.jpg') }}" data-title="Garments">
                        <span class="category-item-number">01</span>
                        <span class="category-item-name">Garments</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item"
                        data-image="{{ asset('images/readymate footwear.jpg') }}" data-title="Footwear">
                        <span class="category-item-number">02</span>
                        <span class="category-item-name">Footwear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item" data-image="{{ asset('images/readymate sports.jpg') }}"
                        data-title="Sports Wear">
                        <span class="category-item-number">03</span>
                        <span class="category-item-name">Sports Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item"
                        data-image="{{ asset('images/readymate leather.jpg') }}" data-title="Leather Accessories">
                        <span class="category-item-number">04</span>
                        <span class="category-item-name">Leather Accessories</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item"
                        data-image="{{ asset('images/readymate casual.PNG') }}" data-title="Casual Wear">
                        <span class="category-item-number">05</span>
                        <span class="category-item-name">Casual Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item"
                        data-image="{{ asset('images/readymate innerwear.jpg') }}" data-title="Inner Wear">
                        <span class="category-item-number">06</span>
                        <span class="category-item-name">Inner Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item" data-image="{{ asset('images/winter wear.PNG') }}"
                        data-title="Winter Wear">
                        <span class="category-item-number">07</span>
                        <span class="category-item-name">Winter Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item"
                        data-image="{{ asset('images/readymate summer.PNG') }}" data-title="Summer Wear">
                        <span class="category-item-number">08</span>
                        <span class="category-item-name">Summer Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item" data-image="{{ asset('images/ethnic wear.PNG') }}"
                        data-title="Ethnic Wear">
                        <span class="category-item-number">09</span>
                        <span class="category-item-name">Ethnic Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item"
                        data-image="{{ asset('images/readymate kids.PNG') }}" data-title="Kids Wear">
                        <span class="category-item-number">10</span>
                        <span class="category-item-name">Kids Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item"
                        data-image="{{ asset('images/pregnancy wear.PNG') }}" data-title="Pregnancy Wear">
                        <span class="category-item-number">11</span>
                        <span class="category-item-name">Pregnancy Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                    <button type="button" class="category-item" data-image="{{ asset('images/formal wear.PNG') }}"
                        data-title="Formal Wear">
                        <span class="category-item-number">12</span>
                        <span class="category-item-name">Formal Wear</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/custom_frontend/welcome_page/category_part/image_preview.js') }}"></script>