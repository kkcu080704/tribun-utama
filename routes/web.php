<?php

use App\Http\Controllers\FootballController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ProfileController;
use App\Models\FootballPost; // Wajib ada agar Dashboard bisa menarik data
use Illuminate\Support\Facades\Route;

// --- HALAMAN PUBLIK ---
Route::get('/', [FootballController::class, 'index'])->name('home');
Route::get('/news/{slug}', [FootballController::class, 'show'])->name('news.show');

// --- HALAMAN ADMIN (Wajib Login) ---
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Perbaikan Error Undefined Variable $posts
    Route::get('/dashboard', function () {
        $posts = FootballPost::latest()->get(); 
        return view('dashboard', compact('posts'));
    })->name('dashboard');

    // CRUD Berita Bola
    Route::get('/admin/create', [AdminPostController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminPostController::class, 'store'])->name('admin.store');
    Route::get('/admin/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{post}', [AdminPostController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{post}', [AdminPostController::class, 'destroy'])->name('admin.destroy');

    // Profil Bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';