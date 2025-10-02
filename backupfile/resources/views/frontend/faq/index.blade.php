@extends('layouts.frontend')
@section('title','FAQ')
@section('content')
<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
  <div class="container">
      <div class="row">
          <div class="col-lg-7">
              <div class="breadcrumb-inner">
                  <h2 class="page-title">Have a look Our FAQ Here</h2>
                  <ul class="page-list">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li>FAQ</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<section class="about-us">
  <div class="container my-5">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Is the service free?
            </button>
          </h5>
        </div>
    
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            Yes, MyPastPapers offers free access to its resources to help students prepare effectively for their exams.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              What is MyPastPapers?
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            MyPastPapers is an online platform providing past papers, worksheets, and educational preparation materials for various exams.
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How can I access past papers?
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            You can access past papers by visiting our website, navigating to your desired subject, and downloading the resources.
          </div>
        </div>
      </div>
    </div>
</div>
  </section>
@endsection