<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('gurus.index', compact('gurus'));
    }

    public function create()
    {
        return view('gurus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'jabatan' => 'required|string',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        $imagePath = $request->file('image')->store('gurus', 'public');

        Guru::create([
            'image' => $imagePath,
            'jabatan' => $request->jabatan,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('gurus.index')->with('success', 'Guru created successfully.');
    }

    public function edit(Guru $guru)
    {
        return view('gurus.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'image' => 'image',
            'jabatan' => 'required|string',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gurus', 'public');
            $guru->update(['image' => $imagePath]);
        }

        $guru->update([
            'jabatan' => $request->jabatan,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('gurus.index')->with('success', 'Guru updated successfully.');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('gurus.index')->with('success', 'Guru deleted successfully.');
    }

    public function show(Guru $guru)
    {
        return view('gurus.show', compact('guru'));
    }

    public function publicIndex()
    {
        $gurus = Guru::all();
        return view('gurus.publicIndex', compact('gurus'));
    }
}
