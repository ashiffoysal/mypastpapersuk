@extends('layouts.frontend')
@section('title','Blogs')
@section('content')
      <!-- about us section -->
      <section class="about-us">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12 text-center">
                <h3>Blog Details</h3>
                
              </div>
            </div>
        </div>
      </section>
      <section class="Mathematics-section">
        <div class="container">
          <div class="row">
            
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $data->title }}</h5>
                  <p class="card-text">{{ $data->long_description }}</p>
                  <a href="" class="btn btn-primary">{{ $data->tags }}</a>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </section>




@endsection