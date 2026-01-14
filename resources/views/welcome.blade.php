<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tribun Utama - Berita Bola Terkini</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-[#0B0E11] text-white font-sans antialiased">

    <nav class="border-b border-white/10 bg-black/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="font-['Oswald'] italic text-3xl tracking-tighter">
                TRIBUN<span class="text-[#00FF41]">UTAMA</span>
            </h1>
            <div class="flex gap-6 items-center">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-bold uppercase hover:text-[#00FF41]">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-bold uppercase hover:text-[#00FF41]">Login Admin</a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <header class="py-16 text-center bg-gradient-to-b from-black to-[#0B0E11]">
        <h2 class="text-[#00FF41] font-bold tracking-widest uppercase text-sm mb-4">Stadium Night Edition</h2>
        <p class="text-5xl md:text-7xl font-['Oswald'] italic uppercase leading-none">
            Garis Depan <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-500">Berita Sepak Bola</span>
        </p>
    </header>

    <main class="max-w-7xl mx-auto px-6 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="bg-[#161B22] rounded-2xl overflow-hidden border border-white/5 hover:border-[#00FF41]/50 transition-all group">
                <div class="relative h-48">
                    <img src="{{ $post->gambar }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
                    <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-md border border-[#00FF41]/30 rounded-full px-3 py-1">
                        <span class="text-[#00FF41] text-xs font-black italic">{{ $post->intensity }}% HEAT</span>
                    </div>
                </div>
                
                <div class="p-6">
                    <span class="text-[#00FF41] text-[10px] font-black uppercase tracking-[0.2em]">{{ $post->klub_terkait }}</span>
                    <h3 class="font-['Oswald'] text-2xl uppercase mt-2 mb-4 leading-tight group-hover:text-[#00FF41] transition">
                        {{ $post->judul }}
                    </h3>
                    <div class="bg-black/40 p-3 rounded border-l-2 border-[#00FF41] mb-6">
                        <p class="text-gray-400 text-sm italic italic leading-relaxed">
                            "{{ $post->analisis_singkat }}"
                        </p>
                    </div>
                    <a href="{{ route('news.show', $post->slug) }}" class="text-xs font-black uppercase tracking-widest border-b-2 border-[#00FF41] pb-1 hover:text-[#00FF41] transition">
    Baca Analisis →
</a>
                </div>
            </div>
            @endforeach
        </div>
    </main>

</body>
</html>