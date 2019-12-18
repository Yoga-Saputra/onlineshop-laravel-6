<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = \App\Product::all();/* where('name','baju 5')
                                    ->orderBy('stock', 'desc')
                                    ->get(); */
        $category = \App\Category::all();
        return view('index', compact('products','category'));

    }
    public function member()
    {
        return view('member.index');
    }
}
