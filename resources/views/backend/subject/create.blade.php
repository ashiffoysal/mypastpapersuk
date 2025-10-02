@extends('layouts.backend')
@section('content')

    
<div class="app-wrapper">
	    
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">			    
            <h1 class="app-page-title">Subject Uploads</h1>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
               
                <div class="col-12">
                    <div class="app-card app-card-settings shadow-sm p-4">
                        
                        <div class="app-card-body">
                            <form class="settings-form" action="{{ url('/admin/subject-create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Subject Name<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                    <circle cx="8" cy="4.5" r="1"/>
                                    </svg></span></label>
                                    <input type="text" class="form-control" name="name" id="setting-input-1" placeholder="Enter Title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Unit Code<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                    <circle cx="8" cy="4.5" r="1"/>
                                    </svg></span></label>
                                    <input type="text" class="form-control" name="unit_code" id="setting-input-1" placeholder="Unit Code" required>
                                </div>
                                <div class="mb-3">
                                    <label for="setting-input-2" class="form-label">Exam Type</label>
                                  
                                    <select class="form-control" name="exam_type" required>
                                        <option disabled selected>Select</option>
                                        <option value="GCSE">GCSE</option>
                                        <option value="IGCSE">IGCSE</option>
                                        <option value="A Level">A Level</option>
                                        <option value="AS Level">AS Level</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="setting-input-2" class="form-label">Exam Board</label>
                                  
                                    <select class="form-control" name="exam_board" required>
                                        <option disabled selected>Select</option>
                                        @foreach ($allboard as $board)
                                        <option value="{{ $board->id }}">{{ $board->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                               
                                <button type="submit" class="btn app-btn-primary" >Save Changes</button>
                            </form>
                        </div><!--//app-card-body-->
                        
                    </div><!--//app-card-->
                </div>
            </div><!--//row-->
       
        </div><!--//container-fluid-->
    </div><!--//app-content-->
    
 
    
</div><!--//app-wrapper-->    

@endsection