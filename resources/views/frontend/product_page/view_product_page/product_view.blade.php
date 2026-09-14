@extends('frontend.shared_layout.app')

@section('title', 'Our Products')

@section('content')
    @include('custom_layout.header')
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_info.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_details.css') }}">
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
