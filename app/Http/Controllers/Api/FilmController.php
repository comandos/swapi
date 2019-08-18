<?php

namespace App\Http\Controllers\Api;

class FilmController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = $this->swapi->getFilms();
        return response($films);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = $this->swapi->getFilms($id);
        return response($film);
    }
}
