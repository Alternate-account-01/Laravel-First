<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;


class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

         $students = Student::with('classroom')
            ->when($search, function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhereHas('classroom', function ($q) use ($search) {
                      $q->where('name', 'like', "%{$search}%");
                  });
        })
        ->paginate(5)
        ->withQueryString();
        $classrooms = Classroom::all();

        return view('admin.student.index',[
            'title' => 'Students',
            'students' => $students,
            'classrooms' => $classrooms,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=> 'required|string|max:255',
            'date_of_birth'=> 'required|date',
            'classroom_id'=> 'required|exists:classrooms,id',
            'email'=> 'required|email|unique:students,email',
            'address'=> 'nullable|string|max:255',
        ]);

        Student::create($validated);

        return back()->with('success', 'Student created successfully');
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        
        $validated = $request->validate([
            'nama'=> 'required|string|max:255',
            'date_of_birth'=> 'required|date',
            'classroom_id'=> 'required|exists:classrooms,id',
            'email'=> 'required|email|unique:students,email,'.$id,
            'address'=> 'nullable|string|max:255',
        ]);

        $student->update($validated);

        return redirect()->route('student.index')->with('success', 'Student updated successfully');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student deleted successfully');
    }
}
