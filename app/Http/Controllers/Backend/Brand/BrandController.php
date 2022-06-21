<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Brand\BrandRequest;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Brand',
            'brand' => Brand::whereSellerId(getInfoLogin()->seller_id)->first()
        ];

        return view('backend.brand.form', $data);
    }

    public function update(Brand $brand, BrandRequest $request)
    {
        try {
            $brand->update($request->only(['name', 'description']));

            return response()->json([
                'message' => 'Successfully updated',
                'redirect' => route('seller.brands')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }
}
