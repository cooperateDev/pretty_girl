@include('frontend.header')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h2>Blog Single</h2>
				<a href="{{url('/blog/edit')}}">
                    <ul class="bread-list">
                        <li><h4>Blog Edit</h4></li>
                    </ul>
                </a>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumbs -->

<!-- Start Blog -->
<section id="blog-main" class="blog-main archive single section">
	<div class="container">
		<div class="row">
			<div class="blog-main">	
				<div class="col-md-4 col-sm-12 col-xs-12 sticky-area">
					<!-- Blog Sidebar -->
					<aside class="blog-sidebar">
						<!-- Post Tab -->
						<div class="single-sidebar post-tab">
							<!-- Post Menu -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#latest" role="tab" data-toggle="tab">Latest Posts</a></li>
								<li role="presentation"><a href="#popular" role="tab"  data-toggle="tab">Popular Posts</a></li>
							</ul>
							<!--/ End Post Menu -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="latest">
									<!-- Single Post -->
									<div class="single-post">
										<div class="post-img">
											<img src="{{ asset('assets/frontend/images/blog/blog1.jpg')}}" alt=""/>
										</div>
										<div class="post-info">
											<p>September 30, 2017</p>
											<h4><a href="#">Best Marketing ways of 2017</a></h4>
										</div>
									</div>
									<!--/ End Single Post -->
									<!-- Single Post -->
									<div class="single-post">
										<div class="post-img">
											<img src="{{ asset('assets/frontend/images/blog/blog2.jpg')}}" alt=""/>
										</div>
										<div class="post-info">
											<p>July 15, 2017</p>
											<h4><a href="#')}}">How to develop your own website</a></h4>
										</div>
									</div>
									<!--/ End Single Post -->
									<!-- Single Post -->
									<div class="single-post">
										<div class="post-img">
											<img src="{{ asset('assets/frontend/images/blog/blog3.jpg')}}" alt=""/>
										</div>
										<div class="post-info">
											<p>May 25, 2017</p>
											<h4><a href="#')}}">Top 10 Tips for growing business </a></h4>
										</div>
									</div>
									<!--/ End Single Post -->
									<!-- Single Post -->
									<div class="single-post">
										<div class="post-img">
											<img src="{{ asset('assets/frontend/images/blog/blog1.jpg')}}" alt=""/>
										</div>
										<div class="post-info">
											<p>March 08, 2017</p>
											<h4><a href="#')}}">How to create a Flat website</a></h4>
										</div>
									</div>
									<!--/ End Single Post -->
								</div>
								<div role="tabpanel" class="tab-pane fade" id="popular">
									<!-- Single Post -->
									<div class="single-post">
										<div class="post-img">
											<img src="{{ asset('assets/frontend/images/blog/blog1.jpg')}}" alt=""/>
										</div>
										<div class="post-info">
											<p>July 20, 2017</p>
											<h4><a href="#')}}">Best Marketing ways of 2017</a></h4>
										</div>
									</div>
									<!--/ End Single Post -->
									<!-- Single Post -->
									<div class="single-post">
										<div class="post-img">
											<img src="{{ asset('assets/frontend/images/blog/blog2.jpg')}}" alt=""/>
										</div>
										<div class="post-info">
											<p>April 15, 2017</p>
											<h4><a href="#')}}">How to develop your own website</a></h4>
										</div>
									</div>
									<!--/ End Single Post -->
									<!-- Single Post -->
									<div class="single-post">
										<div class="post-img">
											<img src="{{ asset('assets/frontend/images/blog/blog3.jpg')}}" alt=""/>
										</div>
										<div class="post-info">
											<p>March 25, 2017</p>
											<h4><a href="#">Top 10 Tips for growing business </a></h4>
										</div>
									</div>
									<!--/ End Single Post -->
									<!-- Single Post -->
									<div class="single-post">
										<div class="post-img">
											<img src="{{ asset('assets/frontend/images/blog/blog1.jpg')}}" alt=""/>
										</div>
										<div class="post-info">
											<p>March 08, 2017</p>
											<h4><a href="#">How to create a Flat website</a></h4>
										</div>
									</div>
									<!--/ End Single Post -->
								</div>
							</div>
						</div>
						<!--/ End Post Tab -->
						
						<!-- Newslatter Subscribe -->
						<div class="single-sidebar subscribe">
							<h2><span>Newslatter Subscribe</span></h2>
							<div class="single-widget subscribe">
								<p>Signup and get new blog post every week to your email. beatae vitae dicta sunt explicabo. consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel.</p>
								<form>
									<input type="email" placeholder="Email Address">
									<button type="submit">Subscribe!</button>
								</form>	
							</div>
						</div>
						<!--/ End Newslatter Subscribe  -->
						
						<!-- Blog Category -->
						<div class="single-sidebar category">
							<h2><span>Categorys</span></h2>
							<ul>
								<li><a href="#">Business Developments<span>33</span></a></li>			
								<li><a href="#">IT Consulting<span>23</span></a></li>			
								<li><a href="#">Marketing</a><span>15</span></li>			
								<li><a href="#">Web Resource</a><span>40</span></li>			
								<li><a href="#">Finance Solutions</a><span>93</span></li>			
								<li><a href="#">Our Gallery</a><span>10</span></li>			
							</ul>
						</div>
						<!--/ End Blog Category -->
						
						<!-- Blog Tags -->
						<div class="single-sidebar tags">
							<h2><span>Tag Cloud</span></h2>
							<ul>
								<li><a href="#">HTML5</a></li>			
								<li class="medium"><a href="#">CSS3</a></li>
								<li><a href="#">Corporate</a></li>											
								<li class="big"><a href="#">Creative</a></li>			
								<li class="big"><a href="#">Bootstrap</a></li>			
								<li><a href="#">Responsive</a></li>	
								<li class="medium"><a href="#">amazing</a></li>	
								<li class="medium"><a href="#">Plugins</a></li>	
								<li><a href="#">website template</a></li>		
							</ul>
						</div>
						<!--/ End Blog Tags -->
					</aside>
					<!--/ End Blog Sidebar -->
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<!-- Single Post -->
							<div class="single-blog">
								<div class="blog-post">
									<div class="blog-head">
										<img src="{{ asset('upload/images/blog/' . $single_blog->img_url)}}" alt="#">
									</div>
									<div class="blog-info">
										<h2><a href="#">{{$single_blog->title}}</a></h2>
										<div class="meta">
											<span><i class="fa fa-user-o"></i>By: <a href="#">Tromas</a></span>
											<span><i class="fa fa-comments-o"></i><a href="#">10k</a></span>
											<span><i class="fa fa-heart-o"></i><a href="#">32k</a></span>
										</div>
										<blockquote>{{$single_blog->desc}}</blockquote>
										<div class="blog-bottom">
											<ul class="share">
												<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
												<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i>Plus</a></li>
											</ul>
											<!-- Next Prev -->
											<ul class="prev-next">
												<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
												<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
											</ul>
											<!--/ End Next Prev -->
										</div>
									</div>
								</div>				
							</div>
							<!--/ End Single Post -->
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="blog-comments">
								<h2>Comments (23)</h2>
								<div class="comments-body">
									<!-- Single Comments -->
									<div class="single-comments">
										<div class="main">
											<div class="head">
												<img src="{{ asset('assets/frontend/images/author.jpg')}}" alt="#"/>
											</div>
											<div class="body">
												<h4>John Shakil<span class="meta">June 05, 2017</span></h4>
												<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas <a href="#"><i class="fa fa-reply"></i>replay</a></p>
											</div>
										</div>
										<div class="comment-list">
											<div class="head">
												<img src="{{ asset('assets/frontend/images/author2.jpg')}}" alt="#"/>
											</div>
											<div class="body">
												<h4>Smith Ron<span class="meta">Sep 20, 2017</span></h4>
												<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas <a href="#"><i class="fa fa-reply"></i>replay</a></p>
											</div>
										</div>
									</div>
									<!--/ End Single Comments -->
									
									<!-- Single Comments -->
									<div class="single-comments">
										<div class="main">
											<div class="head">
												<img src="{{ asset('assets/frontend/images/author3.jpg')}}" alt="#"/>
											</div>
											<div class="body">
												<h4>Frase Rimu<span class="meta">June 05, 2017</span></h4>
												<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas <a href="#"><i class="fa fa-reply"></i>replay</a></p>
											</div>
										</div>
									</div>		
									<!--/ End Single Comments -->											
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="comments-form">
								<h2>LEAVE A COMMENT</h2>
								<!-- Contact Form -->
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<i class="fa fa-user"></i>
												<input type="text" name="name" placeholder="Full Name" required="required">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<i class="fa fa-envelope"></i>
												<input type="email" name="email" placeholder="Your Email" required="required">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<i class="fa fa-pencil"></i>
												<textarea name="message" rows="7" placeholder="Type Your Message Here" ></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group button">	
												<button type="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Contact Form -->
							</div>
						</div>
					</div>	
				</div>
			</div>						
		</div>
	</div>
</section>
<!--/ End Blog -->	

@include('frontend.footer')