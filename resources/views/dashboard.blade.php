<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-['Oswald'] italic text-2xl text-[#00FF41] leading-tight uppercase tracking-tighter">
                {{ __('Manajemen Tribun Utama') }}
            </h2>
            <a href="{{ route('admin.create') }}" class="bg-[#00FF41] hover:bg-white text-black px-5 py-2 rounded font-black text-xs uppercase tracking-widest transition shadow-[0_0_15px_rgba(0,255,65,0.4)]">
                + Tulis Berita
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-[#0B0E11] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-[#00FF41]/10 border border-[#00FF41]/50 text-[#00FF41] font-bold rounded-lg flex items-center gap-3">
                    <span class="text-xl">⚡</span> {{ session('success') }}
                </div>
            @endif

            <div class="bg-[#161B22] overflow-hidden shadow-2xl border border-white/5 rounded-2xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-black/40 border-b border-white/10">
                                <th class="px-6 py-5 text-[#00FF41] text-xs font-black uppercase tracking-widest">Analisis Berita</th>
                                <th class="px-6 py-5 text-[#00FF41] text-xs font-black uppercase tracking-widest text-center">Intensity Heat</th>
                                <th class="px-6 py-5 text-[#00FF41] text-xs font-black uppercase tracking-widest text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @forelse($posts as $post)
                                <tr class="hover:bg-white/5 transition-colors">
                                    <td class="px-6 py-5">
                                        <div class="text-white font-bold text-lg leading-tight mb-1">{{ $post->judul }}</div>
                                        <div class="flex items-center gap-2">
                                            <span class="text-[#00FF41] text-[10px] font-black uppercase tracking-widest">{{ $post->klub_terkait }}</span>
                                            <span class="text-gray-600 text-[10px] font-medium">•</span>
                                            <span class="text-gray-500 text-[10px] uppercase font-bold">{{ $post->slug }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <div class="inline-block bg-black border border-[#00FF41]/20 px-3 py-1 rounded text-[#00FF41] font-black italic text-xs">
                                            {{ $post->intensity }}% HEAT
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex justify-end items-center gap-5">
                                            <a href="{{ route('admin.edit', $post->id) }}" class="text-blue-400 hover:text-white font-black text-[11px] uppercase tracking-widest transition">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Hapus analisis berita ini dari sistem?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-white font-black text-[11px] uppercase tracking-widest transition">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-20 text-center">
                                        <p class="text-gray-500 font-['Oswald'] italic text-xl uppercase tracking-widest">Belum ada berita yang diterbitkan di tribun.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-[10px] text-gray-700 font-black uppercase tracking-[0.6em]">Tribun Utama Management Console v1.0</p>
            </div>
        </div>
    </div>
</x-app-layout>