@extends('admin.layouts.app')

@section('style')
    <link href="{{asset('assets/css/admin/taskmng.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2021.2.616/styles/kendo.default-v2.min.css"/>
@endsection

@section('scripts')
    <!-- editor -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2021.2.616/js/kendo.all.min.js"></script>
    <script src="{{asset('assets/js/pages/report.js')}}"></script>
@endsection
@section('page')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content" class="filter">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header row">
                                    <h4>Report Create</h4>
                                    <a href="{{url('admin/report')}}">
                                        <i class="ti-arrow-left color-danger" style="float: right">Back</i>
                                    </a>
                                </div>
                                <form method="POST" @if($status=="create") action="{{url('admin/report_add')}}" @else action="{{url('admin/report_edit/'.$report_info->id)}}" @endif enctype="multipart/form-data">
                                    @csrf

                                    @if($status == 'create')
                                        <div class="basic-form m-t-20">
                                            <div class="form-group">
                                                <label>User</label>
                                                <input type="text" name="title" value="{{Auth::user()->name}}" class="form-control border-none input-flat bg-ash" disabled="true" placeholder="">
                                            </div>
                                        </div>
                                        <textarea id="editor" rows="10" cols="30" name="content"></textarea>
                                    @elseif($status == 'edit')
                                        <div class="basic-form m-t-20">
                                            <div class="form-group">
                                                <label>User</label>
                                                <input type="text" name="title" value="{{Auth::user()->name}}" class="form-control border-none input-flat bg-ash" disabled="true" placeholder="">
                                            </div>
                                        </div>
                                        <textarea id="editor" rows="10" cols="30" name="content">{{html_entity_decode($report_info->content)}}</textarea>
                                    @endif
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
