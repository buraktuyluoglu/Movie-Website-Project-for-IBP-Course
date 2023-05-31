<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => "Aksiyon Filmleri",
            'description' => "Aksiyon filmleri ile heyecanı doruğa çıkartabilirsiniz.",
            'image' => "no_image",
            "slug" => "aksiyon-filmleri",
            "status" => "ACTIVE"
        ]);

        Category::create([
            'title' => "Komedi Filmleri",
            'description' => "Komedi filmleri ile kahkahalarla dolu bir zaman geçirebilirsiniz.",
            'image' => "no_image",
            "slug" => "komedi-filmleri",
            "status" => "ACTIVE"
        ]);

        Category::create([
            'title' => "Korku Filmleri",
            'description' => "Korku filmleri ile gerilimi hissedebilirsiniz.",
            'image' => "no_image",
            "slug" => "korku-filmleri",
            "status" => "ACTIVE"
        ]);

        Category::create([
            'title' => "Romantik Komedi",
            'description' => "Romantik komedi filmleri ile duygusal ve komik anlar yaşayabilirsiniz.",
            'image' => "no_image",
            "slug" => "romantik-komedi",
            "status" => "ACTIVE"
        ]);

    }
}
