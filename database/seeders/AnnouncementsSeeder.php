<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $announcements = [
            [
                'title' => 'Yeni Korku Filmi Yayında!!',
                'body' => 'Korku temasını işleyen ve izlerken dizlerinizin bağının çözüleceği filmi vizyonda!',
            ],
            [
                'title' => 'Eğlenceli Animasyon Filmi: Kahraman Köpek Maceraları',
                'body' => 'Çocukların ve yetişkinlerin keyifle izleyeceği, macera dolu bir animasyon filmi. Kahraman köpeklerin serüvenlerine hazır olun!',
            ],
            [
                'title' => 'Sürükleyici Dram: Kayıp Yılların İzinde',
                'body' => 'Geçmişin izlerini süren ve derin duygusal deneyim sunan bir dram filmi. Oyunculuk performanslarıyla da dikkat çekiyor.',
            ],
        ];

        foreach ($announcements as $announcement) {
            Announcement::create($announcement);
        }
    }
}
