<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
    public function show($item_id, $user_id)
    {
        $basket = Basket::find([$item_id, $user_id]);
        if (!$basket) {
            throw (new ModelNotFoundException)->setModel(get_class($this), [$item_id, $user_id]);
        }
        return $basket;
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $item_id, $user_id)
    {
        $basket = Basket::find([$item_id, $user_id]);
        if (!$basket) {
            throw (new ModelNotFoundException)->setModel(get_class($this), [$item_id, $user_id]);
        }
        // $basket->item_id = $request->item_id;
        // $basket->user_id = $request->user_id;
        $basket->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($item_id, $user_id)
    {
        $basket = Basket::find([$item_id, $user_id]);
        if (!$basket) {
            throw (new ModelNotFoundException)->setModel(get_class($this), [$item_id, $user_id]);
        }
        $basket->delete();
    }
}
