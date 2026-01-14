<x-app-layout>
    <div class="py-12 bg-[#0B0E11] min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#161B22] p-8 border border-white/5 rounded-2xl shadow-2xl">
                <h3 class="font-['Oswald'] italic text-3xl text-white uppercase mb-8">Edit Analisis Berita</h3>
                
                <form action="{{ route('admin.update', $post->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT') <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[#00FF41] text-xs font-black uppercase tracking-widest mb-2">Judul Berita</label>
                            <input type="text" name="judul" value="{{ $post->judul }}" class="w-full bg-black border-white/10 rounded-lg text-white focus:border-[#00FF41] focus:ring-0" required>
                        </div>
                        <div>
                            <label class="block text-[#00FF41] text-xs font-black uppercase tracking-widest mb-2">Klub Terkait</label>
                            <input type="text" name="klub_terkait" value="{{ $post->klub_terkait }}" class="w-full bg-black border-white/10 rounded-lg text-white focus:border-[#00FF41] focus:ring-0" required>
                        </div>
                        <div>
                            <label class="block text-[#00FF41] text-xs font-black uppercase tracking-widest mb-2">Intensity Heat (1-100)</label>
                            <input type="number" name="intensity" value="{{ $post->intensity }}" class="w-full bg-black border-white/10 rounded-lg text-white focus:border-[#00FF41] focus:ring-0" required>
                        </div>
                        <div>
                            <label class="block text-[#00FF41] text-xs font-black uppercase tracking-widest mb-2">Link Gambar URL</label>
                            <input type="url" name="gambar" value="{{ $post->gambar }}" class="w-full bg-black border-white/10 rounded-lg text-white focus:border-[#00FF41] focus:ring-0" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-[#00FF41] text-xs font-black uppercase tracking-widest mb-2">Analisis Singkat (Kutipan)</label>
                        <textarea name="analisis_singkat" rows="2" class="w-full bg-black border-white/10 rounded-lg text-white focus:border-[#00FF41] focus:ring-0" required>{{ $post->analisis_singkat }}</textarea>
                    </div>
                    <div>
                        <label class="block text-[#00FF41] text-xs font-black uppercase tracking-widest mb-2">Isi Berita Lengkap</label>
                        <textarea name="konten" rows="8" class="w-full bg-black border-white/10 rounded-lg text-white focus:border-[#00FF41] focus:ring-0" required>{{ $post->konten }}</textarea>
                    </div>
                    
                    <div class="flex justify-end gap-4 pt-4">
                        <a href="{{ route('dashboard') }}" class="text-gray-500 font-bold uppercase text-xs p-3 hover:text-white transition">Batal</a>
                        <button type="submit" class="bg-[#00FF41] text-black px-8 py-3 rounded font-black text-xs uppercase tracking-widest hover:bg-white transition shadow-[0_0_20px_rgba(0,255,65,0.3)]">
                            UPDATE ANALYSIS
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>