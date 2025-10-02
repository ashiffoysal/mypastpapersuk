@extends('layouts.backend')
@section('content')

<div class="app-wrapper">
	    
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">All File Data</h1>
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
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            <th class="min-w-140px">Title</th>
                                            <th class="min-w-140px">Category</th>
                                            <th class="min-w-120px">Image</th>
                                            <th class="min-w-100px text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($allData as $key => $data)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td>
                                                <a href="#" class="text-dark text-hover-primary d-block mb-1 fs-6">{{ $data->title  }}</a>
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $data->category_id  }}</a>
                                            </td>
                                            <td>
                                               <img src="{{asset('uploads/'.$data->image)}}" height="45px">
                                            </td>
                                          
                                            <td class="text-end">
                                               
                                                <a href="{{url('admin/blog/edit/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="fas fa-pen-square blue"></i>
                                                </a>
                                                <a id="delete" href="{{url('/admin/blog/delete/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa fa-trash validation"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
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