<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Movie;
use App\Models\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function __construct(){
        $this->movies = Movie::all();
}
    public function index() {

        return view("home.index",[
            'movies' => $this->movies
        ]);
    }


    public function contact()
    {
        return view("home.pages.contact");
    }
    public function announcements(){
        return view("home.pages.announcements");
    }


    public function about()
    {
        return view("home.pages.about");
    }
    public function categories() {
        return view("home.category.index");
    }

    public function movie_detail($id){


       return view('home.cart.movie_detail');
    }


    public function category_property($id, $slug){

        $properties = Category::find($id)->properties;
        return view("home.cart.property-list",[
            'properties' => $properties
        ]);
    }

    public function contact_message(Request $req){

       $message = new ContactMessage();
       $message->text = $req->message;
       $message->subject = $req->subject;
       $message->ip = request()->ip();
       $message->email = $req->email;
       $message->phone = $req->phone;
       $message->save();
       return redirect()->back()->with("success","Message has been send gracefully!");
    }

}
