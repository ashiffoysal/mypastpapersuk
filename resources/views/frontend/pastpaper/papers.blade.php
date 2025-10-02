@extends('layouts.frontend')
@section('title','Past papers' )
@section('content')

<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">PastPaperUK: Your Pathway to Exam Excellence | Past Paper</h2>
                    <ul class="page-list">
                         <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Past Papers | {{ $resubcategory->category_name }} | {{ $resubcategory->subcategory_name }} | {{$resubcategory->unit_code}}</li>
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
            <h1>{{ $resubcategory->category_name }} | {{ $resubcategory->subcategory_name }} | {{$resubcategory->unit_code}}</h1>
          </div>
            <div class="col-lg-12 mt-4">
              @foreach ($pastpapers as $series => $papers)


    <h3>{{ $series }} </h3>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Question</th>
                <th>Mark Scheme</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($papers as $paper)
                <tr>
                    <td>{{ $paper->title }}</td>
                    <td>
                        <a target="_blank" href="{{ asset('uploads/pastpaper/'.$paper->ques_paper) }}" class="btn btn-success btn-sm">Download</a>
                    </td>
                    <td>
                        <a target="_blank" href="{{ asset('uploads/pastpaper/'.$paper->ans_paper) }}" class="btn btn-warning btn-sm">Download</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach

            </div>

        </div>
    </div>
</div>

@endsection
