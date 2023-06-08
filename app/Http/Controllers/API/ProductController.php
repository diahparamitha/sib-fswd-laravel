<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return response()->json([
            'success' => true,
            'message' => 'List Products',
            'products' => $products
        ], 200);
    }

    public function detailProduct($id){
        $product = Product::find($id);

        if($product){
                return response()->json([
                'success' => true,
                'message' => 'Product Detail',
                'product' => $product
            ], 200);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Product tidak ada',
                'product' => ''
            ], 404);
        }
    }

    public function createProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'category_id'       => 'required',
            'name'              => 'required | min:5',
            'description'       => 'required | min:10',
            'price'             => 'required|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'status'            => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid!',
                'product' => $validator->errors()
            ], 422);
        }

        $product                = Product::create([
            'category_id'     => $request->category_id,
            'name'           => $request->name,
            'description'     => $request->description,
            'price'           => $request->price,
            'status'          => $request->status,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan!',
            'product' => $product
        ], 201);
    }

    public function updateProduct(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'id'                => 'required',
            'category_id'       => 'required',
            'name'              => 'required | min:5',
            'description'       => 'required | min:10',
            'price'             => 'required|regex:/^\d{1,6}(\.\d{1,2})?$/',
            'status'            => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid!',
                'product' => $validator->errors()
            ], 422);
        }

        $product = Product::find($id);

        if ($product){
            $product = $product->update([
                'category_id'     => $request->category_id,
                'name'           => $request->name,
                'description'     => $request->description,
                'price'           => $request->price,
                'status'          => $request->status,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil di update!',
                'product' => Product::find($id)
            ], 200);

        } else {
            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ada',
                'product' => ''
            ], 404);
        }
    }

    public function delete($id){
        $product = Product::find($id);

        if ($product){
            $product->delete();

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus!',
                'product' => null
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ada!',
                'product' => ''
            ], 404);
        }
    }
}

