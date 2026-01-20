<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;

class AdminClassroomController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $classrooms = Classroom::with('students')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhereHas('students', function ($q) use ($search) {
                          $q->where('nama', 'like', "%{$search}%");
                      });
            })
            ->paginate(10)
            ->withQueryString();

        return view('admin.classroom.index',[
            'title' => 'Classroom',
            'classrooms' => $classrooms
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|string|max:255',
        ]);

        Classroom::create($validated);

        return redirect()->route('classroom.index')->with('success', 'Classroom created successfully');
    }

    public function update(Request $request, string $id)
    {
        
        $validated = $request->validate([
            'name'=> 'required|string|max:255',
        ]);
        $classroom = Classroom::findOrFail($id);
        $classroom ->update($validated);
        
        return redirect()->route('classroom.index')->with('success', 'Classroom updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();

        return redirect()->back()->with('success', 'Classroom berhasil dihapus!');
    }
}
