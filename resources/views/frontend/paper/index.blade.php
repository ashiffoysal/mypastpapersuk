@extends('layouts.frontend')
@section('title','Paper Download')
@section('content')
<section class="about-us">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 text-center">
                <h3>{{ $subject->subject_name }}({{ $subject->unit_code }}) Paper</h3>
            </div>
        </div>
        <div class="row text-center">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Exam Type</th>
                    <th scope="col">Board & Year</th>
                    <th scope="col">Question Paper</th>
                    <th scope="col">Solutions Paper</th>
                  </tr>
                </thead>
                <tbody>
                    @if($alldata->count() > 0)
                    @foreach($alldata as $key => $data)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->exam_type }}</td>
                        <td>{{ $data->board }}-{{ $data->year }}</td>
                        <td>
                            <a class="btn btn-dark" target="_blank" href="{{ asset('/'.$data->ques_link) }}">Download</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" target="_blank" href="{{ asset('/'.$data->ans_link) }}">Download</a>
                        </td>
                        
                    </tr>
                    @endforeach
                    @else
                    <p>Opps! Sorry Paper Not Found.</p>
                    @endif
                </tbody>
              </table>
            
        </div>
    </div>
  </section>
@endsection