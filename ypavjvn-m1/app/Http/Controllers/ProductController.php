<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $req)
    {
        if($req->filter == null)
        {
            $products = \App\Models\Product::all();
        }
        else
        {
            $products = \App\Models\Product::orderBy($req->filter,"desc")->where('id_cat', $req->category)->get();
        }
        $category = \App\Models\Product::all();
        return view("catalog", ["products"=>$products ,"category"=>$category]);
    }
    
    public function product($id)
    {
        $product = \App\Models\Product::find($id);
        return view("product",["product"=>$product]);
    }

    public function more($id)
    {
        $products = \App\Models\Product::find($id);
        return view('card', ['product2' => $products]);
    }

    public function catalog(){
        $category = \App\Models\Category::all();
        $products = \App\Models\Product::all();

        return view('catalog', ["category"=>$category, "products"=>$products]);
    }

}
