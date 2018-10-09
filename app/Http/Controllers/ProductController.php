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

    // Verantwoordelijk voor het laten zien van de create view
    public function create(){
        // Laat form view zien
        return view('products/create');
    }
    
    // Verantwoordelijk voor het verwerken van de POST data
    public function store(Request $request){
        // TODO: validate input
        
        // Stop data in de database
        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        //$product->category_id = $request->category_id;
        
        $product->save();
    }

}
