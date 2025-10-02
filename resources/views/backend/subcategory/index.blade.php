@extends('layouts.backend')
@section('content')

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">All SubCategory</h1>
                </div>
                <div class="col-auto">
                     <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>

                            </div><!--//col-->


                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->
            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">


                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                    <tr>
                                        <th class="cell">#</th>
                                        <th class="cell">Category Name</th>
                                        <th class="cell">Subcategory Name</th>
                                        <th class="cell">Status</th>
                                        <th class="cell">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allSubCategory as $key => $data)
                                    <tr>
                                        <td class="cell">{{ ++$key }}</td>
                                        <td class="cell">{{ $data->category_name }}</td>
                                        <td class="cell">{{ $data->subcategory_name }}</td>
                                        <td class="cell">
                                          @if($data->is_active==1)
                                            <span class="btn btn-success">Active </span>
                                          @else
                                            <span class="btn btn-danger">Deactive </span>
                                          @endif
                                        </td>
                                        <td class="cell">
                                          <a class="btn-sm app-btn-secondary" href="{{ url('admin/subcategory-active/'.$data->id) }}"><i class="fa fa-thumbs-up"></i></a>
                                          <a class="btn-sm app-btn-secondary" href="{{ url('admin/subcategory-deactive/'.$data->id) }}"><i class="fa fa-thumbs-down"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                </table>


                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->


                </div><!--//tab-pane-->


            </div><!--//tab-content-->



        </div><!--//container-fluid-->
    </div><!--//app-content-->



</div><!--//app-wrapper-->

@endsection
