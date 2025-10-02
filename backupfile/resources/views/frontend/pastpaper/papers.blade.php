@extends('layouts.frontend')
@section('title','Past papers')
@section('content')

<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">PastPaperUK: Your Pathway to Exam Excellence | Past Paper</h2>
                    <ul class="page-list">
                        {{-- <li><a href="{{ url('/') }}">Home</a></li> --}}
                        <li>Home |Past Paper | {{ ucwords(str_replace('-', ' ', $slug )) }}| {{ $subject->name }} | {{ $subject->unit_code }}</li>
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
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Year/Series</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                        <th scope="col">Question</th>
                        <th scope="col">Mark Scheme</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($alldata as $data)
                        <tr>
                          <th scope="row">{{ $data->series_name }}</th>
                          <td>{{ $data->name }}</td>
                          <td></td>
                          <td><a target="_blank" href="{{ asset('uploads/pastpapers/'.$data->ques_link) }}" class="btn-sm btn-success">Download</a></td>
                          <td><a target="_blank" href="{{ asset('uploads/pastpapers/'.$data->ans_link) }}" class="btn-sm btn-warning">Download</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
       
        </div>
    </div>
</div>

@endsection