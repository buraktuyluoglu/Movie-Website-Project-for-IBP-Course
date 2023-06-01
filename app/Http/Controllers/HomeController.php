<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\Comment;
use App\Models\ContactMessage;
use App\Models\Movie;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function movie_show($id){
        $movie = Movie::find($id);

        return view("home.movie.show",[
            'movie' => $movie
        ]);
    }
    public function about()
    {
        return view("home.pages.about");
    }
    public function faq()
    {
        return view("home.pages.faq");
    }
    public function categories() {
        return view("home.category.index");
    }




    public function contact_message(Request $req){

       $message = new ContactMessage();
       $message->text = $req->message;
       $message->subject = $req->subject;
       $message->ip = request()->ip();
       $message->email = $req->email;
       $message->phone = $req->phone;
       $message->status = "NEW";
       $message->save();
       return redirect()->back()->with("success","Message has been send gracefully!");
    }

}
