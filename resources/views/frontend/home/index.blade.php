@extends('layouts.frontend')
@section('title','Welcome Past Paper Uk')
@section('content')

    <!-- banner start -->
    <div class="banner-area banner-area-2 banner-bg-overlay" style="background-image: url('{{asset('frontend')}}/assets/img/banner/2.png');">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8">
                  <div class="banner-inner style-white text-center">
                      <h1 class="title">Empowering Students with Past Exam Papers</h1>
                      <p>Helping You Prepare for GCSE, IGCSE, AS, and A Level Exams</p>

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- banner end -->

  <!-- intro area start -->
  <div class="intro-area intro-area-home-2 pd-bottom-70">
      <div class="container">
          <div class="row no-lg-gutters">
              <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="single-intro-inner bg-red style-white text-center">
                      <div class="thumb">
                          <img src="{{asset('frontend')}}/assets/img/intro/1.png" alt="img">
                      </div>
                      <div class="details">
                          <h5><a href="{{ url('pastpaper') }}">Mathematics</a></h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="single-intro-inner bg-blue style-white text-center">
                      <div class="thumb">
                          <img src="{{asset('frontend')}}/assets/img/intro/2.png" alt="img">
                      </div>
                      <div class="details">
                          <h5><a href="{{ url('pastpaper') }}">English</a></h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="single-intro-inner bg-base style-white text-center">
                      <div class="thumb">
                          <img src="{{asset('frontend')}}/assets/img/intro/3.png" alt="img">
                      </div>
                      <div class="details">
                          <h5><a href="{{ url('pastpaper') }}">Physics</a></h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="single-intro-inner bg-purple style-white text-center">
                      <div class="thumb">
                          <img src="{{asset('frontend')}}/assets/img/intro/4.png" alt="img">
                      </div>
                      <div class="details">
                          <h5><a href="{{ url('pastpaper') }}">Chemistry</a></h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="single-intro-inner bg-yellow style-white text-center">
                      <div class="thumb">
                          <img src="{{asset('frontend')}}/assets/img/intro/5.png" alt="img">
                      </div>
                      <div class="details">
                          <h5><a href="{{ url('pastpaper') }}">Biology</a></h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="single-intro-inner bg-pink style-white text-center">
                      <div class="thumb">
                          <img src="{{asset('frontend')}}/assets/img/intro/6.png" alt="img">
                      </div>
                      <div class="details">
                          <h5><a href="{{ url('pastpaper') }}">Science</a></h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- intro area end -->
  <div class="about-area pd-top-90 pd-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6 mt-lg-5">
                        <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <img src="{{ ASSET('frontend') }}/assets/img/about/4.png" alt="img">
                        </div>
                        <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <img src="{{ ASSET('frontend') }}/assets/img/about/6.png" alt="img">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <img src="{{ ASSET('frontend') }}/assets/img/about/5.png" alt="img">
                        </div>
                        <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <img src="{{ ASSET('frontend') }}/assets/img/about/7.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center mt-4 mt-lg-0">
                <div class="section-title style-bg mb-0">
                    <h5 class="sub-title">Who we are</h5>
                    <h2 class="title">The leading platform for learning courses</h2>
                    <p class="content">Welcome to MyPastPaper, your ultimate online destination for UK past papers and educational resources. We are dedicated to supporting students, teachers, and parents by providing a comprehensive collection of past papers, worksheets, and study materials. Whether you're preparing for GCSE, IGCSE, AS Level, or A Level exams, MyPastPaper is here to simplify your revision journey.

                        At MyPastPaper, we believe that access to quality educational resources can make all the difference. Our mission is to empower students with the tools they need to succeed in their academic pursuits. By offering resources from leading UK examination boards such as AQA, Edexcel, OCR, WJEC, and CIE, we ensure that every learner has the support they need to achieve their goals.

                        Join thousands of students who trust MyPastPaper for their exam preparation. Start exploring today and take the first step towards academic excellence.</p>

                </div>
            </div>
        </div>
    </div>
