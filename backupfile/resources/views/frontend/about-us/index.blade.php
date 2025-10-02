@extends('layouts.frontend')
@section('title','About Us')
@section('content')
 <!-- page title start -->
 <div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
  <div class="container">
      <div class="row">
          <div class="col-lg-7">
              <div class="breadcrumb-inner">
                  <h2 class="page-title">PastPaperUK: Your Pathway to Exam Excellence</h2>
                  <ul class="page-list">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li>About Us</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- page title end -->

<!-- about area start -->
<div class="about-area pd-top-120 pd-bottom-90">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <div class="row">
                  <div class="col-sm-6 mt-lg-5">
                      <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
                          <img src="{{ asset('frontend') }}/assets/img/about/4.png" alt="img">
                      </div>
                      <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                          <img src="{{ asset('frontend') }}/assets/img/about/6.png" alt="img">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                          <img src="{{ asset('frontend') }}/assets/img/about/5.png" alt="img">
                      </div>
                      <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                          <img src="{{ asset('frontend') }}/assets/img/about/7.png" alt="img">
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 align-self-center mt-4 mt-lg-0">
              <div class="section-title style-bg mb-0">
                  <h5 class="sub-title">Who we are</h5>
                 
                  <h3 class="title">Unlock Your Academic Potential Get A Level AS Level GCSE IGCSE Past Paper</h3>
            <p  class="content">Welcome to PastPaperUK.com, your trusted source for past exam papers from the UK's leading exam boards: AQA, Edexcel, OCR, WJEC, and CIE. We provide a comprehensive collection of past papers for GCSE, IGCSE, AS Level, and A Level exams to help students excel in their studies.
            </p>
                  <div class="single-list-inner mt-4">
                      <ul> 
                          <li><i class="fa fa-check"></i> Extensive Past Paper Collection: Access a wide range of past papers from major exam boards, including AQA, Edexcel, OCR, WJEC, and CIE.</li>
                          <li><i class="fa fa-check"></i>GCSE, IGCSE, AS Level, and A Level Papers: Find past papers for the most critical stages of your academic journey.</li>
                          <li><i class="fa fa-check"></i> Exam Practice & Confidence Building: Improve your understanding of exam formats and enhance your performance through thorough practice.</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- about area end -->

<!-- counter start -->
<div class="counter-area pd-bottom-90">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-6">
              <div class="single-counter-inner after-bg">
                  <div class="media">
                      <div class="media-left">
                          <div class="thumb">
                              <img src="{{ asset('frontend') }}/assets/img/icon/1.png" alt="img">
                          </div>
                      </div>
                      <div class="media-body">
                          <div class="details">
                              <h2><span class="counter">89</span>K+</h2>
                              <p>Online Learners</p>
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
                              <img src="{{ asset('frontend') }}/assets/img/icon/2.png" alt="img">
                          </div>
                      </div>
                      <div class="media-body">
                          <div class="details">
                              <h2><span class="counter">43</span>K+</h2>
                              <p>Earned Certificate</p>
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
                              <img src="{{ asset('frontend') }}/assets/img/icon/3.png" alt="img">
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
                              <img src="{{ asset('frontend') }}/assets/img/icon/5.png" alt="img">
                          </div>
                      </div>
                      <div class="media-body">
                          <div class="details">
                              <h2><span>15</span>K+</h2>
                              <p>Conferenece Arranged</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- counter end -->

<!-- about area start -->
<div class="about-area about-right-bg-half bg-gray pd-top-120 pd-bottom-90">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 bg-gray">
              <div class="section-title">
                  <h2 class="title">Support for Students, Teachers, and Parents</h2>
                  <p class="content">Whether you’re a student preparing for exams, a teacher guiding your class, or a parent looking for resources, we’ve got you covered.</p>
                  {{-- <a class="btn btn-red" href="#">Find A Course</a> --}}
              </div>
          </div>
      </div>
  </div>
</div>
<!-- about area end -->


@endsection