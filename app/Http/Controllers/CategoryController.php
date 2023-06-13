<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
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

          $validator = Validator::make($request->all(), [
           'name' => 'required | min:3',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        //ubah nama file
        $imageName = time() . '.' . $request->image->extension();

        //simpan file ke folder public/image
         Storage::putFileAs('public/image_category', $request->image, $imageName);

        $data = Category::create([
            'name'             => $request->name,
            'image'            => $imageName,
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan');
    }

    public function editCategory($id){
       $category = Category::find($id);
       return view('category.update', compact('category'));
    }

    public function updateCategory(Request $request, $id) 
    {

        if($request->hasFile('image')) {
            $old_image = Category::find($id)->image;

            Storage::delete('public/image_category' . $old_image);

            $imageName = time() . '.' . $request->image->extension();

            Storage::putFileAs('public/image_category', $request->image, $imageName);

            Category::where('id', $id)->update([
                'name'             => $request->name,
                'image'            => $imageName,
            ]);
        } else {
             Category::where('id', $id)->update([
                'name'             => $request->name,
            ]);
        }
        
        return redirect('/category-list')->with('edit', 'Category berhasil di-update!.');
    }

     public function delete($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect('/category-list')->with('delete', 'Category berhasil dihapus');
    }


}
