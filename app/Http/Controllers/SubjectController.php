<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all();

        return view('subject', [
            'title' => 'subject',
            'subject' => $subject
        ]);
    }
}
