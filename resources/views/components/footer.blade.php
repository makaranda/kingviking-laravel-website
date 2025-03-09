
    <!-- contact_rsvp -->
    <div class="contact_rsvp">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Contact For King Viking</h3>
                        <a class="boxed-btn3" href="{{ route('frontend.contact') }}">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                    Who am I
                                </h3>
                            {{-- <div class="subscribe-from">
                                <form action="#">
                                    <input type="text" placeholder="Enter your mail">
                                    <button type="submit" >Subscribe</button>
                                </form>
                            </div> --}}
                            <p class="sub_text">{{ $settings['footer_content'] }}</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Contact Me
                            </h3>
                            <ul>
                                <li><a href="mailto:{{ $settings['email_address'] }}">{{ $settings['email_address'] }}
                                    </a></li>
                                <li><a href="tel:{{ $settings['contact_number'] }}">+{{ $settings['contact_number'] }}
                                    </a></li>
                                <li><a href="#">{{ $settings['address'] }}</a></li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="{{ $settings['social_facebook'] }}">
                                            <i class=" fa fa-facebook "></i>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ $settings['social_twitter'] }}">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $settings['social_youtube'] }}">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $settings['social_instagram'] }}">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-7 col-md-6">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; {{ date('Y') }} All rights reserved | Developed by <a href="https://websl.lk/" target="_blank">WebSL</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="footer_links">
                            <ul>
                                <li><a href="{{ route('home') }}">home</a></li>
                                <li><a href="{{ route('frontend.about') }}">about</a></li>
                                <li><a href="{{ route('frontend.musictracks') }}">tracks</a></li>
                                <li><a href="{{ route('frontend.contact') }}">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

