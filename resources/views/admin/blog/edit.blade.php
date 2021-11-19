@extends('admin.layouts.app')
@section('style')
    <link href="{{asset('assets/css/admin/blog.css')}}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{asset('assets/js/pages/member.js')}}"></script>
@endsection
@section('page')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content" class="filter">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header pr">
                                    <h4>Update Blog</h4>
                                    <a href="{{url('/admin/blog')}}"><span class="back-btn"><i class="ti-arrow-left"> </i> Back</span></a>
                                </div>
                                <form method="POST" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{$blog->title}}"  class="form-control border-none input-flat bg-ash" placeholder="">
                                             @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea type="text" name="desc" class="form-control border-none input-flat bg-ash" placeholder="Description" rows="9">{{$blog->desc}}</textarea>
                                             @error('desc')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="file" accept="image/*">
                                        </div>
                                        <img src="{{asset('upload/images/blog/' . $blog->img_url)}}" alt="img" style="width: 300px" />
                                    </div>
                                    <div class="basic-form m-t-20 text-center">
                                        <div class="form-group">
                                            <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>
@endsection 