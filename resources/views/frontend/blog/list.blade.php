@include('frontend.header')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Blog Grid</h2>
                @if(Auth::check())
                <a href="{{url('/blog/create_page')}}">
                @else
                <a href="{{url('/login')}}">
                @endif
                    <ul class="bread-list">
                        <li><h4>Blog Create</h4></li>
                    </ul>
                </a>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumbs -->

<!-- Start Blog -->
<section id="blog-main" class="blog-main archive grid section">
    <div class="container">
        <div class="row">
            <div class="blog-main"> 
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach($blogs as $blog)
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- Single Post -->
                            <div class="single-blog">
                                <div class="blog-post">
                                    <div class="blog-head">
                                        @if($blog->img_url)
                                            <img src="{{asset('upload/images/blog/' . $blog->img_url)}}" alt="blog image" style="width: 400px; height: 200px">
                                            <a class="link" href="{{url('/blog/detail/' . $blog->id)}}"><i class="fa fa-paper-plane"></i></a>
                                        @else
                                            <img src="{{asset('upload/images/blog/default.jpg')}}" alt="blog image" style="width: 400px; height: 200px">
                                            <a class="link" href="{{url('/blog/detail/' . $blog->id)}}"><i class="fa fa-paper-plane"></i></a>
                                        @endif
                                    </div>
                                    <div class="blog-info">
                                        <h2>{{$blog->title}}</h2>
                                        <div class="meta">
                                            <span><i class="fa fa-user-o"></i>{{$blog->name}}</span>
                                            <span><i class="fa fa-calendar-o"></i>{{substr($blog->updated_at, 0, 10)}}</span>
                                            <span><i class="fa fa-heart-o"></i>{{$blog->read_cnt}}</span>
                                        </div>
                                        <p style="min-height: 100px; max-height: 100px;">{{strlen($blog->desc) > 150 ? substr($blog->desc, 0, 150) . "..." : $blog->desc }}</p>
                                    </div>
                                </div>              
                            </div>
                            <!--/ End Single Post -->
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Start Pagination -->
                            <div class="pagination-main">
                                <ul class="pagination">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            <!--/ End Pagination -->
                        </div>
                    </div>          
                </div>
            </div>                      
        </div>
    </div>
</section>
<!--/ End Blog -->  

@include('frontend.footer')