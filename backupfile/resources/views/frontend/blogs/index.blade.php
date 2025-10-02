@extends('layouts.frontend')
@section('title','Blogs')
@section('content')
      <!-- about us section -->
      <section class="about-us">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12 text-center">
                <h3>Unlock Your Academic Potential Get A Level AS Level GCSE IGCSE Past Paper</h3>
                <p>Welcome to Past Papers UK, your gateway to success in GCSE, A Level, and more. Access a treasure trove of past exam papers and resources to ace your exams. Start your journey to excellence today!</p>
                <a href="{{ url('/get-free-resources') }}" class="btn btn-warning">Get Free Resource</a>
              </div>
            </div>
        </div>
      </section>
      <section class="Mathematics-section">
        <div class="container">
          <div class="row">
            @foreach($alldata as $data)
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $data->title }}</h5>
                  <p class="card-text">{{ $data->short_description }}</p>
                  <a href="{{ url('blog-details',$data->id) }}" class="btn btn-primary">Go Details</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>




@endsection