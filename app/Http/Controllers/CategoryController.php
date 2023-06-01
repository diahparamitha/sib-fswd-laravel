<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category/index', compact('categories'));
    }

     public function index_list() {
        $categories = Category::all();
        return view('category/category-list', compact('categories'));
    }

    public function category($id) {
        $categories = Category::all();
        $category = Category::find($id);

        if (!$category) {
            abort(404); // Kategori tidak ditemukan, tampilkan halaman 404 atau sesuaikan dengan penanganan error Anda.
        }

        $products = $category->products()->get(); // Ambil semua produk dari kategori yang dipilih
        return view('category/category', compact('category', 'products', 'categories'));
    }

    public function createCategory(Request $request)
    {
        $request->validate([
            'name' => 'required | min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        // Simpan kategori baru ke database
        $category = new Category();
        $category->name = $request->name;

         if($request->hasFile('image')){
            //    define image location in local path
            $location = public_path('/image_category');

            // ambil file image dan simpan ke local server
            $request->file('image')->move($location, $request->file('image')->getClientOriginalName());

            // simpan nama file di database
            $category->image = $request->file('image')->getClientOriginalName(); 
        }

        $category->save();
        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan');
    }

    public function editCategory($id){
       $category = Category::find($id);
       return view('category.update', compact('category'));
    }

    public function updateCategory(Request $request, $id) {
        $row = Category::find($id);

        $validated      = $request->validate([
            'name'      => 'required | min:3',
            'image'    => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $row-> name     = $request->name;

     if($request->hasFile('image')){
            //    define image location in local path
            $location = public_path('/image_category');

            // ambil file image dan simpan ke local server
            $request->file('image')->move($location, $request->file('image')->getClientOriginalName());

            // simpan nama file di database
            $row->image = $request->file('image')->getClientOriginalName(); 
        }

        $row->save();
        return redirect('/category-list')->with('edit', 'Category berhasil di-update!.');
    }

     public function delete($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect('/category-list')->with('delete', 'Category berhasil dihapus');
    }


}
