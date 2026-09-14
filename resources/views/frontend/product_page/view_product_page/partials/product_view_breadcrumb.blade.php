<div class="product-view-breadcrumb">
    <a href="{{ route('home') }}">Home</a>
    <span>
        <i class="bi bi-chevron-right"></i>
    </span>
    <a href="{{ route('product') }}">Products</a>
    <span>
        <i class="bi bi-chevron-right"></i>
    </span>
    <strong>{{ $product->name }}</strong>
</div>
