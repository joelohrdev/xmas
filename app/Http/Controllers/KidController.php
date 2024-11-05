<?php

namespace App\Http\Controllers;

use App\Models\Kid;

class KidController extends Controller
{
    public function show(Kid $kid)
    {
        return view('kid.show', [
            'kid' => $kid,
        ]);
    }
}
