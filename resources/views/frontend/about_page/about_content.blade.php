<main class="about-page">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/about_page/about_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/about_page/about_intro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/about_page/about_story.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/about_page/about_values.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/about_page/about_global_trade.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/about_page/about_responsive.css') }}">
    @include('frontend.about_page.partials.about_hero')
    @include('frontend.about_page.partials.about_intro_story')
    @include('frontend.about_page.partials.about_values')
    @include('frontend.about_page.partials.about_global_quality')
    @include('frontend.about_page.partials.about_cta')
</main>
