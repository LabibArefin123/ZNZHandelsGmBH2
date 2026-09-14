<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\ProductSize;
use App\Models\Blog;
use App\Models\WelcomeCategory;

class PageController extends Controller
{
    public function home()
    {
        $categories = WelcomeCategory::where('status', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.welcome_page.welcome', compact('categories'));
    }
    public function about()
    {
        return view('frontend.about_page.about'); // assuming you have an about.blade.php view
    }

    public function product()
    {
        $products = Product::with(['category', 'brand', 'sizes',])->where('is_active', true)->latest()->get();
        $categories = ProductCategory::where('is_active', true)->withCount(['products' => function ($query) {
            $query->where('is_active', true);
        }])->orderBy('name')->get();

        $brands = ProductBrand::where('is_active', true)->whereHas('products', function ($query) {
            $query->where('is_active', true);
        })->withCount(['products' => function ($query) {
            $query->where('is_active', true);
        }])->orderBy('name')->get();

        $sizes = ProductSize::where('is_active', true)->whereHas('products', function ($query) {
            $query->where('is_active', true);
        })->orderBy('id')->get();
        return view('frontend.product_page.product', compact('products', 'categories', 'brands', 'sizes'));
    }

    public function productView(Product $product)
    {
        abort_unless($product->is_active, 404);

        $product->load([
            'category',
            'brand',
            'sizes',
        ]);

        $relatedProducts = Product::with([
            'category',
            'brand',
        ])
            ->where('is_active', true)
            ->where('id', '!=', $product->id)
            ->where(function ($query) use ($product) {
                $query->where(
                    'product_category_id',
                    $product->product_category_id
                )
                    ->orWhere(
                        'product_brand_id',
                        $product->product_brand_id
                    );
            })
            ->latest()
            ->take(4)
            ->get();

        return view(
            'frontend.product_page.view_product_page.product_view',
            compact(
                'product',
                'relatedProducts'
            )
        );
    }

    public function blog()
    {
        $blogs = Blog::where('status', 'published')
            ->latest('published_at')
            ->get();

        return view('blog', compact('blogs')); // assuming you have a blog.blade.php view
    }

    public function contact()
    {
        return view('frontend.contact_page.contact'); // assuming you have a contact.blade.php view
    }
}
