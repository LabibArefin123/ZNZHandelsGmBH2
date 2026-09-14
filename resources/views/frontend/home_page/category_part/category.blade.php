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
                @php($featuredCategory = $categories->first())

                <div class="category-preview-frame">
                    <div class="category-preview-image-wrap">
                        <img id="categoryPreviewImage" src="{{ asset($featuredCategory->image) }}"
                            alt="{{ $featuredCategory->name }}" class="category-preview-image">
                    </div>

                    <div class="category-preview-overlay"></div>

                    <div class="category-preview-content">
                        <span id="categoryPreviewNumber">01</span>

                        <div>
                            <span class="category-preview-label" id="categoryPreviewLabel">
                                {{ $featuredCategory->label }}
                            </span>

                            <h3 id="categoryPreviewTitle">
                                {{ $featuredCategory->name }}
                            </h3>
                        </div>
                    </div>

                    <div class="category-preview-progress">
                        <span id="categoryPreviewProgress"></span>
                    </div>

                    <button type="button" class="category-preview-view" data-bs-toggle="modal"
                        data-bs-target="#imageModal"
                        data-bs-image="{{ asset($featuredCategory->featured_image ?? $featuredCategory->image) }}"
                        data-bs-title="{{ $featuredCategory->name }}">
                        <i class="bi bi-arrows-fullscreen"></i>
                        <span>View Collection</span>
                    </button>
                </div>
            </div>

            <div class="category-list-column">
                <div class="category-list-header">
                    <span>Our Collections</span>
                    <span id="categoryCount">{{ $categories->count() }} Categories</span>
                </div>

                <div class="category-list" id="categoryList">
                    @foreach ($categories as $category)
                        <button type="button" class="category-item {{ $loop->first ? 'active' : '' }}"
                            data-image="{{ asset($category->image) }}" data-title="{{ $category->name }}"
                            data-label="{{ $category->label }}"
                            data-modal-image="{{ asset($category->featured_image ?? $category->image) }}"
                            data-number="{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}">

                            <span class="category-item-number">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <span class="category-item-name">
                                {{ $category->name }}
                            </span>

                            <i class="bi bi-arrow-up-right"></i>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/custom_frontend/welcome_page/category_part/image_preview.js') }}"></script>
