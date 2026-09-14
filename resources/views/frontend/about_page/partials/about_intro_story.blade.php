<section class="about-intro">
    <div class="container">
        <div class="about-intro-grid">
            <div class="about-section-label">
                <span>01</span>
                <p>WHO WE ARE</p>
            </div>
            <div class="about-intro-content">
                <span class="about-small-heading">A GLOBAL TEXTILE PARTNER</span>
                <h2>From fashion ideas to <span>trusted supply.</span></h2>
                <p>ZNZ Handels GmbH is a full-service partner in the textile sector, supporting brands and businesses
                    with carefully selected fashion and basic articles, sourcing solutions and dependable supply.</p>
                <p>We combine international sourcing capabilities with a strong focus on quality, communication and
                    long-term partnerships. Our approach is simple: understand what our customers need, connect them
                    with the right production partners and make every step of the process dependable.</p>
                <a href="{{ route('contact') }}" class="about-text-link">
                    Start a conversation
                    <i class="bi bi-arrow-up-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="about-story">
    <div class="container">
        <div class="about-story-grid">
            <div class="about-story-image">
                <img src="{{ asset($aboutStory->image) }}" alt="{{ $aboutStory->image_alt }}">
                <div class="about-story-image-caption">
                    <span>{{ $aboutStory->caption_label }}</span>
                    <strong>{{ $aboutStory->caption_title }}</strong>
                </div>
            </div>
            <div class="about-story-content">
                <span class="about-small-heading">{{ $aboutStory->small_heading }}</span>
                <h2>Built around people, products and <em>possibility.</em></h2>
                <p>{{ $aboutStory->paragraph_one }}</p>
                <p>{{ $aboutStory->paragraph_two }}</p>
                <div class="about-story-points">
                    <div class="about-story-point">
                        <span>{{ $aboutStory->point_one_number }}</span>
                        <div>
                            <h3>{{ $aboutStory->point_one_title }}</h3>
                            <p>{{ $aboutStory->point_one_description }}</p>
                        </div>
                    </div>
                    <div class="about-story-point">
                        <span>{{ $aboutStory->point_two_number }}</span>
                        <div>
                            <h3>{{ $aboutStory->point_two_title }}</h3>
                            <p>{{ $aboutStory->point_two_description }}</p>
                        </div>
                    </div>
                    <div class="about-story-point">
                        <span>{{ $aboutStory->point_three_number }}</span>
                        <div>
                            <h3>{{ $aboutStory->point_three_title }}</h3>
                            <p>{{ $aboutStory->point_three_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
