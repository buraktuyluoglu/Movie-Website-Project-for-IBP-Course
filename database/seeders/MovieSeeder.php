<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'name' => "I Dream in Another Language",
            'descriptions' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
            'tags' => "dream, another, lanugage",
            "category_id"=> 1,
            "image" => "public/covers/cover.jpg",
            "cloud_link" => "https://www.youtube.com/watch?v=DaaR778USsg"
        ]);
        Movie::create([
            'name' => "Benched",
            'descriptions' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'tags' => "benched,movie",
            "category_id"=> 1,
            "image" =>"public/covers/cover2.jpg",
            "cloud_link" => "https://www.youtube.com/watch?v=6M2N1dztNU0"
            ]);
        Movie::create([
            'name' => "Whitney",
            'descriptions' => "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'tags' => "withney, movie",
            "category_id"=> 2,
            "image" => "public/covers/cover3.jpg",
            "cloud_link" => "https://www.youtube.com/watch?v=stOXnCPxOws"
        ]);
        Movie::create([
            'name' => "Blindspotting",
            'descriptions' => "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'tags' => "blindpotting, movie, enjoy",
            "category_id"=> 3,
            "image" => "public/covers/cover4.jpg",
            "cloud_link" => "https://www.youtube.com/watch?v=o1lLnQhQcgA"
        ]);
    }
}
