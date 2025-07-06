<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData = [
            [
                'title' => 'Siswa SDN 1 Linggasari Juara Olimpiade Sains',
                'body' => '<p>Siswa kami berhasil meraih juara 1 Olimpiade Sains tingkat kabupaten. Ini merupakan kebanggaan bagi sekolah dan bukti keberhasilan pendidikan karakter dan akademik.</p>',
                'thumbnail' => 'images/news/olimpiade.jpg',
                'category' => 'Prestasi,Pendidikan',
                'tags' => 'sains,kompetisi',
                'author' => 'Admin',
                'published_at' => now(),
            ],
            [
                'title' => 'Kegiatan Donor Darah Bersama PMI',
                'body' => '<p>SDN 1 Linggasari bekerja sama dengan PMI mengadakan kegiatan donor darah sebagai bentuk kepedulian terhadap sesama. Kegiatan ini diikuti oleh guru dan orang tua siswa.</p>',
                'thumbnail' => 'images/news/donor.jpg',
                'category' => 'Kesehatan,Sosial',
                'tags' => 'donor,kesehatan',
                'author' => 'Admin',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Upacara Hari Pendidikan Nasional 2025',
                'body' => '<p>Upacara peringatan Hari Pendidikan Nasional 2025 berlangsung khidmat di SDN 1 Linggasari. Kepala Sekolah menyampaikan pentingnya pendidikan sebagai landasan masa depan.</p>',
                'thumbnail' => 'images/news/hardiknas.jpg',
                'category' => 'Pendidikan,Upacara',
                'tags' => 'hardiknas,upacara',
                'author' => 'Admin',
                'published_at' => now()->subWeek(),
            ],
        ];

        foreach ($newsData as $item) {
            News::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'body' => $item['body'],
                'thumbnail' => $item['thumbnail'],
                'category' => $item['category'],
                'tags' => $item['tags'],
                'author' => $item['author'],
                'published_at' => $item['published_at'],
            ]);
        }
    }
}
