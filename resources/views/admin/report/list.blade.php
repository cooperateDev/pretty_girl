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
                <div class="col-md-3 filter">
                    <div class="basic-form">
                        <div class="form-group">
                            <form method="post" action="{{url('admin/report/getByDate')}}" enctype="multipart/form-data">
                                    @csrf
                                <label>Select Date</label>
                                <input type="text" class="form-control calendar bg-ash" placeholder="dd/mm/yyyy" id="text-calendar" name="select_date" @if($select_date) value="{{$select_date}}" @else value="{{date('Y-m-d')}}" @endif>
                                <span class="ti-calendar form-control-feedback booking-system-feedback m-t-30"></span>
                                <div class="basic-form m-t-20 text-center">
                                    <div class="form-group">
                                        <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header row">
                                    <h4>Report List</h4>
                                    <a href="{{url('admin/report_create')}}">
                                        <i class="ti-plus color-danger" style="float: right">Report</i>
                                    </a>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">User</th>
                                                    <th class="text-center">Content</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center" style="text-align:center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0; ?>
                                                @foreach($reports as $report)
                                                    <?php $i++; ?>
                                                    <tr>
                                                        <td class="text-center">{{$i}}</td>
                                                        <td class="user-width">
                                                            {{$report->name}}
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <?php echo html_entity_decode($report->content)?>
                                                        </td>
                                                        <td class="date-width">
                                                            {{$report->updated_at}}
                                                        </td>
                                                        <td style="text-align:center" class="action-width">
                                                            @if(substr($report->updated_at, 0, 10) == date('Y-m-d'))
                                                                @if($report->user_id == Auth::user()->id)
                                                            <span><a href="{{url('admin/report_info/'.$report->id)}}"><i class="ti-pencil-alt color-success"></i> </a></span>
                                                            <span><a href="{{url('admin/report_del/'.$report->id)}}"><i class="ti-trash color-danger"></i> </a></span>
                                                                @endif
                                                            @endif
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
