<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    
    public function index()
    {
        $announcement_to_check = Announcement::where('is_accepted', null)->first();

        return view('revisor.index',compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message',trans('ui.annuncioAccettato'));
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message',trans('ui.annuncioRifiutato'));
    }

    public function becomeRevisor()
    {
        Mail::to('admin@mercatodo.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message',trans('ui.richiestaRev'));
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('mercatodo:makeUserRevisor',["email"=>$user->email]);
        return redirect('/')->with('message',trans('ui.utentediventstoRev'));
    }
}
