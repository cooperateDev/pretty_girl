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

        <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
        
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
            <!--Start Header -->
            <header id="header" class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
                            </div>
                            <!--/ End Logo -->
                            <div class="mobile-nav"></div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <!-- Header Widget -->
                            <div class="header-widget">
                                <!-- Single Widget -->
                                <div class="single-widget">
                                    <i class="fa fa-clock-o"></i>
                                    <h4>Opeening Time</h4>
                                    <p>Mon-Sat: 9.00-18.00</p>
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Single Widget -->
                                <div class="single-widget">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email address</h4>
                                    <p><a href="mailto:info@yourwebsite">web.senior.dev@gmail.com</a></p>
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Single Widget -->
                                <div class="single-widget">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone</h4>
                                    <p>+880123-467-789</p>
                                </div>
                                <!--/ End Single Widget -->
                            </div>
                            <!--/ End Header Widget -->
                        </div>
                    </div>
                </div>
                <!-- Header Inner -->
                <div class="header-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="nav-area">
                                    <!-- Main Menu -->
                                    <nav class="mainmenu">
                                        <div class="collapse navbar-collapse">  
                                            <ul class="nav navbar-nav">
                                                <li class="menuBtn menu-home"><a href="{{ url('/') }}">Home</a></li>
                                                <li class="menuBtn menu-blog"><a href="{{ url('/blog') }}">Blogs<!-- <i class="fa fa-angle-down"></i> --></a>
                                                    <!-- <ul class="drop-down">
                                                        <li><a href="blog-grid.html">Blogs Grid</a></li>
                                                        <li><a href="blog-single.html">Blog Single</a></li>
                                                    </ul> -->
                                                </li>
                                                <li class="menuBtn menu-webshop"><a href="{{url('/webshop')}}">Webshop</a></li>
                                                <li class="menuBtn menu-dataportal"><a href="{{url('/dataportal')}}">Data portal<!-- <i class="fa fa-angle-down"></i> --></a>
                                                    <!-- <ul class="drop-down">
                                                        <li><a href="services.html">Our services</a></li>
                                                        <li><a href="service-single.html">service Single</a></li>
                                                    </ul> -->
                                                </li>
                                                <!-- <li><a href="#">Projects<i class="fa fa-angle-down"></i></a>
                                                    <ul class="drop-down">
                                                        <li><a href="projects.html">Projects</a></li>
                                                        <li><a href="project-single.html">Project Single</a></li>
                                                    </ul>
                                                </li> -->
                                                
                                                <!-- <li><a href="contact.html">Contact</a></li>                                              -->
                                            </ul>
                                        </div>
                                    </nav>
                                    <!--/ End Main Menu -->
                                    @if(!Auth::check())
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                            <li>
                                                <a href="{{url('/login')}}">
                                                    <i class="fa fa-sign-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    @else
                                        <ul class="sign">
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                            <li>
                                                <img src="{{asset('assets/frontend/images/author2.jpg')}}" alt="avatar" style="width: 50px; border-radius: 50%; margin-left: 20px"/>
                                            </li>
                                            <li>
                                                <a href="{{url('/logout')}}">
                                                    <i class="fa fa-sign-out"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Header Inner -->
            </header>
            <!--/ End Header -->