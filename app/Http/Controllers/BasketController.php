<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Basket::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $basket = new Basket();
        $basket->item_id = $request->item_id;
        $basket->user_id = $request->user_id;
        $basket->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Basket::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Basket $basket)
    {
        $basket->item_id = $request->item_id;
        $basket->user_id = $request->user_id;
        $basket->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $basket = Basket::findOrFail($id)->delete();
    }
}
