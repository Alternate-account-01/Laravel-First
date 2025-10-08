<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();

        return view('teacher', [
            'title' => 'teacher',
            'teacher' => $teacher
        ]);
    }
}
