<?php

namespace App\Services\Contracts;

interface SwapiInterface
{
    /**
     * @param null $id
     *
     * @return mixed
     */
    public function getPeople($id = null);

    /**
     * @param null $id
     *
     * @return mixed
     */
    public function getPlanet($id = null);

    /**
     * @param null $id
     *
     * @return mixed
     */
    public function getFilms($id = null);

    /**
     * @param null $id
     *
     * @return mixed
     */
    public function getSpecies($id = null);

    /**
     * @param null $id
     *
     * @return mixed
     */
    public function getVehicles($id = null);

    /**
     * @param null $id
     *
     * @return mixed
     */
    public function getStarships($id = null);
}
