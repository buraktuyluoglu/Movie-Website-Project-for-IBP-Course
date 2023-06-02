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
            "category_id"=> 4,
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
            "category_id"=>3,
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
            "category_id"=> 5,
            "image" => "public/covers/cover11.jpg",
            "cloud_link" => "6hB3S9bIaco",
            "release_year" => "2018",
            "running_time" => "130 min"
        ]);
        Movie::create([
            'name' => "Inception",
            'descriptions' => "A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.",
            'tags' => "mind-bending, action, thriller",
            "category_id"=> 1,
            "image" => "public/covers/cover8.jpg",
            "cloud_link" => "YoHD9XEInc0",
            "release_year" => "2019",
            "running_time" => "110 min"
        ]);
        Movie::create([
            'name' => "Interstellar",
            'descriptions' => "A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.",
            'tags' => "mind-bending, action, thriller",
            "category_id"=> 5,
            "image" => "public/covers/cover9.jpg",
            "cloud_link" => "YoHD9XEInc0",
            "release_year" => "2020",
            "running_time" => "150 min"
        ]);
        Movie::create([
            'name' => "The Dark Knight",
            'descriptions' => "When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.",
            'tags' => "superhero, crime, action",
            "category_id"=> 1,
            "image" => "public/covers/cover10.jpg",
            "cloud_link" => "EXeTwQWrcwY",
            "release_year" => "2011",
            "running_time" => "140 min"
        ]);
        Movie::create( [
            'name' => 'The Godfather',
            'descriptions' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
            'tags' => 'crime, drama',
            'category_id' => rand(1, 5),
            'image' => 'public/covers/cover12.jpg',
            'cloud_link' => 'EXeTwQWrcwY',
            'release_year' => '1972',
            'running_time' => '175 min'
        ]);
        Movie::create([
            'name' => 'Pulp Fiction',
            'descriptions' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
            'tags' => 'crime, drama',
            'category_id' => rand(1, 5),
            'image' => 'public/covers/cover13.jpg',
            'cloud_link' => 's7EdQ4FqbhY',
            'release_year' => '1994',
            'running_time' => '154 min'
        ]);

        Movie::create( [
            'name' => 'Fight Club',
            'descriptions' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.',
            'tags' => 'drama',
            'category_id' => rand(1, 5),
            'image' => 'public/covers/cover14.jpg',
            'cloud_link' => 'BdJKm16Co6M',
            'release_year' => '1999',
            'running_time' => '139 min'
        ]);

        Movie::create( [
            'name' => 'The Matrix',
            'descriptions' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
            'tags' => 'action, sci-fi',
            'category_id' => rand(1, 5),
            'image' => 'public/covers/cover15.jpg',
            'cloud_link' => 'm8e-FF8MsqU',
            'release_year' => '1999',
            'running_time' => '136 min'
        ]);

        Movie::create( [
            'name' => 'The Lord of the Rings: The Fellowship of the Ring',
            'descriptions' => 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
            'tags' => 'adventure, fantasy',
            'category_id' => rand(1, 5),
            'image' => 'public/covers/cover16.jpg',
            'cloud_link' => 'V75dMMIW2B4',
            'release_year' => '2001',
            'running_time' => '178 min'
        ]);

        Movie::create([
            'name' => 'Forrest Gump',
            'descriptions' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal, and other historical events unfold through the perspective of an Alabama man with an IQ of 75.',
            'tags' => 'drama, romance',
            'category_id' => rand(1, 5),
            'image' => 'public/covers/cover17.jpg',
            'cloud_link' => 'bLvqoHBptjg',
            'release_year' => '1994',
            'running_time' => '142 min'
        ]);

        Movie::create( [
            'name' => 'The Lion King',
            'descriptions' => 'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.',
            'tags' => 'animation, adventure, drama',
            'category_id' => rand(1, 5),
            'image' => 'public/covers/cover18.jpg',
            'cloud_link' => '4sj1MT05lAA',
            'release_year' => '1994',
            'running_time' => '88 min'
        ]);

        Movie::create([
            'name' => 'The Avengers',
            'descriptions' => 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.',
            'tags' => 'action, adventure, sci-fi',
            'category_id' => rand(1, 5),
            'image' => 'public/covers/cover19.jpg',
            'cloud_link' => 'eOrNdBpGMv8',
            'release_year' => '2012',
            'running_time' => '143 min'
        ]);

    }
}
