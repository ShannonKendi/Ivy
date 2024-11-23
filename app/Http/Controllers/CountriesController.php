<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Country as ResourcesCountry;
use Illuminate\Http\Request;
use Nnjeim\World\Models\Country;

class CountriesController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Country::all();

        return $this->sendResponse(ResourcesCountry::collection($products), "conuntries retrieved");
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
