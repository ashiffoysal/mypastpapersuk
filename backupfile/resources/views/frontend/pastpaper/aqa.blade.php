@extends('layouts.frontend')
@section('title','AQA Past Paper')
@section('content')
<style>
    h4 {
    font-size: 15px;
  
}

.page-title-area .page-title {
    font-size: 34px;
}
</style>
<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">PastPaperUK: Your Pathway to Exam Excellence | Past Paper | AQA</h2>
                    <ul class="page-list">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>AQA Past Paper</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
<div class="intro-area pd-bottom-90 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title" style="font-size: 30px">AQA GCSE</h4>
            </div>
            @php
             $allAqaGcseData=DB::table('subjects')->where('board',1)->where('exam_type',1)->where('is_deleted',0)->where('is_active',1)->get()
            @endphp
            @foreach ($allAqaGcseData as $GcseData)
                
           
            <div class="col-lg-3">
                <div class="bg-red border-radius-8 border-top-0 bt-0 p-lg-5 p-4 mb-4">
                    <div class="section-title style-white mb-0">
                        <h4 class="title">{{ $GcseData->name }}</h4>
                        {{-- <p class="content">You can start and finish one of these popular courses in under a day - for free! Check out the list below.. </p> --}}
                        <a class="btn btn-border-white" href="{{ url('pastpaper',$GcseData->slug) }}">Click Here</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title" style="font-size: 30px">AQA A Level</h4>
            </div>
            @php
            $allAqaAlevelData=DB::table('subjects')->where('board',1)->where('exam_type',3)->where('is_deleted',0)->where('is_active',1)->get()
           @endphp
        @foreach($allAqaAlevelData as $aldata)
            <div class="col-lg-3">
                <div class="bg-base border-radius-8 border-top-0 p-lg-5 p-4 mb-4">
                    <div class="section-title style-white mb-0">
                        <h4 class="title">{{ $aldata->name }}</h4>
                        {{-- <p class="content">You can start and finish one of these popular courses in under a day - for free! Check out the list below.. </p> --}}
                        <a class="btn btn-border-white-2" href="{{ url('pastpaper',$aldata->slug) }}">Click Here</a>
                    </div>
                </div>
            </div>
       
           @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title" style="font-size: 30px">AQA AS Level</h4>
            </div>
            @php
            $allAqaAslevelData=DB::table('subjects')->where('board',1)->where('exam_type',4)->where('is_deleted',0)->where('is_active',1)->get()
            @endphp
             @foreach($allAqaAslevelData as $alsdata)
            <div class="col-lg-3">
                <div class="bg-red border-radius-8 border-top-0 bt-0 p-lg-5 p-4 mb-4" style="background:#982392!important">
                    <div class="section-title style-white mb-0">
                        <h4 class="title">{{ $alsdata->name }}</h4>
                        {{-- <p class="content">You can start and finish one of these popular courses in under a day - for free! Check out the list below.. </p> --}}
                        <a class="btn btn-border-white" href="{{ url('pastpaper',$alsdata->slug) }}">Click Here</a>
                    </div>
                </div>
            </div>
            @endforeach
           
            
        </div>
    </div>
</div>

@endsection