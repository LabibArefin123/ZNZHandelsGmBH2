<section class="about-values">
    <div class="container">
        <div class="about-values-heading">
            <div>
                <span class="about-small-heading">{{ $aboutValue->small_heading }}</span>
                <h2>{{ $aboutValue->title_before_emphasis }} <em>{{ $aboutValue->title_emphasis }}</em></h2>
            </div>
            <p>{{ $aboutValue->description }}</p>
        </div>
        <div class="about-values-grid">
            @foreach ($aboutValue->items as $item)
                @if ($item->is_active)
                    <article class="about-value-card">
                        <span class="about-value-number">{{ $item->number }}</span>
                        <div class="about-value-icon">
                            <i class="{{ $item->icon }}"></i>
                        </div>
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </article>
                @endif
            @endforeach
        </div>
    </div>
</section>
