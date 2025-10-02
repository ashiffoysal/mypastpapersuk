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
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QFW0HTBEQE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QFW0HTBEQE');
</script>
     
     

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
                    <marquee>
                        <p style="color: white">If you create this type of website, or develop Exam Centre or Tuition Centre software, please contact us.</p>
                   </marquee>
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
                        <li class="menu-item-has-children">
                            <a href="#">GCSE</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/pastpaper/gcse-aqa-mathematics') }}">GCSE AQA Mathematics</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-aqa-english-language') }}">GCSE AQA English Language</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-aqa-chemistry') }}">GCSE AQA Chemistry</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-aqa-physics') }}">GCSE AQA Physics</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-aqa-biology') }}">GCSE AQA Biology</a></li>
                              
                                <li><a href="{{ url('/pastpaper/gcse-edexcel-mathematics') }}">GCSE Edexcel Mathematics</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-edexcel-english-language') }}">GCSE Edexcel English Language</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-edexcel-chemistry') }}">GCSE Edexcel Chemistry</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-edexcel-physics') }}">GCSE Edexcel Physics</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-edexcel-biology') }}">GCSE Edexcel Biology</a></li>
                               
                                <li><a href="{{ url('/pastpaper/gcse-ocr-mathematics') }}">GCSE OCR Mathematics</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-ocr-english-language') }}">GCSE OCR English Language</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-ocr-chemistry-a') }}">GCSE OCR Chemistry A</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-ocr-physics-a') }}">GCSE OCR Physics A</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-ocr-biology-a') }}">GCSE OCR Biology A</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-ocr-chemistry-b') }}">GCSE OCR Chemistry B</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-ocr-physics-b') }}">GCSE OCR Physics B</a></li>
                                <li><a href="{{ url('/pastpaper/gcse-ocr-biology-b') }}">GCSE OCR Biology B</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">IGCSE </a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/pastpaper/igcse-edexcel-mathematics') }}">IGCSE Edexcel Mathematics</a></li>
                                <li><a href="{{ url('/pastpaper/igcse-edexcel-english-language') }}">IGCSE Edexcel English Language</a></li>
                                <li><a href="{{ url('/pastpaper/igcse-edexcel-chemistry') }}">IGCSE Edexcel Chemistry</a></li>
                                <li><a href="{{ url('/pastpaper/igcse-edexcel-physics') }}">IGCSE Edexcel Physics</a></li>
                                <li><a href="{{ url('/pastpaper/igcse-edexcel-biology') }}">IGCSE Edexcel Biology</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">A Level </a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/pastpaper/alevel-aqa-mathematics') }}">A Level AQA Mathematics</a></li>
                                <li><a href="{{ url('/pastpaper/alevel-aqa-english-language') }}">A Level AQA English Language</a></li>
                                <li><a href="{{ url('/pastpaper/alevel-aqa-chemistry') }}">A Level AQA Chemistry</a></li>
                                <li><a href="{{ url('/pastpaper/alevel-aqa-physics') }}">A Level AQA Physics</a></li>
                                <li><a href="{{ url('/pastpaper/alevel-aqa-biology') }}">A Level AQA Biology</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">AS Level </a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/pastpaper/aslevel-aqa-mathematics') }}">AS Level AQA Mathematics</a></li>
                                <li><a href="{{ url('/pastpaper/aslevel-aqa-english-language') }}">AS Level AQA English Language</a></li>
                                <li><a href="{{ url('/pastpaper/aslevel-aqa-chemistry') }}">AS Level AQA Chemistry</a></li>
                                <li><a href="{{ url('/pastpaper/aslevel-aqa-physics') }}">AS Level AQA Physics</a></li>
                                <li><a href="{{ url('/pastpaper/aslevel-aqa-biology') }}">AS Level AQA Biology</a></li>
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
</body>
</html>