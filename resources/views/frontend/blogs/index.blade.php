@extends('layouts.frontend')
@section('title','Blogs')
@section('content')


<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
  <div class="container">
      <div class="row">
          <div class="col-lg-7">
              <div class="breadcrumb-inner">
                  <h1 class="page-title">Unlock Your Academic Potential Get A Level AS Level GCSE IGCSE Past Paper</h1>
                  <ul class="page-list">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li>Blogs</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>


    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                  @foreach($alldata as $data)
                    <div class="single-blog-inner">
                      
                        <div class="details">
                            <div class="blog-meta">
                                <ul>
                                    {{-- <li class="comnt bg-base">Category</li> --}}
                                    <li class="author">By <span>Past Paper</span></li>
                                    <li class="date">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</li>
                                </ul>
                            </div>
                            <h4><a href="{{ url('blog-details',$data->slug) }}">{{ $data->title }}</a></h4>
                            <p></p>
                            <a class="readmore-text" href="{{ url('blog-details',$data->slug) }}">Read More</a>
                        </div>
                    </div>
                   @endforeach
                    <nav class="td-page-navigation mb-5 mb-lg-0">
                        <ul class="pagination">
                            {{ $alldata->links() }}
                        </ul>
                    </nav>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-12">
                    <div class="td-sidebar">
                        <div class="widget widget_search">
                          
                        </div>                  
                        <div class="widget widget-recent-post">                            
                            <h4 class="widget-title">Most View Post</h4>
                            <ul>
                                @foreach ( $mostViewPost as $vPost)
                                    
                                
                                <li>
                                    <div class="media">
                                       
                                        <div class="media-body align-self-center">
                                            <h5 class="title"><a href="{{ url('blog-details',$vPost->slug) }}">{{ $vPost->title }}</a></h5>
                                            <div class="post-info"><i class="fa fa-calendar-times-o"></i> {{ \Carbon\Carbon::parse($vPost->created_at)->format('d M Y') }}
                                            </div>                             
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                           
                            </ul>
                        </div>
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Catagory</h4>                                 
                            <ul class="catagory-items">
                                @foreach ($allCategory as $category)
                                <li><a><i class="fa fa-angle-right"></i>{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_tags">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @foreach ($allTags as $tags)
                                    <a>{{ $tags->name }}</a>
                                @endforeach
                                
                               
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- /.sidebar -->
            </div>
        </div>
    </div>


@endsection