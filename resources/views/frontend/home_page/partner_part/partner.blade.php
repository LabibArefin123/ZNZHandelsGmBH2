<section class="partner-section" id="partners">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/partner_part/partner_section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/partner_part/partner_heading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/partner_part/partner_grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/partner_part/partner_item.css') }}">
    <div class="container">
        <div class="partner-heading">
            <span class="partner-eyebrow">Our Network</span>
            <div class="partner-title-row">
                <h2>Our Partners</h2>
            </div>
            <p>Building trusted relationships with leading organizations and global industry partners.</p>
        </div>

        <div class="grid-container">
            <div class="grid-class">
                @foreach ($partners as $partner)
                    <div class="grid-item">
                        @if ($partner->website_url)
                            <a href="{{ $partner->website_url }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset($partner->logo) }}" alt="{{ $partner->logo_alt ?? $partner->name }}">
                            </a>
                        @else
                            <img src="{{ asset($partner->logo) }}" alt="{{ $partner->logo_alt ?? $partner->name }}">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
