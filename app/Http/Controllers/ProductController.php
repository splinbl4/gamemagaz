<?php

namespace App\Http\Controllers;


use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);;
        $data['products'] = $products;
        return view('pages.index', $data);
    }


}
