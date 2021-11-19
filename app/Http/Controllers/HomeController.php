<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all();
        $product = Product::latest()->take(9)->get();
        // dd($product);
        // foreach($category as $cat)
        // {
        //     dd($cat->submenu,'ss');
        // }
        return view('welcome',compact('category','product'));
    }

    public function categoryProduct($cat)
    {
        $category = Category::where('name',$cat)->first();
        // foreach($category->product as $pro){
        //     dd($pro->name);
        // }
        if($category)
        return view('guest.cat-product',compact('category'));
        else
        return "No Product found";
    }
    public function productSearch(Request $request)
    {
        
        $cat = Category::find($request->cat_id);
        $name = $request->name;
        // dd($cat->product);
        $result = Product::where('name','like',$name)->get();
        // dd($result);
        return view('guest.search-product',compact('result'));
    }
    
}
