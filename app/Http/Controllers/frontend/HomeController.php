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
        $main_slider = ['banner' => 'main-banner-poster-001.jpg','heading' => 'King Viking','sub_heading' => 'King Viking is a musician from Canada. He is known for his unique style of music and his ability to connect with his audience.'];

        $music_tracks = [
            ['title' => 'Do You Know the Reason Master', 'audio' => 'do-you-know-the-reason-master_2_147bpm.mp3', 'track_image' => 'king-viking-banner-audio-poster.jpg','order' => 0,'status' => 1],
            ['title' => 'Hold On (to my side of the story)', 'audio' => '7010-fvr-master_3.mp3', 'track_image' => 'hold-on.jpg','order' => 1,'status' => 1],
            ['title' => 'I Am Fallin', 'audio' => 'i-am-fallin-king-viking-26Oct2024.mp3', 'track_image' => 'i-am-fallin.jpg','order' => 2,'status' => 1],
            ['title' => 'Stay With Me V2 MIX', 'audio' => 'stay-with-me-remix.mp3', 'track_image' => 'stay-with-me-remix.jpg','order' => 3,'status' => 1],
            ['title' => 'Stay WIth Me', 'audio' => 'stay-with-me-sample-mix-128.mp3', 'track_image' => 'stay-with-me.jpg','order' => 4,'status' => 1],
            ['title' => 'Sing to you', 'audio' => 'stay-with-me-sample-mix-128.mp3', 'track_image' => 'stay-with-me.jpg','order' => 5,'status' => 1],
            ['title' => 'The Joker', 'audio' => 'stay-with-me-sample-mix-128.mp3', 'track_image' => 'stay-with-me.jpg','order' => 6,'status' => 1],
            ['title' => 'Do you know the reason', 'audio' => 'stay-with-me-sample-mix-128.mp3', 'track_image' => 'stay-with-me.jpg','order' => 7,'status' => 1]
        ];

        $music_beats = [
            ['title' => 'Beat - 01', 'audio' => 'peter-pan-beat7.mp3', 'track_image' => 'music-symbol-icon-latest.png','order' => 1,'status' => 1],
            ['title' => 'Beat - 02', 'audio' => 'sugarcane-beat-8.mp3', 'track_image' => 'music-symbol-icon-latest.png','order' => 2,'status' => 1]
        ];

        $video_tracks = [
            ['title' => 'The  Joker','sub_title' => 'First Albem', 'video' => 'video_album-01.mp4', 'video_image' => '2.png','order' => 1,'status' => 1],
            ['title' => 'The  Joker','sub_title' => 'First Albem', 'video' => 'video_album-01.mp4', 'video_image' => '3.png','order' => 2,'status' => 1],
            ['title' => 'The  Joker','sub_title' => 'First Albem', 'video' => 'video_album-01.mp4', 'video_image' => '4.png','order' => 3,'status' => 1]
        ];

        $about_info = ['intro' => 'In another lifetime, Things could have turned any number of ways. I could have been a bee keeper, an elephant handler (yes, for real), and even climbing a coconut tree for a daily wage - its a real “thing" where I come from. But those possibilities were taken out of the equation very early in life. Luck for me (I think)!','description' => 'I look back and music has been the only constant. Regarless of what I did, the love for song writing was there waiting to color any  lane I picked. It heals, finds solutions to complex problems and brings it home. So I keep writing music. But I cant help think about those other possibilities that could have narrated this life. I am greatful to music. I am always greatful for those that made it possible for me. Doesnt matter where it goes from here, because of you, I consider mine to be a successful story.','image' => 'king-viking-about-poster.jpg'];

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
        $about_info = ['intro' => 'In another lifetime, Things could have turned any number of ways. I could have been a bee keeper, an elephant handler (yes, for real), and even climbing a coconut tree for a daily wage - its a real “thing" where I come from. But those possibilities were taken out of the equation very early in life. Luck for me (I think)!','description' => 'I look back and music has been the only constant. Regarless of what I did, the love for song writing was there waiting to color any  lane I picked. It heals, finds solutions to complex problems and brings it home. So I keep writing music. But I cant help think about those other possibilities that could have narrated this life. I am greatful to music. I am always greatful for those that made it possible for me. Doesnt matter where it goes from here, because of you, I consider mine to be a successful story.','image' => 'king-viking-about-poster.jpg'];

        return view('pages.frontend.about.index',compact('about_info')); // Make sure this view exists
    }

    public function gallery()
    {
        return view('pages.frontend.gallery.index'); // Make sure this view exists
    }

    public function musicTracks()
    {
        
        $music_tracks = [
            ['title' => 'Do You Know the Reason Master', 'audio' => 'do-you-know-the-reason-master_2_147bpm.mp3', 'track_image' => 'king-viking-banner-audio-poster.jpg','order' => 0,'status' => 1],
            ['title' => 'Hold On (to my side of the story)', 'audio' => '7010-fvr-master_3.mp3', 'track_image' => 'hold-on.jpg','order' => 1,'status' => 1],
            ['title' => 'I Am Fallin', 'audio' => 'i-am-fallin-king-viking-26Oct2024.mp3', 'track_image' => 'i-am-fallin.jpg','order' => 2,'status' => 1],
            ['title' => 'Stay With Me V2 MIX', 'audio' => 'stay-with-me-remix.mp3', 'track_image' => 'stay-with-me-remix.jpg','order' => 3,'status' => 1],
            ['title' => 'Stay WIth Me', 'audio' => 'stay-with-me-sample-mix-128.mp3', 'track_image' => 'stay-with-me.jpg','order' => 4,'status' => 1],
            ['title' => 'Sing to you', 'audio' => 'stay-with-me-sample-mix-128.mp3', 'track_image' => 'stay-with-me.jpg','order' => 5,'status' => 1],
            ['title' => 'The Joker', 'audio' => 'stay-with-me-sample-mix-128.mp3', 'track_image' => 'stay-with-me.jpg','order' => 6,'status' => 1],
            ['title' => 'Do you know the reason', 'audio' => 'stay-with-me-sample-mix-128.mp3', 'track_image' => 'stay-with-me.jpg','order' => 7,'status' => 1]
        ];

        $music_beats = [
            ['title' => 'Beat - 01', 'audio' => 'peter-pan-beat7.mp3', 'track_image' => 'music-symbol-icon-latest.png','order' => 1,'status' => 1],
            ['title' => 'Beat - 02', 'audio' => 'sugarcane-beat-8.mp3', 'track_image' => 'music-symbol-icon-latest.png','order' => 2,'status' => 1]
        ];

        return view('pages.frontend.musictracks.index',compact('music_tracks','music_beats')); // Make sure this view exists
    }

    public function musicVideos()
    {
        
        $video_tracks = [
            ['title' => 'The  Joker','sub_title' => 'First Albem', 'video' => 'video_album-01.mp4', 'video_image' => '2.png','order' => 1,'status' => 1],
            ['title' => 'The  Joker','sub_title' => 'First Albem', 'video' => 'video_album-01.mp4', 'video_image' => '3.png','order' => 2,'status' => 1],
            ['title' => 'The  Joker','sub_title' => 'First Albem', 'video' => 'video_album-01.mp4', 'video_image' => '4.png','order' => 3,'status' => 1]
        ];

        return view('pages.frontend.musicvideos.index',compact('video_tracks')); // Make sure this view exists
    }



}
