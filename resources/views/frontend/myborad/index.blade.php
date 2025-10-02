@extends('layouts.frontend')
@section('title','Exam Board')
@section('content')

<section class="about-us">
    <div class="container">
        <div class="row text-center">
         <div class="col-md-12 text-center mb-2 ">
            <h3>{{ $exam->name }} All Board</h3>
            
          </div>
          @foreach($allboards as $boards)
          <div class="col-md-2 myboard">
            <a href="{{ url('subject-details/').'/'.$exam->id.'/'.$boards->name }}" class="">{{ $boards->name }}</a>
          </div>
          @endforeach
        

        </div>
    </div>
  </section>



@endsection