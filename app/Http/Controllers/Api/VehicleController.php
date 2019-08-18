<?php

namespace App\Http\Controllers\Api;

class VehicleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = $this->swapi->getVehicles();
        return response($vehicles);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = $this->swapi->getVehicles($id);
        return response($vehicle);
    }
}
