<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget_contact pr-lg-3">
                        <div class="widget-title">
                            <a href="{{ url('/') }}"><img src="{{asset('frontend')}}/assets/img/lopg-removebg-preview.png" alt="img" style="max-width: 60%;"></a>
                        </div>
                        <ul class="details">
                            <li>At PastPaperUK, we believe that success is built on preparation, and preparation begins with the right resources. Our mission is to empower students by providing easy access to past exam papers from the most trusted UK exam boards.</li>
                        </ul>
                        <ul class="social-media-2">
                            <li><strong>Follow Us :</strong> </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Boards</h4>
                        <ul>
                            @foreach ($examboard as $board)
                                <li><a href="#">{{ $board->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Exams Type</h4>
                        <ul>
                            <li><a href="{{ url('pastpaper/subjects/a-levels') }}">A Level</a></li>
                            <li><a href="{{ url('pastpaper/subjects/as-level') }}">AS Level</a></li>
                            <li><a href="{{ url('pastpaper/subjects/gcse') }}">GCSE </a></li>
                            <li><a href="{{ url('pastpaper/subjects/igcse') }}">IGCSE</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pl-lg-5 pr-5 pr-lg-0">
                    <div class="widget widget_contact pr-lg-3">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="details style-icon">

                            <li><i class="fa fa-envelope-o"></i>info@mypastpapers.co.uk</li>
                            <!-- <li><i class="fa fa-map-marker"></i> 2675 Rd, London E143, United Kingdom</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-5 align-self-center">
                    <p>Designed & Developed By PASTPAPERUK</p>
                </div>
                <div class="col-md-7 text-md-right align-self-center mt-lg-0 mt-3">
                    <p>© Copyrights {{ Carbon\Carbon::now()->format('Y') }} PAST PAPER UK All rights reserved. </p>
                </div>
            </div>
        </div>
    </div>
</footer>
