@extends('admin.layouts.app')
@section('style')
    <link href="{{asset('assets/css/admin/taskmng.css')}}" rel="stylesheet">
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
                                <div class="card-header">
                                    <h4>Blog List </h4>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive" style="overflow: hidden">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Image</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th style="text-align:center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($blogs as $blog)
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="round-img">
                                                                <img style="width:50px;" src="{{asset('upload/images/blog/'.$blog->img_url)}}" alt="img">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{$blog->title}}
                                                        </td>
                                                        <td>
                                                            {{$blog->desc}}
                                                        </td>
                                                        <td style="text-align:center">
                                                            <span><a href="{{url('admin/blog_info/'.$blog->id)}}"><i class="ti-pencil-alt color-success"></i></a></span>
                                                            <span><a href="{{url('admin/blog_del/'.$blog->id)}}"><i class="ti-trash color-danger"></i> </a></span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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