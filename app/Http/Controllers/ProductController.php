<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

         $validator = Validator::make($request->all(), [
            'category_id'       => 'required',
            'name'              => 'required | min:5',
            'description'       => 'required | min:10',
            'price'             => 'required|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'status'            => 'required',
            'image'             => 'required | image|mimes:png,jpeg,jpg',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        //ubah nama file
        $imageName = time() . '.' . $request->image->extension();

        //simpan file ke folder public/image
         Storage::putFileAs('public/image_product', $request->image, $imageName);

        $data = Product::create([
            'category_id'      => $request->category_id,
            'name'             => $request->name,
            'description'      => $request->description,
            'price'            => $request->price,
            'status'           => $request->status,
            'image'            => $imageName,
            'created_by'       => auth()->id(),
            'verified_by'      => auth()->id(),
        ]);

        return redirect('/product-list')->with('success', ' Product berhasil ditambah!');
    }


    //Update product
    public function update(Request $request, $id) {

        if($request->hasFile('image')) {
            $old_image = Product::find($id)->image;

            Storage::delete('public/image_product' . $old_image);

            $imageName = time() . '.' . $request->image->extension();

            Storage::putFileAs('public/image_product', $request->image, $imageName);

            Product::where('id', $id)->update([
                'category_id'      => $request->category_id,
                'name'             => $request->name,
                'description'      => $request->description,
                'price'            => $request->price,
                'status'           => $request->status,
                'image'            => $imageName,
                'created_by'       => auth()->id(),
                'verified_by'      => auth()->id(),
            ]);
        } else {
             Product::where('id', $id)->update([
                'category_id'      => $request->category_id,
                'name'             => $request->name,
                'description'      => $request->description,
                'price'            => $request->price,
                'status'           => $request->status,
                'created_by'       => auth()->id(),
                'verified_by'      => auth()->id(),
            ]);
        }
        
        return redirect('/product-list')->with('edit', 'Product berhasil diperbaharui!');
    }

   public function delete($id) {

        $product = Product::find($id);
        $product->delete();

        return redirect('/product-list')->with('delete', 'Data Product berhasil dihapus');
    }
}


