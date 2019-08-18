<?php

namespace App\Http\Controllers\Api;

class SpeciesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = $this->swapi->getSpecies();
        return response($species);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $species = $this->swapi->getSpecies($id);
        return response($species);
    }
}
