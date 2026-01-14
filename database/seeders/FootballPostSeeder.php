<?php

namespace Database\Seeders;

use App\Models\FootballPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FootballPostSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
{
    $posts = [
        [
            'judul' => 'Mbappe Resmi Diperkenalkan: Era Baru Los Galacticos Dimulai',
            'slug' => Str::slug('Mbappe Resmi Diperkenalkan Real Madrid'),
            'klub_terkait' => 'Real Madrid',
            'intensity' => 98,
            'analisis_singkat' => 'Santiago Bernabeu penuh sesak menyambut bintang Prancis. Inilah akhir dari saga transfer terlama dunia.',
            'konten' => '<p>Kylian Mbappe akhirnya mengenakan jersey putih...</p>',
            // Foto: Cahaya Stadion Bernabeu / Kemewahan
            'gambar' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=1000',
        ],
        [
            'judul' => 'Krisis Lini Belakang: MU Incar Bek Muda Portugal',
            'slug' => Str::slug('MU Incar Bek Muda Portugal'),
            'klub_terkait' => 'Manchester United',
            'intensity' => 75,
            'analisis_singkat' => 'Setelah badai cedera, Erik ten Hag mendesak manajemen untuk segera mengamankan tanda tangan bek berbakat.',
            'konten' => '<p>Lini pertahanan Setan Merah menjadi sorotan...</p>',
            // Foto: Rumput Stadion / Vibe Old Trafford
            'gambar' => 'https://images.unsplash.com/photo-1556056504-5c7696c4c28d?q=80&w=1000',
        ],
        [
            'judul' => 'Taktik Genius: Bagaimana Xabi Alonso Mengubah Leverkusen',
            'slug' => Str::slug('Taktik Genius Xabi Alonso Leverkusen'),
            'klub_terkait' => 'Bayer Leverkusen',
            'intensity' => 45,
            'analisis_singkat' => 'Bukan sekadar keberuntungan, formasi 3-4-2-1 milik Alonso adalah kunci dominasi mereka.',
            'konten' => '<p>Analisis mendalam mengenai transisi cepat...</p>',
            // Foto: Papan Taktik / Fokus Pertandingan
            'gambar' => 'https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?q=80&w=1000',
        ],
        [
            'judul' => 'Derby London Memanas: Arsenal vs Chelsea Akhir Pekan Ini',
            'slug' => Str::slug('Derby London Arsenal vs Chelsea'),
            'klub_terkait' => 'Arsenal / Chelsea',
            'intensity' => 88,
            'analisis_singkat' => 'Pertaruhan harga diri dan posisi di papan atas klasemen. Siapa yang akan menguasai London?',
            'konten' => '<p>Kedua tim sedang dalam performa puncak...</p>',
            // Foto: Bola Sepak / Vibe Derby Inggris
            'gambar' => 'https://images.unsplash.com/photo-1504450758481-7338eba7524a?q=80&w=1000',
        ],
    ];

    foreach ($posts as $post) {
        \App\Models\FootballPost::create($post);
    }
}
}