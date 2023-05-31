<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::create([
            'subject' => "Özel Film İsteği",
            'email' => "ahmet@gmail.com",
            'phone' => "+90 000 000 00 00",
            'ip' => request()->ip(),
            'text' => "Fast and Furios 9 yayınlandı acaba sitede yayınlayabilir misin",
            'status' => "NEW"
        ]);

        ContactMessage::create([
            'subject' => "Teknik Sorun Bildirimi",
            'email' => "mehmet@gmail.com",
            'phone' => "+90 111 111 11 11",
            'ip' => request()->ip(),
            'text' => "Site üzerinde bazı sayfalar yüklenmiyor, lütfen kontrol ediniz.",
            'status' => "NEW"
        ]);

        ContactMessage::create([
            'subject' => "Hizmet Talebi",
            'email' => "ayse@gmail.com",
            'phone' => "+90 222 222 22 22",
            'ip' => request()->ip(),
            'text' => "Film önerisi istiyorum, romantik komedi türünde en yeni filmlerden birkaçını önerebilir misiniz?",
            'status' => "NEW"
        ]);

        ContactMessage::create([
            'subject' => "Memnuniyet Bildirimi",
            'email' => "ali@gmail.com",
            'phone' => "+90 333 333 33 33",
            'ip' => request()->ip(),
            'text' => "Siteye üye oldum ve çok memnun kaldım, harika bir film seçkisi var. Teşekkürler!",
            'status' => "NEW"
        ]);

        ContactMessage::create([
            'subject' => "Reklam Talebi",
            'email' => "deniz@gmail.com",
            'phone' => "+90 444 444 44 44",
            'ip' => request()->ip(),
            'text' => "Film sitemizde reklam vermek istiyoruz, iletişim için geri dönüş yapabilir misiniz?",
            'status' => "NEW"
        ]);

    }
}
