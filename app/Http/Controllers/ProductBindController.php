<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductBindController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product_bind)
    {
        //
        dd($product_bind);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product_bind)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product_bind)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product_bind)
    {
        //
    }
}
