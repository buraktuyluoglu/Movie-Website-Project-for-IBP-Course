<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactMessages = ContactMessage::orderBy('status')->paginate(6);
        return view('admin.contact.index',[
            'contactMessages' => $contactMessages
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $message = ContactMessage::find($id);
        return view('admin.contact.show',[
            'message' => $message
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $message = ContactMessage::find($id);
        $message->status = $request->status;
        $message->save();
        return redirect()->back()->with("success","Updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req, $id)
    {
        $item = ContactMessage::find($id);
        $item->delete();
        return redirect()->route('admin.contact.index')->with("success","Message Deleted!");
    }
}
