<?php

namespace App\Services;

use App\Services\Contracts\SwapiInterface;
use GuzzleHttp\Client as GuzzleHttpClient;

class Swapi implements SwapiInterface
{
    /**
     * Debug flag
     * @var bool
     */
    private $debug = false;

    /**
     * Response format
     * @var string
     */
    private $format = 'json';

    /**
     * @var GuzzleHttpClient
     */
    private $client;

    /**
     * @var \Illuminate\Config\Repository|mixed
     */
    private $base_url;

    /**
     * Swapi constructor.
     * @param GuzzleHttpClient $client
     */
    public function __construct(GuzzleHttpClient $client)
    {
        $this->base_url = config('api.swapi.base_url');
        $this->client = $client;
    }

    public function getPeople($id = null)
    {
        $resource = config('api.swapi.resources.people');
        return $this->request($resource, $id);
    }

    public function getPlanet($id = null)
    {
        $resource = config('api.swapi.resources.planets');
        return $this->request($resource, $id);
    }

    public function getFilms($id = null)
    {
        $resource = config('api.swapi.resources.films');
        return $this->request($resource, $id);
    }

    public function getSpecies($id = null)
    {
        $resource = config('api.swapi.resources.species');
        return $this->request($resource, $id);
    }

    public function getVehicles($id = null)
    {
        $resource = config('api.swapi.resources.vehicles');
        return $this->request($resource, $id);
    }

    public function getStarships($id = null)
    {
        $resource = config('api.swapi.resources.starships');
        return $this->request($resource, $id);
    }

    protected function request($resource, $resource_id = null)
    {
        $url = $this->make_url($resource, $resource_id);

        $response = $this->client->get($url, [
            'debug' => $this->debug
        ]);

        return $response->getBody()->getContents();
    }

    private function make_url($resource, $resource_id = null, array $query = [])
    {
        $params = [
            'format' => $this->format
        ];
        return
            $this->base_url .
            $resource . '/' .
            $resource_id . '?' .
            http_build_query(array_merge($query, $params));
    }
}
