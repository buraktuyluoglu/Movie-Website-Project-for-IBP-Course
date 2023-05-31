<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = Settings::count();
        if($count<=0){
            Settings::create([
                'company_name' => "Film & Dizi İzle",
                "description" => "Welcome to Film & Dizi İzle, your trusted partner in the world of real estate. We are a leading agency dedicated to helping individuals, families, and businesses find their perfect property solutions.",
                "logo" => "no_image",
                "address" => "California, SA 50030 Street",
                "email" => "+90 549 693 67 53 ",
                "phone" => "filmdiziizle@gmail.com"
            ]);
        }
    }
}
