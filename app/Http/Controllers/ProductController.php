<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index() {
        /*
         * 1. data ophalen uit database
         * 2. view returnen (done)
         */

        // 1
        $allProducts = Product::all();


        // 2
        return view('products/index')
            ->with('products', $allProducts);
    }

    public function show($id) {
        // data ophalen
        $product = Product::find($id);

        // view returnen met de benodigde data
        return view('products/show')
                ->with('product', $product);
    }



}
