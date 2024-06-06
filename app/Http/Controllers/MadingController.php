<?php

namespace App\Http\Controllers;

use App\Models\Mading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MadingController extends Controller
{
    public function index()
    {
        $madings = Mading::all();
        return view('madings.index', compact('madings'));
    }

    public function publicIndex()
    {
        $madings = Mading::all();
        return view('madings.publicIndex', compact('madings'));
    }

    public function create()
    {
        return view('madings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Mading::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'image' => $imagePath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('madings.index')->with('success', 'Mading created successfully.');
    }

    public function show($id)
    {
        $mading = Mading::find($id);
        return view('madings.show', compact('mading'));
    }

    public function edit($id)
    {
        $mading = Mading::find($id);
        return view('madings.edit', compact('mading'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ]);

        $mading = Mading::find($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($mading->image);
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $mading->image;
        }

        $mading->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'image' => $imagePath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('madings.index')->with('success', 'Mading updated successfully.');
    }

    public function destroy($id)
    {
        $mading = Mading::find($id);
        Storage::disk('public')->delete($mading->image);
        $mading->delete();

        return redirect()->route('madings.index')->with('success', 'Mading deleted successfully.');
    }
}
