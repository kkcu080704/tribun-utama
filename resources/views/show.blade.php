<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->judul }} - Tribun Utama</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-[#0B0E11] text-white font-sans antialiased">

    <nav class="border-b border-white/10 bg-black/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="font-['Oswald'] italic text-2xl tracking-tighter hover:text-[#00FF41] transition">
                TRIBUN<span class="text-[#00FF41]">UTAMA</span>
            </a>
            <a href="{{ url('/') }}" class="text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-white transition">
                &larr; Kembali ke Tribun
            </a>
        </div>
    </nav>

    <article class="max-w-4xl mx-auto px-6 py-12">
        <div class="mb-10">
            <div class="flex items-center gap-3 mb-4">
                <span class="bg-[#00FF41] text-black text-[10px] font-black px-3 py-1 uppercase tracking-widest">
                    {{ $post->klub_terkait }}
                </span>
                <span class="text-[#00FF41] text-xs font-bold italic tracking-tighter">
                    🔥 {{ $post->intensity }}% HEAT INTENSITY
                </span>
            </div>
            <h1 class="font-['Oswald'] text-4xl md:text-6xl uppercase italic leading-none mb-6">
                {{ $post->judul }}
            </h1>
        </div>

        <div class="relative rounded-3xl overflow-hidden border border-white/10 mb-12 shadow-[0_0_50px_rgba(0,255,65,0.1)]">
            <img src="{{ $post->gambar }}" alt="{{ $post->judul }}" class="w-full h-auto object-cover filter brightness-75">
            <div class="absolute inset-0 bg-gradient-to-t from-[#0B0E11] via-transparent to-transparent"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="md:col-span-1">
                <div class="sticky top-24 space-y-8">
                    <div class="bg-[#161B22] border border-white/5 p-6 rounded-2xl">
                        <h4 class="text-[10px] font-black uppercase text-gray-500 tracking-widest mb-4 text-center">Match Intensity</h4>
                        <div class="relative h-4 w-full bg-gray-800 rounded-full overflow-hidden mb-2">
                            <div class="absolute top-0 left-0 h-full bg-[#00FF41] shadow-[0_0_15px_#00FF41]" style="width: {{ $post->intensity }}%"></div>
                        </div>
                        <p class="text-center font-['Oswald'] text-3xl italic">{{ $post->intensity }}%</p>
                    </div>
                    
                    <div class="border-t border-white/10 pt-6">
                        <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mb-2">Analisis Oleh</p>
                        <p class="font-bold text-[#00FF41]">Redaksi Tribun Utama</p>
                        <p class="text-[10px] text-gray-400 mt-1 uppercase leading-tight">{{ $post->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2">
                <div class="bg-[#00FF41]/5 border-l-4 border-[#00FF41] p-6 mb-10 rounded-r-2xl italic text-lg text-gray-300 leading-relaxed font-serif">
                    "{{ $post->analisis_singkat }}"
                </div>

                <div class="prose prose-invert prose-emerald max-w-none 
                            prose-p:text-gray-400 prose-p:leading-loose prose-p:text-lg
                            prose-strong:text-[#00FF41] prose-h3:font-['Oswald'] prose-h3:uppercase
                            prose-h3:italic prose-h3:text-2xl">
                    {!! $post->konten !!}
                </div>

                <div class="mt-16 pt-10 border-t border-white/10 flex justify-between items-center">
                    <div class="flex gap-4">
                        <button class="text-gray-500 hover:text-[#00FF41] transition">Share</button>
                        <button class="text-gray-500 hover:text-[#00FF41] transition">Bookmark</button>
                    </div>
                    <a href="{{ url('/') }}" class="bg-white text-black px-6 py-3 rounded-full font-black text-xs uppercase tracking-widest hover:bg-[#00FF41] transition">
                        Kembali ke Berita
                    </a>
                </div>
            </div>
        </div>
    </article>

    <footer class="bg-black py-10 border-t border-white/5 text-center mt-20">
        <p class="text-[10px] text-gray-600 font-black uppercase tracking-[0.5em]">Tribun Utama Stadium Night Edition v1.0</p>
    </footer>

</body>
</html>