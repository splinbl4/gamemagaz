<?php

namespace App\Http\Controllers;


use App\Category;
use App\Http\Requests\Request;
use App\Product;


class SampleController extends Controller
{

    public function singlenews()
    {
        return view('pages.news.single', $this->data);
    }
    public function listnews()
    {
        return view('pages.news.list', $this->data);
    }
    public function about()
    {
        return view('pages.about', $this->data);
    }

    public function singleproduct($id)
    {
        $product = Product::where('id', '=', $id)->firstOrFail();
        $this->data['product'] = $product;
        return view('pages.product.single', $this->data);
    }
    public function index()
    {
        $products = Product::paginate(6);;
        $this->data['products'] = $products;
        return view('pages.index', $this->data);
    }
    public function category($name)
    {
        $category = Category::where('name', '=', $name)->firstOrFail();
        $this->data['category'] = $category;
//        dd($categories);
        return view('pages.category.category', $this->data);
    }
    public function cartstep1()
    {
        return view('pages.cart.step1', $this->data);
    }
    public function cartstep2()
    {
        return view('pages.cart.step2', $this->data);
    }
    public function cartstep3()
    {
        return view('pages.cart.step3', $this->data);
    }
    public function order(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return view('pages.order.order', $this->data);
    }
}
