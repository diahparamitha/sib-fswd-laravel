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
        return view('category-list/category-list', compact('categories'));
    }

    public function category($id) {
        $category = Category::find($id);
        if (!$category) {
            abort(404); // Kategori tidak ditemukan, tampilkan halaman 404 atau sesuaikan dengan penanganan error Anda.
        }
        $products = $category->products()->get(); // Ambil semua produk dari kategori yang dipilih

        return view('category/category', compact('category', 'products'));
    }


}
