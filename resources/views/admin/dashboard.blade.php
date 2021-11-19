@extends('admin.layouts.app')
@section('page')

    @section('style')
        <link href="{{asset('assets/css/admin/taskmng.css')}}" rel="stylesheet">
    @endsection

    @section('scripts')
        <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
        <script src="{{asset('assets/js/pages/task.js')}}"></script>
    @endsection

    <!-- /# sidebar -->
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content" class="filter">
                    <div class="row">
                        <form method="post" action="{{url('admin/filter')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-2">
                                <span>Filter</span>
                           
                                <select class="form-control year" name="year">
                                    @for($i = date('Y')-5; $i <= date('Y')+5; $i++)
                                        <option @if($i == $year) selected @endif value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                           
                                <select class="form-control month" name="month">
                                    @for($i = 1; $i <= 12; $i++)
                                        <option @if($i == $month) selected @endif value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option @if($status == 0) selected @endif value="0">All</option>
                                    <option @if($status == 1) selected @endif value="1">Processing</option>
                                    <option @if($status == 2) selected @endif value="2">Complete</option>
                                    <option @if($status == 3) selected @endif value="3">Incomplete</option>
                                    <option @if($status == 4) selected @endif value="4">Cancel</option>
                                </select>
                            </div>
                            <h3 class="total_price">Total Price :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h3>
                            <div class="basic-form m-t-20 text-center">
                                <div class="form-group">
                                    <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header row">
                                    <h4>Task List</h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">User</th>
                                                    <th class="text-center">Teammate</th>
                                                    <th class="text-center">Title</th>
                                                    <th class="text-center desc">Desc</th>
                                                    <th class="text-center">Payment Mode</th>
                                                    <th class="text-center">Contract Price</th>
                                                    <th class="text-center">Start Date</th>
                                                    <th class="text-center">End Date</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Paypal</th>
                                                    <th class="text-center">Payoneer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0; ?>
                                                
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

    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
@endsection 