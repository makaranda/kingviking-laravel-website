@extends('layouts.frontend')

@section('content')


<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider_text text-center ">
                        <h3>King Viking</h3>
                        <p>King Viking is a musician from Canada. He is known for his unique style of music and his ability to connect with his audience.</p>
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
                                                <img src="{{ url('public/assets/frontend/img/music_man/king-viking-banner-audio-poster.jpg') }}" alt="">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Do You Know the Reason Master</h4>
                                                    {{-- <p>10 January, 2025</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/do-you-know-the-reason-master_2_147bpm.mp3') }}">
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
                        <p class="pt-0 mb-0">In another lifetime, Things could have turned any number of ways. I could have been a bee keeper, an elephant handler (yes, for real), and even climbing a coconut tree for a daily wage - its a real “thing" where I come from. But those possibilities were taken out of the equation very early in life. Luck for me (I think)! </p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="{{ url('public/assets/frontend/img/king-viking-about-poster.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <p class="pt-0 mb-0">I look back and music has been the only constant. Regarless of what I did, the love for song writing was there waiting to color any  lane I picked. It heals, finds solutions to complex problems and brings it home. So I keep writing music. But I cant help think about those other possibilities that could have narrated this life. I am greatful to music. I am always greatful for those that made it possible for me. Doesnt matter where it goes from here, because of you, I consider mine to be a successful story.</p>
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
    <div class="music_area music_gallery">
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
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5">
                        <div class="row align-items-center justify-content-center mb-20">
                            <div class="col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="music_field">
                                            <div class="thumb">
                                                <img src="{{ url('public/assets/frontend/img/music_man/hold-on.jpg') }}" alt="Hold On (to my side of the story)" class="img-fluid audio-thumb">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Hold On (to my side of the story)</h4>
                                                    {{-- <p>08 January, 2025</p> --}}
                                                </div>
                                                <audio preload="auto" controls>
                                                    <source src="{{ url('public/assets/frontend/audios/7010-fvr-master_3.mp3') }}">
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
                    </div>
                    <div class="col-xl-5">

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
