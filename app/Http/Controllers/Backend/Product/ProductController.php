<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Product\ProductRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Http\Request;
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
            if ($request->hasFile('file')) {
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
                'redirect' => route('sellers.products')
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function uploadImage(Request $request)
    {
        $path = public_path('assets/images/products');
        $file = $request->file('file');
        $filename = 'Products_' . rand(0, 9999999999) . '_' . rand(0, 9999999999) . '.';
        $filename .= $file->getClientOriginalExtension();
        $file->move($path, $filename);
        return $filename;
    }
}
