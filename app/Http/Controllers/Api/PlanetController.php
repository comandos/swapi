<?php

namespace App\Http\Controllers\Api;

class PlanetController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planets = $this->swapi->getPlanet();
        return response($planets);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planet = $this->swapi->getPlanet($id);
        return response($planet);
    }
}
