@extends('layouts.frontend')

@section('content')


<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider d-flex align-items-center slider_bg_1 overlay2" 
     style="background-image: url('{{ asset('public/assets/frontend/img/banner/' . $main_slider['banner']) }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider_text text-center ">
                        <h3>{{ $main_slider['heading'] }}</h3>
                        <p>{{ $main_slider['sub_heading'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- music_area  -->
<div class="music_area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-10">
                <div class="row align-items-center">
                            <div class="col-xl-9 col-md-9">
                                <div class="music_field">
                                        <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/'.$music_tracks[0]['track_image']) }}" alt="">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>{{ $music_tracks[0]['title'] }}</h4>
                                                    {{-- <p>10 January, 2025</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/'.$music_tracks[0]['audio']) }}">
                                                </audio>
                                            </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <div class="music_btn">
                                        <a href="#" class="boxed-btn p-2">buy track</a>
                                </div>
                            </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- music_area end  -->

    <!-- about_area  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12">
                    <div class="about_info pl-0">
                        <h3>King Viking</h3>
                        <p class="pt-0 mb-0">{{ $about_info['intro'] }}</p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="{{ asset('public/assets/frontend/img/' . $about_info['image']) }}" alt="About King Viking"/>
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <p class="pt-0 mb-0">{{ $about_info['description'] }}</p>
                        <p class="pt-0 mb-0">Thank you for stopping by. I hope we can collaborate and make butiful music someday.</p>
                        <!--<div class="signature">
                            <img src="{{ url('public/assets/frontend/img/about/signature.png') }}" alt="">
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_area  -->

    <!-- youtube_video_area  -->
    <div class="youtube_video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Music Videos</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{ url('public/assets/frontend/img/video/1.png') }}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{ url('public/assets/frontend/img/video/2.png') }}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{ url('public/assets/frontend/img/video/3.png') }}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{ url('public/assets/frontend/img/video/4.png') }}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / youtube_video_area  -->

    <!-- music_area  -->
    <div class="music_area music_gallery music_area_home mt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section_title text-center mb-65">
                        <h3>Latest Tracks</h3>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="section_title text-center mb-65">
                        <h3>BEATS Catalog</h3>
                    </div>
                </div>
            </div>
                <div class="row align-items-start justify-content-center">
                    <div class="col-xl-5">
                        @if($music_tracks && count($music_tracks) > 0)
                        @foreach ($music_tracks as $music_track)
                            @if($music_track['order'] != 0)
                                <div class="row align-items-center justify-content-center mb-20">
                                    <div class="col-xl-12">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-md-4">
                                                <div class="thumb">
                                                    <img src="{{ url('public/assets/frontend/img/music_man/' . $music_track['track_image']) }}" 
                                                         alt="{{ $music_track['title'] }}" 
                                                         class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="row">
                                                    <div class="col-12 col-md-12">
                                                        <div class="music_field">
                                                            <div class="audio_name">
                                                                <div class="name">
                                                                    <h4>{{ $music_track['title'] }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="music_field">
                                                            <div class="audio_name">
                                                                <audio preload="auto" controls>
                                                                    <source src="{{ url('public/assets/frontend/audios/' . $music_track['audio']) }}">
                                                                </audio>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 align-content-center">
                                                        <div class="music_btn">
                                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <div class="thumb">
                                            <img src="{{ url('public/assets/frontend/img/music_man/hold-on.jpg') }}" alt="Hold On (to my side of the story)" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <div class="music_field">
                                                    <div class="audio_name">
                                                        <div class="name">
                                                            <h4>Hold On (to my side of the story)</h4>
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="music_field">
                                                    <div class="audio_name">
                                                        <audio preload="auto" controls>
                                                            <source src="{{ url('public/assets/frontend/audios/7010-fvr-master_3.mp3') }}">
                                                        </audio>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 align-content-center">
                                                <div class="music_btn">
                                                    <a href="#" class="boxed-btn p-2">buy track</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/i-am-fallin.jpg') }}" alt="I Am Fallin" class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>I Am Fallin</h4>
                                                    {{-- <p>25 December, 2024</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/i-am-fallin-king-viking-26Oct2024.mp3') }}">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-3">
                                        <div class="music_btn">
                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/stay-with-me-remix.jpg') }}" alt="Stay With Me V2 MIX" class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Stay With Me V2 MIX</h4>
                                                    {{-- <p>15 December, 2024</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/stay-with-me-remix.mp3') }}">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-3">
                                        <div class="music_btn">
                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/stay-with-me.jpg') }}" alt="Stay With Me"class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Stay WIth Me</h4>
                                                    {{-- <p>02 December, 2024</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/stay-with-me-sample-mix-128.mp3') }}">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-3">
                                        <div class="music_btn">
                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/stay-with-me.jpg') }}" alt="Stay With Me"class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Sing to you</h4>
                                                    {{-- <p>02 December, 2024</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/stay-with-me-sample-mix-128.mp3') }}">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-3">
                                        <div class="music_btn">
                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/stay-with-me.jpg') }}" alt="Stay With Me"class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>The Joker</h4>
                                                    {{-- <p>02 December, 2024</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/stay-with-me-sample-mix-128.mp3') }}">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-3">
                                        <div class="music_btn">
                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/stay-with-me.jpg') }}" alt="Stay With Me"class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Do you know the reason</h4>
                                                    {{-- <p>02 December, 2024</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/stay-with-me-sample-mix-128.mp3') }}">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-3">
                                        <div class="music_btn">
                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/music-symbol-icon-latest.png') }}" alt="Stay With Me"class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Beat - 01</h4>
                                                    {{-- <p>02 December, 2024</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/peter-pan-beat7.mp3') }}">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-3">
                                        <div class="music_btn">
                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/music-symbol-icon-latest.png') }}" alt="Stay With Me"class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Beat - 02</h4>
                                                    {{-- <p>02 December, 2024</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/sugarcane-beat-8.mp3') }}">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-3">
                                        <div class="music_btn">
                                            <a href="#" class="boxed-btn p-2">buy track</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="row align-items-center justify-content-center">
                   <div class="col-xl-10 text-center">
                       <a class="boxed-btn3" href="{{ route('frontend.musictracks') }}">View All Tracks</a>
                   </div>
               </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- gallery -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Image Galleries</h3>
                    </div>
                </div>
            </div>
            <div class="row grid">
                    <div class="col-xl-5 col-lg-5 grid-item cat1 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                    <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-001.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="gallery_hover">
                                    <a  class="popup-image"  href="{{ url('public/assets/frontend/img/gallery/img-gallery-001.jpg') }}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 grid-item cat3 cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-002.jpg') }}" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="{{ url('public/assets/frontend/img/gallery/img-gallery-002.jpg') }}" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-003.jpg') }}" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="{{ url('public/assets/frontend/img/gallery/img-gallery-003.jpg') }}" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-004.jpg') }}" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="{{ url('public/assets/frontend/img/gallery/img-gallery-004.jpg') }}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-005.jpg') }}" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="{{ url('public/assets/frontend/img/gallery/img-gallery-005.jpg') }}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--/ gallery -->



@endsection

@push('css')
    <style>
        img.img-fluid.login-logo{
            width: 120px !important;
        }
        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }
        .music_area {
            position: relative;
            margin-top: -164px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.music_area').css('margin-top', '-164px');
        });
    </script>
@endpush
