<?php

namespace App\Http\Controllers\Api;

class StarshipController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $starships = $this->swapi->getStarships();
        return response($starships);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $starship = $this->swapi->getStarships($id);
        return response($starship);
    }
}
