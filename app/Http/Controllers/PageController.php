<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('product'); // assuming you have an about.blade.php view
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
