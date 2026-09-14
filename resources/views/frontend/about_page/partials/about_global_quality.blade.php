<section class="about-global-trade">
    <div class="container">
        <div class="about-global-heading">
            <span class="about-small-heading">{{ $aboutGlobalTrade->small_heading }}</span>
            <h2>{{ $aboutGlobalTrade->title_before_emphasis }} <em>{{ $aboutGlobalTrade->title_emphasis }}</em></h2>
            <p>{{ $aboutGlobalTrade->description }}</p>
        </div>
        <div class="about-global-grid">
            @foreach ($aboutGlobalTrade->countries as $country)
                @if ($country->is_active)
                    <div class="about-global-country">
                        <span>{{ $country->number }}</span>
                        <div>
                            <i class="{{ $country->icon }}"></i>
                            <h3>{{ $country->country }}</h3>
                            <p>{{ $country->description }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
<section class="about-quality">
    <div class="container">
        <div class="about-quality-inner">
            <div class="about-quality-content">
                <span class="about-small-heading">{{ $aboutQuality->small_heading }}</span>
                <h2>{{ $aboutQuality->title_before_emphasis }} <em>{{ $aboutQuality->title_emphasis }}</em></h2>
                <p>{{ $aboutQuality->paragraph_one }}</p>
                <p>{{ $aboutQuality->paragraph_two }}</p>
            </div>
            <div class="about-quality-stat">
                <i class="{{ $aboutQuality->icon }}"></i>
                <strong>{{ $aboutQuality->stat_title }}</strong>
                <span>{{ $aboutQuality->stat_description }}</span>
            </div>
        </div>
    </div>
</section>
