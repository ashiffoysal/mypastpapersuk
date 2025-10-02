@extends('layouts.backend')
@section('content')

    
<div class="app-wrapper">
	    
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">			    
            <h1 class="app-page-title">Blog Create</h1>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
               
                <div class="col-12">
                    <div class="app-card app-card-settings shadow-sm p-4">
                        
                        <div class="app-card-body">
                            <form action="{{ url('admin/blog-create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <!-- radio ends -->
                    <div class="row">
                      
                        <div class="col-md-10 col-xl-10">
                            <div class="card-body">
                                <div class="tab-content pt-3" data-select2-id="select2-data-89-mk7z">
                                    <div class="tab-pane active" id="kt_builder_main" data-select2-id="select2-data-kt_builder_main">
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Blog Title:<span class="required"></span></label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <input class="form-control form-control-solid" type="text" name="title" placeholder="Blog Title" vlaue="{{old('product_sku')}}">
                                                </div>
                                                @error('title')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Category:<span class="required"></span></label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                
                                                    <select name="category" id="category_id" class="form-control form-control-solid">
                                                        <option disabled selected>--select--</option>
                                                        @foreach($allCategory as $categoty)
                                                        <option value="{{$categoty->id}}">{{ $categoty->name }}</option>
                                                        @endforeach         
                                                    </select>
                                                     
                                                </div>
                                                @error('category')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Tags:<span class="required"></span></label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <input name="tags" id="tags" data-role="tagsinput" class="form-control form-control-solid tags" type="text" placeholder="Tag">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Description:<span class="required"></span></label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <textarea id="myeditor" st class="form-control form-control-solid" name="description" placeholder="Product Description" ></textarea>
                                                </div>
                                            </div>
                                            @error('description')
                                            <div style="color:red;margin-left:150px">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="row mb-10">
                                           
                                            <label class="col-lg-3 col-form-label text-lg-end">Image:<span class="required"></span></label>
                                          
                                            <div class="col-lg-9 col-xl-7">
                                               <input type="file" name="image">
                                            </div>
                                            
                                            @error('image')
                                                <div style="color:red ;margin-left: 15px">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer py-6">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <span class="indicator-label">Submit</span>
                                            
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-xl-5">
                            <div class="card-body" data-select2-id="select2-data-90-elj6">
                                <!-- image -->
                                <div class="tab-content pt-3" data-select2-id="select2-data-89-mk7z" id="image_upload_sec">
                                    <div class="tab-pane active" id="kt_builder_main" data-select2-id="select2-data-kt_builder_main">
                                 
                                       
                                    </div>
                                </div>
                                  <!-- image end-->
                            </div>
                        </div>
                        <div class="col-md-7 col-xl-">

                        </div>
                    </div>
                </form>
                        </div><!--//app-card-body-->
                        
                    </div><!--//app-card-->
                </div>
            </div><!--//row-->
       
        </div><!--//container-fluid-->
    </div><!--//app-content-->
    
 
    
</div><!--//app-wrapper-->    

@endsection