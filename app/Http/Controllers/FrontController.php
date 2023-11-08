<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;

class FrontController extends Controller
{
    
    public function homepage() {
        
        $announcements = Announcement::where('is_accepted', true)->orderBy('updated_at', 'desc')->get()->take(4);
        return view('homepage', compact('announcements'));
    }

    public function categoryShow(Category $category) {
        $categoriesPaginate = $category->announcements()
        ->where('is_accepted', true)
        ->orderBy('updated_at', 'desc')
        ->paginate(4);
        return view('detail', compact('category','categoriesPaginate'));
    }

    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->orderBy('updated_at', 'desc')->paginate(4);
        return view('announcements.index', compact('announcements'));
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
    
        $user = User::where('email', $email)->first();
    
        if ($user) {
            return response()->json(['isRegistered' => true]);
        }
    
        return response()->json(['isRegistered' => false]);
    }

    public function setLanguage($lang)
    {
        session()->put('locale',$lang);
        return redirect()->back();
    }
}
