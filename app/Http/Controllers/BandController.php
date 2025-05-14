<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getById($id)
{
    $bands = [
        [
            'id' => 1,
            'name' => 'Metallica',
            'genre' => 'Heavy Metal',
            'origin' => 'USA'
        ],
        [
            'id' => 2,
            'name' => 'Linkin Park',
            'genre' => 'Nu Metal',
            'origin' => 'USA'
        ],
        [
            'id' => 3,
            'name' => 'Legião Urbana',
            'genre' => 'Rock Nacional',
            'origin' => 'Brasil'
        ],
        [
            'id' => 4,
            'name' => 'Arctic Monkeys',
            'genre' => 'Indie Rock',
            'origin' => 'UK'
        ],
        [
            'id' => 5,
            'name' => 'j.skine do arrocha',
            'genre' => 'arrocha brabo',
            'origin' => 'brasil'
        ]
    ];

    $found = null;
    foreach ($bands as $band) {
        if ($band['id'] == $id) {
            $found = $band;
            break;
        }
    }

    if ($found) {
        return response()->json($found);
    } else {
        return response()->json(['error' => 'Banda não encontrada'], 404);
    }
}

   public function getByGenre($genre)
{
    $bands = [
        [
            'id' => 1,
            'name' => 'Metallica',
            'genre' => 'Heavy Metal',
            'origin' => 'USA'
        ],
        [
            'id' => 2,
            'name' => 'Linkin Park',
            'genre' => 'Nu Metal',
            'origin' => 'USA'
        ],
        [
            'id' => 3,
            'name' => 'Legião Urbana',
            'genre' => 'Rock Nacional',
            'origin' => 'Brasil'
        ],
        [
            'id' => 4,
            'name' => 'Arctic Monkeys',
            'genre' => 'Indie Rock',
            'origin' => 'UK'
        ],
        [
            'id' => 5,
            'name' => 'j.skine do arrocha',
            'genre' => 'arrocha',
            'origin' => 'brasil'
        ]
    ];

    $filtered = [];

    foreach ($bands as $band) {
        if (strtolower($band['genre']) == strtolower($genre)) {
            $filtered[] = $band;
        }
    }

    if (count($filtered) > 0) {
        return response()->json($filtered);
    } else {
        return response()->json(['error' => 'Nenhuma banda encontrada com esse gênero.'], 404);
    }
}

    public function getAll()
    {
        $bands = [
            [
                'id' => 1,
                'name' => 'Metallica',
                'genre' => 'Heavy Metal',
                'origin' => 'USA'
            ],
            [
                'id' => 2,
                'name' => 'Linkin Park',
                'genre' => 'Nu Metal',
                'origin' => 'USA'
            ],
            [
                'id' => 3,
                'name' => 'Legião Urbana',
                'genre' => 'Rock Nacional',
                'origin' => 'Brasil'
            ],
            [
                'id' => 4,
                'name' => 'Arctic Monkeys',
                'genre' => 'Indie Rock',
                'origin' => 'UK'
            ],
            [
                 'id' => 5,
                'name' => 'j.skine do arrocha',
                'genre' => 'arrocha brabo',
                'origin' => 'brasil'
            ]
        ];

        return response()->json($bands);
    }
}
