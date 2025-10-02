@extends('layouts.frontend')
@section('title','Contact Us')
@section('content')

<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
  <div class="container">
      <div class="row">
          <div class="col-lg-7">
              <div class="breadcrumb-inner">
                  <h2 class="page-title">Have a look Our Contact Here</h2>
                  <ul class="page-list">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li>Contact</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- page title end -->

<!-- contact area start -->
<div class="contact-area pd-top-110 pd-bottom-120">
  <div class="container">
      <div class="section-title text-center">
          <h2 class="title">Get in touch</h2>
      </div>
      <div class="row">
          <div class="col-lg-5 col-md-6">
              <div class="contact-page-thumb thumb" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/5.png')"></div>
          </div>
          <div class="col-lg-7 col-md-6 align-self-center">
            <form action="{{ url('contact-us') }}" method="POST">
                
              <div class="mb-3">
                @csrf
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input  type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
            
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input  type="text" name="phone" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
            
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <textarea  name="message" class="form-control" required id="exampleInputPassword1"></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I am not Robot</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
  </div>
</div>

   

@endsection