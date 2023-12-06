<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MangaListSeeder extends Seeder
{
    public function run()
    {
        $manga = [
            ['judul' => 'Manga 1', 'image' => 'https://images.novel-fast.club/avatar/288x412/media/manga_covers/top-tier-123-preo.jpg'],
            ['judul' => 'Manga 2', 'image' => 'https://images.novel-fast.club/avatar/288x412/media/manga_covers/stuck-in-the-tower.jpg'],
            ['judul' => 'Manga 3', 'image' => 'https://images.novel-fast.club/avatar/288x412/media/manga_covers/the-reincarnated-assassin-is-a-genius-swordsman.png'],
            ['judul' => 'Manga 4', 'image' => 'https://images.novel-fast.club/avatar/288x412/media/manga_covers/im-not-that-kind-of-talent.jpg'],
            ['judul' => 'Manga 5', 'image' => 'https://images.novel-fast.club/avatar/288x412/media/manga_covers/opi.jpg'],
            ['judul' => 'Manga 6', 'image' => 'https://images.novel-fast.club/avatar/288x412/media/manga_covers/academys-genius-swordsman.jpg'],
        ];

        // Insert data into the database
        DB::table('manga_list')->insert($manga);
    }
}
