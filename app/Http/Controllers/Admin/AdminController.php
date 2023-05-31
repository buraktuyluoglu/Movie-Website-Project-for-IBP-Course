<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;

use App\Models\Settings;
use App\Models\User;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $users = User::count();
        $messages = ContactMessage::count();


        return view("admin.dashboard",[
            'users' => $users,
            'messages' => $messages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function settings()
    {
        $settings = Settings::first();
        if(isset($settings))
            return view("admin.settings",[
                'settings' => $settings
            ]);


        $settings = new Settings();
        $settings->company_name = "Film & Dizi İzle";
        $settings->description = "Welcome to Film & Dizi İzle, your trusted partner in the world of real estate. We are a leading agency dedicated to helping individuals, families, and businesses find their perfect property solutions.";
        $settings->logo="no_img";
        $settings->save();
        return view('admin.settings.index',[
            'settings' => null
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
    {
        $settings = Settings::first();
        $settings->company_name = $req->company_name;
        $settings->description = $req->description;
        if ($req->hasFile('logo')) {
            $image = $req->file('logo');
            $imagePath = $image->store("public/logo");
            $settings->image = $imagePath;
        }
        $settings->address = $req->address;
        $settings->email = $req->email;
        $settings->phone = $req->phone;
        $settings->save();

       return redirect()->route("admin.settings.index")->with("success","Updated successfully!");
    }


}
