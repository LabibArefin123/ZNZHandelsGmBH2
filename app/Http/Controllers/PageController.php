<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{   
    public function home()
    {
        return view('welcome'); // assuming you have a home.blade.php view
    }

    public function about()
    {
        return view('about'); // assuming you have an about.blade.php view
    }
    public function product()
    {
        $products = Product::where('is_active', true)
            ->latest()
            ->get();
        return view('frontend.product_page.product', compact('products'));
    }
    public function productView(Product $product)
    {
        abort_unless($product->is_active, 404);
        $relatedProducts = Product::where('is_active', true)
            ->where('id', '!=', $product->id)
            ->where(function ($query) use ($product) {
                $query->where('category', $product->category)
                    ->orWhere('brand', $product->brand);
            })
            ->latest()
            ->take(4)
            ->get();
        return view('frontend.product_page.view_product_page.product_view', compact('product', 'relatedProducts'));
    }

    public function men()
    {
        return view('men'); // assuming you have a men.blade.php view
    }

    public function women()
    {
        return view('women'); // assuming you have a women.blade.php view
    }

    public function blog()
    {
        return view('blog'); // assuming you have a blog.blade.php view
    }

    public function contact()
    {
        return view('contact'); // assuming you have a contact.blade.php view
    }
}
