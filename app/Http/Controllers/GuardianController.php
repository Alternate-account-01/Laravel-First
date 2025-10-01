<?php

namespace App\Http\Controllers;

use App\Models\Guardian;

class GuardianController extends Controller
{
    public function index()
    {
        $guardian = Guardian::all();

        return view('guardian', [
            'title' => 'guardian',
            'guardian' => $guardian
        ]);
    }
}
