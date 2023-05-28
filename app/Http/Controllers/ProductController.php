<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
     public function index() {

        $products = Product::all();
        $categories = Category::all();
        return view('product/index', compact(['products', 'categories']));
    }

    public function index_list() {

        $products = Product::all();
        $categories = Category::all();
        return view('product/product-list', compact(['products', 'categories']));
    }

    public function detail($id) {
      $product = Product::find($id);
      $categories = Category::all();
      return view('product/detail-product', compact(['product', 'categories']));
    }

    public function edit($id){
        $data = Product::find($id);
        $categories = Category::all();
        return view('product.update', compact('data', 'categories'));
    }

    public function create(){
        return view('product/create', [
            'categories' => Category::all()
        ]);
    }

    public function createProduct(Request $request) {
        $request->validate([
           'category_id'       => 'required',
            'name'              => 'required',
            'description'       => 'required',
            'price'             => 'required|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'status'            => 'required',
            'image'             => 'image|mimes:png,jpeg,jpg',
        ]);

        $data                   = new Product();
        $data-> category_id     = $request->category_id;
        $data-> name            = $request->name;
        $data-> description     = $request->description;
        $data-> price           = $request->price;
        $data-> status          = $request->status;
        $data-> created_by      = auth()->id();
        $data-> verified_by     = auth()->id();


         if($request->hasFile('image')){
            //    define image location in local path
            $location = public_path('/image_product');

            // ambil file image dan simpan ke local server
            $request->file('image')->move($location, $request->file('image')->getClientOriginalName());

            // simpan nama file di database
            $data->image = $request->file('image')->getClientOriginalName(); 
        }

        $data -> save();

        return redirect('/product-list')->with('success', ' Product berhasil ditambah!');
    }


    //Update product
    public function update(Request $request, $id) {

        $row = Product::find($id);

        $validated              = $request->validate([
            'category_id'       => 'required',
            'name'              => 'required',
            'description'       => 'required',
            'price'             => 'required|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'status'            => 'required',
            'image'             => 'image|mimes:png,jpeg,jpg',
        ]);

        $row-> category_id     = $request->category_id;
        $row-> name            = $request->name;
        $row-> description     = $request->description;
        $row-> price           = $request->price;
        $row-> status          = $request->status;
        $row-> created_by      = auth()->id();
        $row-> verified_by     = auth()->id();

       if($request->hasFile('image')){
            //    define image location in local path
            $location = public_path('/image_product');

            // ambil file image dan simpan ke local server
            $request->file('image')->move($location, $request->file('image')->getClientOriginalName());

            // simpan nama file di database
            $row->image = $request->file('image')->getClientOriginalName(); 
        }

        $row->save();

            return redirect('/product-list');
    }

   public function delete($id) {

        $product = Product::find($id);
        $product->delete();

        return redirect('/product-list')->with('delete', 'Data Product berhasil dihapus');
    }
}


