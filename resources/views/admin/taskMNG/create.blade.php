@extends('admin.layouts.app')

@section('style')
    <link href="{{asset('assets/css/admin/taskmng.css')}}" rel="stylesheet">    
    <link href="{{asset('assets/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{asset('assets/js/pages/task.js')}}"></script>
    <script src="{{asset('assets/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/js/lib/calendar-2/semantic.ui.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/js/lib/calendar-2/prism.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/js/lib/calendar-2/pignose.init.js')}}"></script>
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
                                    <h4>Task List</h4>
                                    <a href="{{url('admin/taskmng')}}">
                                        <i class="ti-arrow-left color-danger" style="float: right">Back</i>
                                    </a>
                                </div>
                                <form method="POST" @if($status=="create") action="{{url('admin/taskmng_add')}}" @else action="{{url('admin/taskmng_edit/'.$task_info->id)}}" @endif enctype="multipart/form-data">
                                    @csrf

                                    @if($status == 'create')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" value="" class="form-control border-none input-flat bg-ash"  required placeholder="">
                                                    @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Desc</label>
                                                    <textarea name="desc" style="height:135px;"class="form-control border-none input-flat bg-ash"></textarea>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Payment Mode</label>
                                                    <select class="form-control" name="payment_mode">
                                                        <option value="1">Fixed</option>
                                                        <option value="2">Hourly</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Contract Price</label>
                                                    <input type="text" name="contract_price" value="" class="form-control border-none input-flat bg-ash" placeholder="">
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Paypal</label>
                                                    <input type="text" name="paypal" value="" class="form-control border-none input-flat bg-ash" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>User</label>
                                                    <select class="form-control" name="user_id">
                                                        @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Teammate</label>
                                                    <select class="form-control" name="teammate">
                                                        <option value="0">None</option>
                                                        @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="1">Processing</option>
                                                        <option value="2">Complete</option>
                                                        <option value="3">Incomplete</option>
                                                        <option value="4">Cancel</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Start Date</label>
                                                    <input type="text" class="form-control calendar bg-ash" placeholder="Y-m-d" id="text-calendar" name="start_date">
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>End Date</label>
                                                    <input type="text" class="form-control calendar bg-ash" placeholder="Y-m-d" id="text-calendar" name="end_date">
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Payoneer</label>
                                                    <input type="text" name="payoneer" value="" class="form-control border-none input-flat bg-ash" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" value="" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    @elseif($status == 'edit')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" value="{{$task_info->title}}" class="form-control border-none input-flat bg-ash"  required placeholder="">
                                                    @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Desc</label>
                                                    <textarea name="desc" style="height:135px;"class="form-control border-none input-flat bg-ash">{{$task_info->desc}}</textarea>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Payment Mode</label>
                                                    <select class="form-control" name="payment_mode">
                                                        <option value="1" @if($task_info->payment_mode == 1) selected @endif>Fixed</option>
                                                        <option value="2" @if($task_info->payment_mode == 2) selected @endif>Hourly</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Contract Price</label>
                                                    <input type="text" name="contract_price" value="{{$task_info->contract_price}}" class="form-control border-none input-flat bg-ash" placeholder="">
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Paypal</label>
                                                    <input type="text" name="paypal" value="{{$task_info->paypal}}" class="form-control border-none input-flat bg-ash" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>User</label>
                                                    <select class="form-control" name="user_id">
                                                        @foreach($users as $user)
                                                        <option value="{{$user->id}}" @if($task_info->user_id == $user->id) selected @endif>{{$user->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Teammate</label>
                                                    <select class="form-control" name="teammate">
                                                        <option value="0">None</option>
                                                        @foreach($users as $user)
                                                        <option value="{{$user->id}}" @if($task_info->teammate == $user->id) selected @endif>{{$user->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="1" @if($task_info->status == 1) selected @endif>Processing</option>
                                                        <option value="2" @if($task_info->status == 2) selected @endif>Complete</option>
                                                        <option value="3" @if($task_info->status == 3) selected @endif>Incomplete</option>
                                                        <option value="4" @if($task_info->status == 4) selected @endif>Cancel</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Start Date</label>
                                                    <input type="text" class="form-control calendar bg-ash" placeholder="Y-m-d" @if($task_info->start_date)
                                                    value="{{$task_info->start_date}}"
                                                    @endif id="text-calendar" name="start_date">
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>End Date</label>
                                                    <input type="text" class="form-control calendar bg-ash" placeholder="Y-m-d" @if($task_info->end_date)
                                                    value="{{$task_info->end_date}}"
                                                    @endif id="text-calendar" name="end_date">
                                                </div>
                                            </div>
                                            <div class="basic-form m-t-20">
                                                <div class="form-group">
                                                    <label>Payoneer</label>
                                                    <input type="text" name="payoneer" value="{{$task_info->payoneer}}" class="form-control border-none input-flat bg-ash" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
