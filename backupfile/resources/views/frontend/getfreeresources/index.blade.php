@extends('layouts.frontend')
@section('content')
<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
  <div class="container">
      <div class="row">
          <div class="col-lg-7">
              <div class="breadcrumb-inner">
                  <h2 class="page-title">PastPaperUK: Your Pathway to Exam Excellence</h2>
                  <ul class="page-list">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li>Get Free Resources</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>

  <div class="blog-area pd-top-120 pd-bottom-120">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="single-blog-inner">
                      <div class="details">
                          <div class="blog-meta">
                              <ul>
                                  <li class="comnt bg-base">2023</li>
                                  <li class="author comnt bg-base">AQA <span>Mathematics</span></li>
                                  <li class="date comnt bg-base">1MEA</li>
                              </ul>
                          </div>
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="widget widget_catagory">
                                    <ul class="catagory-items">
                                        <li><a href="blog.html"><i class="fa fa-angle-right"></i>Paper 1</a></li>
                                    </ul>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                <div class="widget widget_catagory">
                                  <ul class="catagory-items">
                                      <li><a href="blog.html"><i class="fa fa-angle-right"></i>Question Paper</a></li>
                                  </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                              <div class="widget widget_catagory">
                                <ul class="catagory-items">
                                    <li><a href="blog.html"><i class="fa fa-angle-right"></i>Mark Scheme</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                                <div class="widget widget_catagory">
                                  <ul class="catagory-items">
                                      <li><a href="blog.html"><i class="fa fa-angle-right"></i>Paper 1</a></li>
                                  </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                              <div class="widget widget_catagory">
                                <ul class="catagory-items">
                                    <li><a href="blog.html"><i class="fa fa-angle-right"></i>Question Paper</a></li>
                                </ul>
                              </div>
                          </div>
                          <div class="col-md-4">
                            <div class="widget widget_catagory">
                              <ul class="catagory-items">
                                  <li><a href="blog.html"><i class="fa fa-angle-right"></i>Mark Scheme</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                    
                      </div>
                          
                        
                      </div>
                  </div>
                 
                  
              </div>
              
          </div>
      </div>
  </div>
  <!--blog-area end-->

@endsection