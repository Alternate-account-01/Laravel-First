<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $teachers = Teacher::with('subject')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%")
                      ->orWhere('phone_number', 'like', "%{$search}%")
                      ->orWhereHas('subject', function ($q) use ($search) {
                          $q->where('name', 'like', "%{$search}%");
                      });
            })
            ->paginate(100)
            ->withQueryString();

        $subjects = Subject::all();

        return view('admin.teacher.index', [
            'title' => 'Data Guru',
            'teacher' => $teachers,
            'subjects' => $subjects,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:teachers,email',
            'subject_id' => 'required|exists:subjects,id',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        Teacher::create($validated);

        return redirect()->back()->with('success', 'Data guru berhasil ditambahkan!');
    }

    public function update(Request $request, string $id)
    {
        $teacher = Teacher::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:teachers,email,'.$id,
            'subject_id' => 'required|exists:subjects,id',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        $teacher->update($validated);

        return redirect()->back()->with('success', 'Data guru berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
