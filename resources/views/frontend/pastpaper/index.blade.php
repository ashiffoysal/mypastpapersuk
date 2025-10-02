@extends('layouts.frontend')
@section('title','Past Paper')
@section('content')
<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">PastPaperUK: Your Pathway to Exam Excellence | Past Paper</h2>
                    <ul class="page-list">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Past Paper</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
<div class="intro-area pd-bottom-90 mt-5">
    <div class="container">
        <div class="row">

          @foreach($allCategory as $key => $category)
            <div class="col-lg-6">
                <div class="bg-red border-radius-8 border-top-0 bt-0 p-lg-5 p-4 mb-4" @if($key==1) style="background:#559823 !important" @endif @if($key==2) style="background:#982392!important" @endif  @if($key==3) style="background:#308bd9!important" @endif >
                    <div class="section-title style-white mb-0">
                        <h4 class="title">{{$category->category_name}}</h4>
                        {{-- <p class="content">You can start and finish one of these popular courses in under a day - for free! Check out the list below.. </p> --}}
                        <a class="btn btn-border-white" href="{{ url('pastpaper/subjects/'.$category->slug) }}">Click Here</a>
                    </div>
                </div>
            </div>
            @endforeach





        </div>
    </div>
</div>

@endsection
