<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DIController extends Controller
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
    // Dependency Injection example method
    public function store(Request $request)
    {
        //
        // Request $request is injected
    }

    /**
     * Display the specified resource.
     */
    // Dependency Injection example method
    public function show(string $id)
    {
        //
        // string $id is injected
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Dependency Injection example method
    public function edit(string $id)
    {
        //
        // string $id is injected
    }

    /**
     * Update the specified resource in storage.
     */
    // Dependency Injection example method
    public function update(Request $request, string $id)
    {
        //
        // Request $request and string $id are injected
    }

    /**
     * Remove the specified resource from storage.
     */
    // Dependency Injection example method
    public function destroy(string $id)
    {
        //
        // string $id is injected
    }
}
