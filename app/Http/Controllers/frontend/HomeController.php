<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\MainSlider;
use App\Models\MusicTrack;
use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $main_slider = MainSlider::first(); // Assuming there's only one main slider
        $music_tracks = MusicTrack::where('status', 1)->where('type','audio')->orderBy('order', 'asc')->get();
        $music_beats = MusicTrack::where('status', 1)->where('type','beat')->orderBy('order', 'asc')->get();
        $video_tracks = MusicTrack::where('status', 1)->where('type','video')->orderBy('order', 'asc')->get();
        $about_info = Page::where('slug','LIKE', 'about-us')->where('status', 1)->first(); // Assuming a single about section

        //$admin = Auth::guard('admin')->user();
        //dd($admin);
        // if (!empty($admin->role) && $admin->role > 0) {
        //     return redirect()->route('admin.dashboard');
        // } else {
            return view('pages.frontend.home.index',compact('music_tracks','video_tracks','music_beats','about_info','main_slider'));
        //}
    }

    public function contactUs()
    {
        return view('pages.frontend.contact.index'); // Make sure this view exists
    }

    public function aboutUs()
    {
        $about_info = Page::where('slug','Like', 'about-us')->first();

        return view('pages.frontend.about.index',compact('about_info')); // Make sure this view exists
    }

    public function gallery()
    {
        return view('pages.frontend.gallery.index'); // Make sure this view exists
    }

    public function musicTracks()
    {

        $music_tracks = MusicTrack::where('status', 1)->where('type','audio')->orderBy('order', 'asc')->get();
        $music_beats = MusicTrack::where('status', 1)->where('type','beat')->orderBy('order', 'asc')->get();

        return view('pages.frontend.musictracks.index',compact('music_tracks','music_beats')); // Make sure this view exists
    }

    public function musicVideos()
    {

        $video_tracks = MusicTrack::where('status', 1)->where('type','video')->orderBy('order', 'asc')->get();

        return view('pages.frontend.videotracks.index',compact('video_tracks')); // Make sure this view exists
    }

}
