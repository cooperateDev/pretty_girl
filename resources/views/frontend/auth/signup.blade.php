@include('frontend.header')

<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="login-content">
                   <!--  <div class="login-logo">
                        <a href="index.html"><span>WIN-WIN</span></a>
                    </div> -->
                    <div class="login-form">
                        <div class="section-title"><h1>Register</h1></div>
                        <form method="POST" action="{{url('/signup')}}" id="form_signup" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="name" class="form-control" placeholder="User Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email"  name="email"  class="form-control" placeholder="Email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password"  name="password" class="form-control" placeholder="Password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-6">
                                    <div class="image-input">
                                        <label>Image</label>
                                        <input type="file" name="file" accept="image/*" id="choose-file">
                                        <label for="choose-file">Choose File</label>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <div class="image-preview" id="img-preview">
                                        Image Preview
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Agree the terms and policy 
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                            
                            <div class="register-link m-t-15 text-center">
                                <p>Already have account? <a href="{{url('/login')}}" style="color: red"> Sign in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.footer')
<script src="{{asset('assets/frontend/js/editBlogPage.js')}}" type="text/javascript"></script>