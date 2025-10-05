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
            @php
                $colors = ['#559823', '#982392', '#308bd9', '#ff6600', '#009688'];
            @endphp

            @foreach($SubCategory as $subCategory)
                @php
                    $randomColor = $colors[array_rand($colors)];
                @endphp
                <div class="col-lg-4">
                    <div class="border-radius-8 border-top-0 bt-0 p-lg-5 p-4 mb-4" style="background:{{ $randomColor }} !important">
                        <div class="section-title style-white mb-0">
                            <h4 class="title">{{ $subCategory->subcategory_name }}  Past Papers</h4>
                            <a class="btn btn-border-white" href="{{ url('pastpaper/board/'.$subCategory->id) }}">Click Here</a>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div>

@endsection