</div>
  <!--course-area start-->

  <!--course-area end-->

  <!-- call to action area start -->

  <!-- counter end -->
  <div class="intro-area pd-bottom-90 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="bg-red border-radius-8 border-top-0 bt-0 p-lg-5 p-4 mb-4">
                    <div class="section-title style-white mb-0">
                        <h4 class="title">A level</h4>
                        {{-- <p class="content">You can start and finish one of these popular courses in under a day - for free! Check out the list below.. </p> --}}
                        <a class="btn btn-border-white" href="{{ url('pastpaper/subjects/a-levels') }}">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-base border-radius-8 border-top-0 p-lg-5 p-4 mb-4">
                    <div class="section-title style-white mb-0">
                        <h4 class="title">GCSE</h4>
                        {{-- <p class="content">You can start and finish one of these popular courses in under a day - for free! Check out the list below.. </p> --}}
                        <a class="btn btn-border-white-2" href="{{ url('pastpaper/subjects/gcse') }}">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-red border-radius-8 border-top-0 bt-0 p-lg-5 p-4 mb-4" style="background:#982392!important">
                    <div class="section-title style-white mb-0">
                        <h4 class="title">IGCSE</h4>
                        {{-- <p class="content">You can start and finish one of these popular courses in under a day - for free! Check out the list below.. </p> --}}
                        <a class="btn btn-border-white" href="{{ url('pastpaper/subjects/igcse') }}">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-base border-radius-8 border-top-0 p-lg-5 p-4 mb-4" style="background:#308bd9!important">
                    <div class="section-title style-white mb-0">
                        <h4 class="title">AS Level</h4>
                        {{-- <p class="content">You can start and finish one of these popular courses in under a day - for free! Check out the list below.. </p> --}}
                        <a class="btn btn-border-white-2" href="{{ url('pastpaper/subjects/as-level') }}">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="call-to-action-area jarallax bg-cover pd-top-110 pd-bottom-120 text-center" style="background-image: url('{{asset('frontend')}}/assets/img/bg/4.png');">
    <div class="container">
        <div class="section-title mb-0 style-white">
            <h2 class="title">MyPastPapers - Your Gateway to Exam Success</h2>
            <p class="content">Explore a comprehensive collection of past papers, worksheets, and exam preparation resources tailored for students and educators. MyPastPapers is your trusted partner in academic excellence, helping you achieve your educational goals with ease.</p>
            <a class="btn btn-border-white-2" href="{{ url('/pastpaper') }}">Past Paper</a>
        </div>
    </div>
</div>


<div class="counter-area pd-top-120 pd-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-inner after-bg">
                    <div class="media">
                        <div class="media-left">
                            <div class="thumb">
                                <img src="{{asset('frontend')}}/assets/img/icon/1.png" alt="img">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="details">
                                <h2><span class="counter">5</span>K+</h2>
                                <p>Past Papers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-inner after-bg">
                    <div class="media">
                        <div class="media-left">
                            <div class="thumb">
                                <img src="{{asset('frontend')}}/assets/img/icon/2.png" alt="img">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="details">
                                <h2><span class="counter">500</span>+</h2>
                                <p>Subjects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-inner after-bg">
                    <div class="media">
                        <div class="media-left">
                            <div class="thumb">
                                <img src="{{asset('frontend')}}/assets/img/icon/3.png" alt="img">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="details">
                                <h2><span class="counter">35</span>K+</h2>
                                <p>Career Benifitited</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-inner after-bg">
                    <div class="media">
                        <div class="media-left">
                            <div class="thumb">
                                <img src="{{asset('frontend')}}/assets/img/icon/5.png" alt="img">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="details">
                                <h2><span class="counter">355</span>K+</h2>
                                <p>Downloaded</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="client-area pd-bottom-90">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-2 col-sm-6 align-self-center">
                  <div class="client-thumb text-center">
                      <img src="{{asset('frontend')}}/board/AQA.png" alt="img">
                  </div>
              </div>
              <div class="col-md-2 col-sm-6 align-self-center">
                  <div class="client-thumb text-center">
                      <img src="{{asset('frontend')}}/board/OCR.png" alt="img">
                  </div>
              </div>
        
              <div class="col-md-2 col-sm-6 align-self-center">
                  <div class="client-thumb text-center">
                      <img src="{{asset('frontend')}}/board/Edexcel.png" alt="img">
                  </div>
              </div>
              <div class="col-md-2 col-sm-6 align-self-center">
                <div class="client-thumb text-center">
                    <img src="{{asset('frontend')}}/board/Cambridge.png" alt="img">
                </div>
            </div>
          </div>
      </div>
  </div>
  <!--client-area end-->
@endsection
