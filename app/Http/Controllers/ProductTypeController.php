<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductType::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productType = new ProductType();
        $productType->name = $request->name;
        $productType->description = $request->description;
        $productType->cost = $request->cost;
        $productType->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return ProductType::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, ProductType $productType)
    {
        $productType->name = $request->name;
        $productType->description = $request->description;
        $productType->cost = $request->cost;
        $productType->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productType = ProductType::findOrFail($id)->delete();
    }
}
