<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    //public function __construct()
    //{
        //$this->middleware('auth');
    //}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryList = Category::all();
        return view('products.create', compact('categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = request()->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'sales_price' => 'required',
            'purchase_price' => 'required'
        ]);

        Product::create($validateData);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categoryList = Category::all();
        return view('products.edit', compact('product', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validateData = request()->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'sales_price' => 'required',
            'purchase_price' => 'required'
        ]);

        $product->update($validateData);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }
}
