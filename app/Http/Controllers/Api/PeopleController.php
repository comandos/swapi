<?php

namespace App\Http\Controllers\Api;

class PeopleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = $this->swapi->getPeople();
        return response($people);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = $this->swapi->getPeople($id);
        return response($person);
    }
}
