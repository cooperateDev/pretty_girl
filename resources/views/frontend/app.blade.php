@include('frontend.header')

<!-- Start Blog -->
<section id="blog-main" class="blog-main archive grid section">
    <div class="container">
        <div class="row">
            <div class="blog-main"> 
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
                    </div>              
                </div>
                <!--/ End Single Post -->
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