<?php

return [
    'swapi' => [
        'base_url' => env('SWAPI_API_ROOT'),
        'resources' => [
            'people' => 'people',
            'planets' => 'planets',
            'films' => 'films',
            'species' => 'species',
            'vehicles' => 'vehicles',
            'starships' => 'starships'
        ]
    ]
];
