@extends('layouts.backend')
@section('content')

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">All ReSubCategory</h1>
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
                                        <th class="cell">ReSubcategory Name</th>
                                        <th class="cell">Status</th>
                                        <th class="cell">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allreSubCategory as $key => $data)
                                    <tr>
                                        <td class="cell">{{ ++$key }}</td>
                                        <td>{{ $data->category_name }}</td>
                                        <td>{{ $data->subcategory_name }}</td>
                                        <td>{{ $data->resubcategory_name }}</td>
                                        <td class="cell">
                                          @if($data->is_active==1)
                                              Active
                                          @else
                                              deActive
                                          @endif
                                        </td>
                                        <td class="cell">
                                          <a class="btn-sm app-btn-secondary" href="{{ url('admin/resubcategory-active/'.$data->id) }}">Active</a>
                                          <a class="btn-sm app-btn-secondary" href="{{ url('admin/resubcategory-deactive/'.$data->id) }}">deActive</a>
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
