<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefeatureRequest;
use App\Http\Requests\UpdatefeatureRequest;
use App\Models\feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefeatureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefeatureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(feature $feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefeatureRequest  $request
     * @param  \App\Models\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefeatureRequest $request, feature $feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(feature $feature)
    {
        //
    }
}
