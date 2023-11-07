<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
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

    public function showAnnouncement(Announcement $announcement)
    {    
        $relatedAnnouncements = Announcement::where('category_id', $announcement->category_id)
        ->where('id', '!=', $announcement->id)
        ->where('is_accepted', true)
        ->latest()
        ->take(4)
        ->get();
       
        $otherAnnouncements = Announcement::where('is_accepted', true)
        ->where('id', '!=', $announcement->id)
        ->latest()
        ->take(4)
        ->get();
        return view('announcements.detail', compact('announcement'));
    }

}

