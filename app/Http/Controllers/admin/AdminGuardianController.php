<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $guardian = Guardian::when($search, function ($query) use ($search) {
            $query->where('nama', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone_number', 'like', "%{$search}%");
        })->paginate(5);

        return view('admin.guardian.index', [
            'title' => 'Data Wali',
            'guardian' => $guardian
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'job' => 'required|string|max:100',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'address' => 'required|string|max:255',
        ]);

        Guardian::create($validated);

        return redirect()->back()->with('success', 'Data wali berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $guardian = Guardian::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'job' => 'required|string|max:100',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'address' => 'required|string|max:255',
        ]);

        $guardian->update($validated);

        return redirect()->back()->with('success', 'Data wali berhasil diedit!');
    }

    public function destroy($id)
    {
        $guardian = Guardian::findOrFail($id);
        $guardian->delete();

        return redirect()->back()->with('success', 'Data wali berhasil dihapus!');
    }
}
