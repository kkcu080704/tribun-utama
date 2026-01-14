<?php

namespace App\Http\Controllers;

use App\Models\FootballPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    public function create() {
        return view('admin.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'judul' => 'required',
            'klub_terkait' => 'required',
            'intensity' => 'required|integer|between:1,100',
            'analisis_singkat' => 'required',
            'konten' => 'required',
            'gambar' => 'required|url',
        ]);

        $data['slug'] = Str::slug($request->judul);
        FootballPost::create($data);

        return redirect()->route('dashboard')->with('success', 'Berita berhasil diterbitkan!');
    }

    public function edit(FootballPost $post) {
        return view('admin.edit', compact('post'));
    }

    public function update(Request $request, FootballPost $post) {
        $data = $request->validate([
            'judul' => 'required',
            'klub_terkait' => 'required',
            'intensity' => 'required|integer|between:1,100',
            'analisis_singkat' => 'required',
            'konten' => 'required',
            'gambar' => 'required|url',
        ]);

        $data['slug'] = Str::slug($request->judul);
        $post->update($data);

        return redirect()->route('dashboard')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(FootballPost $post) {
        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Berita berhasil dihapus.');
    }
}