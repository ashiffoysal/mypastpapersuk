<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyPastPaper | Your Gateway to UK Past Papers and Exam Success')</title>
    <meta name="title" content="MyPastPaper - UK Past Papers and Study Resources">
    <meta name="description" content="Discover a wide range of UK past papers and educational resources for GCSE, IGCSE, AS Level, and A Level. Empower your exam preparation with MyPastPaper.">
    <meta name="author" content="MyPastPaper Team">
    <meta name="keywords" content="UK past papers, GCSE resources, IGCSE exam prep, AS Level past papers, A Level study materials, educational resources, AQA past papers, Edexcel exam past papers, OCR past papers,OCR worksheets, WJEC revision, CIE past papers,Exam Centre London,Tuition Centre.">
    <link rel="canonical" href="https://www.mypastpaper.com/">
    <link rel=icon href="{{asset('frontend')}}/assets/img/favicon.png" sizes="20x20" type="image/png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/responsive.css">
    <!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QFW0HTBEQE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QFW0HTBEQE');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9414927533353633"
     crossorigin="anonymous"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9414927533353633"
     crossorigin="anonymous"></script>
</head>
<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->

    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-5 align-self-center text-md-left text-center">
                    <ul>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a href="{{ url('/privacy-policy') }}">Privacy & Policy</a></li>
                        {{-- ppaperuk@gmail.com --}}
                        <li class="d-none d-md-inline-block"><p><i class="fa fa-envelope-o"></i>info@mypastpapers.co.uk</p></li>
                    </ul>
                </div>
                <div class="col-4">

                </div>
                <div class="col-3">
                    <ul class="text-right">
                        <li class="d-lg-inline-block d-none"><p><i class="fa fa-info-circle"></i> <a href="{{ url('/terms-condition') }}">Terms & Condition</a></p></li>
                        <li class="d-lg-inline-block d-none"><p><i class="fa fa-briefcase"></i><a href="{{ url('/faq') }}">FAQ</a></p></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-area">
        <nav class="navbar navbar-area-3 navbar-area navbar-expand-xl">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{asset('frontend')}}/assets/img/lopg-removebg-preview.png" alt="img"></a>
                </div>

                <div class="collapse navbar-collapse" id="edumint_main_menu">
                    <ul class="navbar-nav text-right menu-open">
                        <li class=" current-menu-item">
                            <a href="{{ url('/') }}">Home</a>

                        </li>
                        <li class=" current-menu-item">
                            <a href="{{ url('pastpaper') }}">Past Paper</a>

                        </li>
                          <li class=" current-menu-item">
                            <a href="{{ url('blogs') }}">Blogs</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">GCSE</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('pastpaper/paper/6') }}">GCSE AQA Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/10') }}">GCSE AQA English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/39') }}">GCSE AQA Chemistry</a></li>
                                <li><a href="{{ url('pastpaper/paper/27') }}">GCSE AQA Physics</a></li>
                                <li><a href="{{ url('pastpaper/paper/51') }}">GCSE AQA Biology</a></li>

                                <li><a href="{{ url('pastpaper/paper/7') }}">GCSE Edexcel Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/11') }}">GCSE Edexcel English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/40') }}">GCSE Edexcel Chemistry</a></li>
                                <li><a href="{{ url('pastpaper/paper/26') }}">GCSE Edexcel Physics</a></li>
                                <li><a href="{{ url('pastpaper/paper/52') }}">GCSE Edexcel Biology</a></li>

                                <li><a href="{{ url('pastpaper/paper/8') }}">GCSE OCR Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/12') }}">GCSE OCR English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/41') }}">GCSE OCR Chemistry A</a></li>
                                <li><a href="{{ url('pastpaper/paper/29') }}">GCSE OCR Physics A</a></li>
                                <li><a href="{{ url('pastpaper/paper/53') }}">GCSE OCR Biology A</a></li>
                                <li><a href="{{ url('pastpaper/paper/296') }}">GCSE OCR Chemistry B</a></li>
                                <li><a href="{{ url('pastpaper/paper/279') }}">GCSE OCR Physics B</a></li>
                                <li><a href="{{ url('pastpaper/paper/278') }}">GCSE OCR Biology B</a></li>
                            </ul>
                        </li>
                           {{-- <li class=" current-menu-item">
                            <a href="{{ url('pastpaper') }}">BookLet</a>

                        </li> --}}
                        <li class="menu-item-has-children">
                            <a href="#">IGCSE </a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('pastpaper/paper/72') }}">IGCSE Edexcel Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/76') }}">IGCSE Edexcel English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/77') }}">IGCSE Edexcel Chemistry</a></li>
                                <li><a href="{{ url('pastpaper/paper/78') }}">IGCSE Edexcel Physics</a></li>
                                <li><a href="{{ url('pastpaper/paper/75') }}">IGCSE Edexcel Biology</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">A Level </a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('pastpaper/paper/4') }}">A Level AQA Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/14') }}">A Level AQA English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/44') }}">A Level AQA Chemistry</a></li>
                                <li><a href="{{ url('pastpaper/paper/31') }}">A Level AQA Physics</a></li>
                                <li><a href="{{ url('pastpaper/paper/55') }}">A Level AQA Biology</a></li>

                                <li><a href="{{ url('pastpaper/paper/2') }}">A Level Edexcel Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/14') }}">A Level Edexcel English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/43') }}">A Level Edexcel Chemistry</a></li>
                                <li><a href="{{ url('pastpaper/paper/30') }}">A Level Edexcel Physics</a></li>
                                <li><a href="{{ url('pastpaper/paper/54') }}">A Level Edexcel Biology</a></li>


                                <li><a href="{{ url('pastpaper/paper/3') }}">A Level OCR Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/16') }}">A Level OCR English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/45') }}">A Level OCR Chemistry</a></li>
                                <li><a href="{{ url('pastpaper/paper/32') }}">A Level OCR Physics</a></li>
                                <li><a href="{{ url('pastpaper/paper/56') }}">A Level OCR Biology</a></li>




                                <li><a href="{{ url('pastpaper/paper/1') }}">A Level WJEC Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/17') }}">A Level WJEC English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/46') }}">A Level WJEC Chemistry</a></li>
                                <li><a href="{{ url('pastpaper/paper/33') }}">A Level WJEC Physics</a></li>
                                <li><a href="{{ url('pastpaper/paper/57') }}">A Level WJEC Biology</a></li>

                            </ul>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">AS Level </a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('pastpaper/paper/23') }}">AS Level AQA Mathematics</a></li>
                                <li><a href="{{ url('pastpaper/paper/19') }}">AS Level AQA English Language</a></li>
                                <li><a href="{{ url('pastpaper/paper/49') }}">AS Level AQA Chemistry</a></li>
                                <li><a href="{{ url('pastpaper/paper/35') }}">AS Level AQA Physics</a></li>
                                <li><a href="{{ url('pastpaper/board/39') }}">AS Level AQA Biology</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul class="mb-0 border-left-1 pl-4">
                        <li class="ml-2"><a class="btn btn-base" href="{{ url('/contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    @yield('content')

    <!-- footer area start -->
    @include('frontend.include.footer')
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPPKW6DH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- all plugins here -->
    <script src="{{asset('frontend')}}/assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="{{asset('frontend')}}/assets/js/main.js"></script>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Toastr Alert Script -->
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @elseif(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @elseif(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @elseif(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif
</script>

</body>
</html>
