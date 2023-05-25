<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
     public function index() {

        $products = Product::all();
        return view('product/index', compact('products'));
    }

    public function index_list() {

        $products = Product::all();
        return view('product-list/product-list', compact('products'));
    }

    public function detail($id) {
      $product = Product::find($id);
      return view('product/detail-product', compact('product'));
    }
}


