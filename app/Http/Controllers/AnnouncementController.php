<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::where('is_accepted', true)->orderBy("updated_at", "desc")->paginate(8);
        return view("announcements.index", compact('announcements'));
    }

    public function createAnnouncement()
    {
        return view('announcements.create');
    }
}
