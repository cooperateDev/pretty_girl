@include('frontend.header')

<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="login-content">
                    <div class="login-form">
                        <div class="section-title"><h1>Create</h1></div>
                        <form method="POST" action="{{url('/signup')}}">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="10" ></textarea>
                                @error('desc')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="image-input">
                                <label>Image</label>
                                <input type="file" name="file" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.footer')s