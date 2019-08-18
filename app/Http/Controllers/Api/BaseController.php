<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Contracts\SwapiInterface;

class BaseController extends Controller
{
    public $swapi;

    public function __construct(SwapiInterface $swapi)
    {
        $this->swapi = $swapi;
    }
}
