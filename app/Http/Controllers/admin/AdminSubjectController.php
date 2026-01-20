<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminSubjectController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $subjects = Subject::with('teachers')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('description', 'like', "%{$search}%")
                      ->orWhereHas('teachers', function ($q) use ($search) {
                          $q->where('name', 'like', "%{$search}%");
                      });
            })
            ->paginate(10);

        return view('admin.subject.index', [
            'title' => 'Subject',
            'subjects' => $subjects
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:255',
        ]);

        Subject::create($request->only(['name', 'description']));

        return redirect()->back()->with('success', 'Subject berhasil ditambahkan!');
    }

    public function destroy(string $id)
    {
        $subject = Subject::with('teachers')->findOrFail($id);
        $subject->teachers()->delete();
        $subject->delete();

        return redirect()->back()->with('success', 'Subject dan semua guru terkait berhasil dihapus!');
    }

    public function update(Request $request, string $id)
    {
        $subject = Subject::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:255',
        ]);

        $subject->update($validated);

        return redirect()->back()->with('success', 'Subject berhasil diperbarui!');
    }
}
