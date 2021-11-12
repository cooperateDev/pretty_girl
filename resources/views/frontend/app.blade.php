<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="SITE KEYWORDS HERE" />
        <meta name="description" content="">
        <meta name='copyright' content='codeglim'>  
        
        <!-- Title Tag -->
        <title>Tromas &minus; Multipurpose Business HTML5 Theme</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/favicon.png')}}">    
        
        <!-- Web Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
        
        <!-- Tromas CSS -->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/theme-plugins.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">   
        
        <!-- Tromas Color -->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/skin/skin1.css')}}">
        <!--<link rel="stylesheet" href="css/skin/skin2.css">-->
        <!--<link rel="stylesheet" href="css/skin/skin3.css">-->
        <!--<link rel="stylesheet" href="css/skin/skin4.css">-->
        <!--<link rel="stylesheet" href="css/skin/skin5.css">-->
        <!--<link rel="stylesheet" href="css/skin/skin6.css">-->
        <!--<link rel="stylesheet" href="css/skin/skin7.css">-->
        <!--<link rel="stylesheet" href="css/skin/skin8.css">-->
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="#" id="tromas">    
    </head>
    <body id="bg" style="">
        <div id="layout" class="">
        
            @include('frontend.header')
            
        
            <!-- Start Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>Blog Grid</h2>
                            <ul class="bread-list">
                                <li><a href="#">Home<i class="fa fa-angle-right"></i></a></li>
                                <li class="active"><a href="blog-grid-layout.html">Blog Grid</a></li>
                            </ul>
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
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!-- Single Post -->
                                        <div class="single-blog slider">
                                            <div class="blog-post">
                                                <div class="blog-head">
                                                    <div class="blog-slide">
                                                        <div class="single-slide">
                                                            <img src="{{asset('assets/frontend/images/blog/blog1.jpg')}}" alt="#">
                                                        </div>
                                                        <div class="single-slide">
                                                            <img src="{{asset('assets/frontend/images/blog/blog2.jpg')}}" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="blog-info">
                                                    <h2><a href="blog-single.html">10 Tips for Growing Your Business</a></h2>
                                                    <div class="meta">
                                                        <span><i class="fa fa-list"></i><a href="#">Marketing</a></span>
                                                        <span><i class="fa fa-calendar-o"></i>28 Sep, 2017</span>
                                                        <span><i class="fa fa-heart-o"></i><a href="#">35</a></span>
                                                    </div>
                                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>  
                                            </div>              
                                        </div>
                                        <!--/ End Single Post -->
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!-- Single Post -->
                                        <div class="single-blog">
                                            <div class="blog-post">
                                                <div class="blog-head">
                                                    <img src="{{asset('assets/frontend/images/blog/blog2.jpg')}}" alt="#">
                                                    <a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
                                                </div>
                                                <div class="blog-info">
                                                    <h2><a href="blog-single.html">Amazing Multipage & Onepage</a></h2>
                                                    <div class="meta">
                                                        <span><i class="fa fa-list"></i><a href="#">Web</a></span>
                                                        <span><i class="fa fa-calendar-o"></i>15 Aug, 2017</span>
                                                        <span><i class="fa fa-heart-o"></i><a href="#">35</a></span>
                                                    </div>
                                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>              
                                        </div>
                                        <!--/ End Single Post -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!-- Single Post -->
                                        <div class="single-blog iframe">
                                            <div class="blog-post">
                                                <div class="blog-head">
                                                    <img src="{{asset('assets/frontend/images/blog/blog2.jpg')}}" alt="#">
                                                    <a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
                                                </div>
                                                <div class="blog-info">
                                                    <h2><a href="blog-single.html">Top 10 Tips for growing business </a></h2>
                                                    <div class="meta">
                                                        <span><i class="fa fa-user-o"></i>By: <a href="#">Admin</a></span>
                                                        <span><i class="fa fa-comments-o"></i><a href="#">88</a></span>
                                                        <span><i class="fa fa-heart-o"></i><a href="#">65</a></span>
                                                    </div>
                                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>              
                                        </div>
                                        <!--/ End Single Post -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!-- Single Post -->
                                        <div class="single-blog iframe">
                                            <div class="blog-post">
                                                <div class="blog-head">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <img src="{{asset('assets/frontend/images/blog/blog2.jpg')}}" alt="#">
                                                    <a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
                                                    </div>
                                                </div>
                                                <div class="blog-info">
                                                    <h2><a href="blog-single.html">Awesome Vimeo Video song ever</a></h2>
                                                    <div class="meta">
                                                        <span><i class="fa fa-list"></i><a href="#">Video</a></span>
                                                        <span><i class="fa fa-calendar-o"></i>02 Apr, 2017</span>
                                                        <span><i class="fa fa-heart-o"></i><a href="#">35</a></span>
                                                    </div>
                                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>              
                                        </div>
                                        <!--/ End Single Post -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!-- Single Post -->
                                        <div class="single-blog iframe">
                                            <div class="blog-post">
                                                <div class="blog-head">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <img src="{{asset('assets/frontend/images/blog/blog2.jpg')}}" alt="#">
                                                    <a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
                                                    </div>
                                                </div>
                                                <div class="blog-info">
                                                    <h2><a href="blog-single.html">What makes us best in the world?</a></h2>
                                                    <div class="meta">
                                                        <span><i class="fa fa-list"></i><a href="#">Video</a></span>
                                                        <span><i class="fa fa-calendar-o"></i>25 March, 2017</span>
                                                        <span><i class="fa fa-heart-o"></i><a href="#">35</a></span>
                                                    </div>
                                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>              
                                        </div>
                                        <!--/ End Single Post -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!-- Single Post -->
                                        <div class="single-blog">
                                            <div class="blog-post">
                                                <div class="blog-head">
                                                    <img src="{{asset('assets/frontend/images/blog/blog2.jpg')}}" alt="#">
                                                    <a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
                                                </div>
                                                <div class="blog-info">
                                                    <h2><a href="blog-single.html">Tips for success in 2017</a></h2>
                                                    <div class="meta">
                                                        <span><i class="fa fa-list"></i><a href="#">Web</a></span>
                                                        <span><i class="fa fa-calendar-o"></i>02 Feb, 2017</span>
                                                        <span><i class="fa fa-heart-o"></i><a href="#">99</a></span>
                                                    </div>
                                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                                </div>
                                            </div>              
                                        </div>
                                        <!--/ End Single Post -->
                                    </div>
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
            
            <!-- Start Call-To-Action -->
            <section class="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="call-to-main">
                                <h2>we'll one over <span>30 Years of experience you always</span> the best guidance</h2>
                                <a href="contact.html" class="btn"><i class="fa fa-send"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ End Call-To-Action -->
        
            @include('frontend.footer')
            
            <!-- Jquery -->
            <script src="{{asset('assets/frontend/js/jquery.min.js')}}" type="text/javascript"></script>
            <!-- Bootstrap JS -->
            <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <!-- Modernizer JS -->
            <script src="{{asset('assets/frontend/js/modernizr.min.js')}}" type="text/javascript"></script>
            <!-- Tromas JS -->
            <script src="{{asset('assets/frontend/js/tromas.js')}}" type="text/javascript"></script>
            <!-- Tromas Plugins -->
            <script src="{{asset('assets/frontend/js/theme-plugins.js')}}" type="text/javascript"></script>
            <!-- Google Map JS -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>  
            <script src="{{asset('assets/frontend/js/gmap.min.js')}}"  type="text/javascript" ></script>
            <!-- Main JS -->
            <script src="{{asset('assets/frontend/js/main.js')}}" type="text/javascript"></script>
        </div>
    </body>
</html>