@extends('layouts.frontend')
@section('title','Blog Details')
@section('content')

    <!-- page title start -->
<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Have a look latest blog & news around you</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Blog Single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- single blog page -->
    <div class="main-blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="single-blog-inner mb-0">
                    
                        <div class="details">
                            <div class="blog-meta border-0 mt-0 pt-0">
                                <ul>
                                    
                                    <li class="author">By <span>PastPapar</span></li>
                                    <li class="date">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</li>
                                </ul>
                            </div>
                            <h1 class="mb-0">{{ $data->title }}</h1>
                        </div>
                    </div>
                    <div class="blog-content-inner">
                        <p>{!! $data->description !!}</p>
                      
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-12">
                    <div class="td-sidebar">
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
    <!-- single blog page end -->
@endsection