<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.movie.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.movie.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {

        $movie = new Movie();
        $movie->name = $req->name;
        $movie->descriptions = $req->description;
        $movie->category_id = $req->category_id;
        $movie->tags = $req->tags;
        $movie->cloud_link = $req->cloud_link;
        $movie->status = $req->status;

        if($req->hasFile('mov_img')){

            $image = $req->file('mov_img');
            $imagePath = $image->store("public/movies");
            $movie->image = $imagePath;
        }
        $movie->save();

        return redirect()->route('admin.movie.index')->with("success","Movie Created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        return view('admin.movie.show',[
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::find($id);
        return view('admin.movie.edit',[
            'movie' => $movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $movie = Movie::find($id);
        $movie->name = $req->name;
        $movie->descriptions = $req->description;
        $movie->category_id = $req->category_id;
        $movie->tags = $req->tags;
        $movie->cloud_link = $req->cloud_link;
        $movie->status = $req->status;

        if($req->hasFile('mov_img')){

            $image = $req->file('mov_img');
            $imagePath = $image->store("public/movies");
            $movie->image = $imagePath;
        }
        $movie->save();

        return redirect()->route('admin.movie.show',[
            'id' => $id
        ])->with("success","Movie Created!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect()->route('admin.movie.index');
    }
}
