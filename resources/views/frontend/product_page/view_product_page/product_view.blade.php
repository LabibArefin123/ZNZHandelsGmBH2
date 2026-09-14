@extends('frontend.shared_layout.app')

@section('title', 'Our Products')

@section('content')
    @include('custom_layout.header')
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_header.css') }}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_gallery/product_view_gallery_layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_gallery/product_view_gallery_thumbnails.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_gallery/product_view_gallery_main.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_gallery/product_view_gallery_controls.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_gallery/product_view_gallery_modal.css')}}">
    {{-- Start of Product View Info CSS --}}
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_info/product_view_meta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_info/product_view_options.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_info/product_view_quantity.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_info/product_view_actions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_info/product_view_benefits.css') }}">
    {{-- End of Product View Info CSS --}}
    {{-- Start of Product View Details CSS --}}
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_details/product_view_details_tabs.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_details/product_view_details_content.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_details/product_view_details_specifications.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_details/product_view_details_shipping.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_frontend/product_page/product_view/product_view_details/product_view_details_reviews.css')}}">
    {{-- End of Product View Details CSS --}}
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_related.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_responsive.css') }}">

    <section class="product-view-page">
        <div class="container">
            @include('frontend.product_page.view_product_page.partials.product_view_breadcrumb')

            @include('frontend.product_page.view_product_page.partials.product_view_hero')

            @include('frontend.product_page.view_product_page.partials.product_view_details')

            @include('frontend.product_page.view_product_page.partials.product_view_related')
        </div>
    </section>

    @include('frontend.product_page.view_product_page.partials.product_view_image_modal')

    <script src="{{ asset('js/custom_frontend/product_page/product_view/product_view_gallery.js') }}"></script>
    <script src="{{ asset('js/custom_frontend/product_page/product_view/product_view_quantity.js') }}"></script>
    <script src="{{ asset('js/custom_frontend/product_page/product_view/product_view_ui.js') }}"></script>

    @include('custom_layout.footer')
@endsection
