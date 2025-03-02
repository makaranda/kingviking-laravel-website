<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        //$admin = Auth::guard('admin')->user();
        //dd($admin);
        // if (!empty($admin->role) && $admin->role > 0) {
        //     return redirect()->route('admin.dashboard');
        // } else {
            return view('pages.frontend.home.index');
        //}
    }

    public function contactUs()
    {
        return view('pages.frontend.contact.index'); // Make sure this view exists
    }

    public function aboutUs()
    {
        return view('pages.frontend.about.index'); // Make sure this view exists
    }

    public function gallery()
    {
        return view('pages.frontend.gallery.index'); // Make sure this view exists
    }

    public function musicTracks()
    {
        return view('pages.frontend.musictracks.index'); // Make sure this view exists
    }

    public function musicVideos()
    {
        return view('pages.frontend.musicvideos.index'); // Make sure this view exists
    }



}
