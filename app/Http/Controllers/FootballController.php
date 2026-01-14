<?php

namespace App\Http\Controllers;

use App\Models\FootballPost;
use Illuminate\Http\Request;

class FootballController extends Controller
{
    public function index()
    {
        // Mengambil semua berita bola terbaru
        $posts = FootballPost::latest()->get();
        return view('welcome', compact('posts'));
    }

    public function show($slug)
{
    // Mencari berita berdasarkan slug, jika tidak ada akan muncul error 404
    $post = \App\Models\FootballPost::where('slug', $slug)->firstOrFail();
    
    return view('show', compact('post'));
}
}