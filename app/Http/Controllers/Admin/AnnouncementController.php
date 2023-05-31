<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::paginate(6);
        return view("admin.announcement.index",[
            'announcements' => $announcements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.announcement.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $announcement = new Announcement();
        $announcement->title = $request->title;
        $announcement->body = $request->body;
        $announcement->save();
        return redirect()->back()->with("succes","Created gracefully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        return view("admin.announcement.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $announcement = Announcement::find($id);
        $announcement->status = $req->status;
        $announcement->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req, $id)
    {
        $item = Announcement::find($id);
        $item->delete();
        return redirect()->back()->with("success","Announcement Deleted!");
    }
}
