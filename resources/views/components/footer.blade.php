
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
                                        Services
                                </h3>
                            <div class="subscribe-from">
                                <form action="#">
                                    <input type="text" placeholder="Enter your mail">
                                    <button type="submit" >Subscribe</button>
                                </form>
                            </div>
                            <p class="sub_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Contact Me
                            </h3>
                            <ul>
                                <li><a href="#">info@kingviking.com
                                    </a></li>
                                <li><a href="#">+94 77 394 4180
                                    </a></li>
                                <li><a href="#">600/D, Canada</a></li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class=" fa fa-facebook "></i>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
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

