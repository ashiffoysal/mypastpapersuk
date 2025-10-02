@extends('layouts.frontend')
@section('title','Subject List')
@section('content')
<section class="about-us">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 text-center">
                <h3>{{ $type }}-{{ $exam_board }}\Subjects</h3>
            </div>
        </div>
        <div class="row text-center">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Unit Code</th>
                    <th scope="col">View Paper</th>
                  </tr>
                </thead>
                <tbody>
                    @if($allsubject->count() > 0)
                    @foreach($allsubject as $key => $subjects)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $subjects->subject_name }}</td>
                        <td>{{ $subjects->unit_code }}</td>
                        <td>
                            <a class="btn btn-wrning" href="{{ url('subject-exampaper',$subjects->id) }}">View Paper</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>Opps! Sorry Subject Not Found.</p>
                    @endif
                </tbody>
              </table>
            
        </div>
    </div>
  </section>
@endsection