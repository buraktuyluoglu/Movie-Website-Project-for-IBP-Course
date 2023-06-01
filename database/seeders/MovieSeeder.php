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
            "cloud_link" => "DaaR778USsg",
            "release_year" => "2013",
            "running_time" => "120 min"
        ]);
        Movie::create([
            'name' => "Benched",
            'descriptions' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'tags' => "benched,movie",
            "category_id"=> 1,
            "image" =>"public/covers/cover2.jpg",
            "cloud_link" => "6M2N1dztNU0",
            "release_year" => "2014",
            "running_time" => "210 min"
            ]);
        Movie::create([
            'name' => "Sakar Şakir",
            'descriptions' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'tags' => "sakar şakir, comedy",
            "category_id" => 2,
            "image" => "public/covers/cover7.jpg",
            "cloud_link" => "abc123",
            "release_year" => "2015",
            "running_time" => "190 min"
        ]);

        Movie::create([
            'name' => "Whitney",
            'descriptions' => "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'tags' => "withney, movie",
            "category_id"=> 2,
            "image" => "public/covers/cover3.jpg",
            "cloud_link" => "stOXnCPxOws",
            "release_year" => "2016",
            "running_time" => "180 min"
        ]);
        Movie::create([
            'name' => "Blindspotting",
            'descriptions' => "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'tags' => "blindpotting, movie, enjoy",
            "category_id"=> 3,
            "image" => "public/covers/cover4.jpg",
            "cloud_link" => "o1lLnQhQcgA",
            "release_year" => "2017",
            "running_time" => "125 min"
        ]);
        Movie::create([
            'name' => "The Shawshank Redemption",
            'descriptions' => "Two imprisoned men bond over several years, finding solace and eventual redemption through acts of common decency.",
            'tags' => "drama, redemption, prison",
            "category_id"=> 3,
            "image" => "public/covers/cover11.jpg",
            "cloud_link" => "6hB3S9bIaco",
            "release_year" => "2018",
            "running_time" => "130 min"
        ]);
        Movie::create([
            'name' => "Inception",
            'descriptions' => "A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.",
            'tags' => "mind-bending, action, thriller",
            "category_id"=> 4,
            "image" => "public/covers/cover8.jpg",
            "cloud_link" => "YoHD9XEInc0",
            "release_year" => "2019",
            "running_time" => "110 min"
        ]);
        Movie::create([
            'name' => "Interstellar",
            'descriptions' => "A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.",
            'tags' => "mind-bending, action, thriller",
            "category_id"=> 4,
            "image" => "public/covers/cover9.jpg",
            "cloud_link" => "YoHD9XEInc0",
            "release_year" => "2020",
            "running_time" => "150 min"
        ]);
        Movie::create([
            'name' => "The Dark Knight",
            'descriptions' => "When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.",
            'tags' => "superhero, crime, action",
            "category_id"=> 4,
            "image" => "public/covers/cover10.jpg",
            "cloud_link" => "EXeTwQWrcwY",
            "release_year" => "2011",
            "running_time" => "140 min"
        ]);
    }
}
