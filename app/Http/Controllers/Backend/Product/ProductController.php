<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Product\ProductRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Product',
            'mods' => 'product'
        ];

        return view('backend.product.index', $data);
    }

    public function getData()
    {
        return DataTables::of(Product::with('productCategory')->get())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Create Product',
            'mods' => 'create_product',
            'productCategories' => ProductCategory::all()
        ];

        return view('backend.product.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            // return dd($request->file('image'));
            if ($request->hasFile('image')) {
                $picName = $this->uploadImage($request);
            } else {
                $picName = null;
            }

            $brand = Brand::whereSellerId(auth()->user()->seller_id)->first();

            // return dd($brand->id);

            $request->merge(['image' => $picName]);
            Product::create([
                'brand_id' => $brand->id,
                'product_category_id' => $request->product_category_id,
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'image' => $picName,
                'description' => $request->description,
            ]);

            return response()->json([
                'message' => 'Data telah ditambahkan',
                'redirect' => route('seller.products')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = [
            'title' => 'Edit Product',
            'mods' => 'create_product',
            'product' => $product,
            'productCategories' => ProductCategory::all(),
            'action' => route('seller.products.update', $product->id)
        ];

        return view('backend.product.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, ProductRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                $picName = null;

                if ($product->image != null && file_exists(public_path('storage/images/products/' . $product->image))) {
                    File::delete(public_path('storage/images/products/' . $product->image));
                    $picName = $this->uploadImage($request);
                }
            } else {
                $picName = null;
            }

            $brand = Brand::whereSellerId(auth()->user()->seller_id)->first();

            $request->merge(['image' => $picName]);
            $product->update(
                [
                    'brand_id' => $brand->id,
                    'product_category_id' => $request->product_category_id,
                    'name' => $request->name,
                    'price' => $request->price,
                    'stock' => $request->stock,
                    'image' => $picName,
                    'description' => $request->description,
                ]
            );

            return response()->json([
                'message' => 'Data telah diperbarui',
                'redirect' => route('seller.products')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();

            if ($product->image != null && file_exists(public_path('storage/images/products/' . $product->image))) {
                File::delete(public_path('storage/images/products/' . $product->image));
            }

            return response()->json([
                'message' => 'Data telah dihapus',
                'redirect' => route('seller.products')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    private function uploadImage(Request $request)
    {
        $path = public_path('assets/images/products');
        $file = $request->file('image');
        $filename = 'Products_' . rand(0, 9999999999) . '_' . rand(0, 9999999999) . '.';
        $filename .= $file->getClientOriginalExtension();
        $file->move($path, $filename);
        return $filename;
    }
}
