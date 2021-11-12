<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;
use App\Models\User;
use DB;

class ReportController extends Controller
{
    protected $redirectTo = 'admin/';

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $reports = Report::select('reports.*', 'users.name')
                ->leftJoin('users', 'reports.user_id', '=', 'users.id')
                ->where(DB::raw("substring(reports.updated_at, 1, 10)"), date('Y-m-d'));

        if(Auth::user()->role != 2)
            $reports = $reports->where('reports.user_id', Auth::user()->id);

        $reports = $reports->get();

        return view('admin.report.list',[
            'reports' => $reports,
            'select_date' => false
        ]);
    }

    public function report_create(Request $request)
    {
        return view('admin.report.create', [
            'status' => 'create'
        ]);
    }

    public function report_add(Request $request)
    {

        $content = $request->content;
        
        // $messages = [
        //     'required' => 'The :attribute field is required.',
        // ];

        // $validator = Validator::make($request->all(), [
        //     'content' => 'required',
        // ],$messages);

        // if ($validator->fails()) {
        //     return redirect('admin/report')
        //             ->withErrors($validator)
        //             ->withInput();
        // }

        $reported = Report::where('user_id', Auth::user()->id)
                        ->where(DB::raw("substring(reports.updated_at, 0, 10)"), date('Y-m-d'))
                        ->get();

        if (count($reported) > 0)
            return redirect('admin/report_create');

        Report::create([
            'content' => $content,
            'user_id' => Auth::user()->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
        return redirect('admin/report');
    }

    public function report_del(Request $request, $id)
    {
        Report::where('id', '=', $id)->delete();

        return redirect('admin/report');
    }

    public function report_info(Request $request, $id)
    {
        
        $report_info = Report::where('id', '=', $id)->first();
        $users = User::get();
        
        return view('admin.report.create',[
            'status'            => 'edit',
            'report_info'       => $report_info
        ]);
    }

    public function getByDate(Request $request)
    {

        $select_date = $request->select_date;

        if($select_date == null)
            $select_date = date('Y-m-d');

        $reports = Report::select('reports.*', 'users.name')
                ->leftJoin('users', 'reports.user_id', '=', 'users.id')
                ->where(DB::raw("substring(reports.updated_at, 1, 10)"), $select_date);

        if(Auth::user()->role != 2)
            $reports = $reports->where('reports.user_id', Auth::user()->id);

        $reports = $reports->get();

        return view('admin.report.list',[
            'reports' => $reports,
            'select_date' => $select_date
        ]);
    }

    public function report_edit(Request $request, $id)
    {

        $content = $request->content;

        // $messages = [
        //     'required' => 'The :attribute field is required.',
        // ];

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required',
        // ],$messages);

        // if ($validator->fails()) {
        //     return redirect('admin/taskmng')
        //             ->withErrors($validator)
        //             ->withInput();
        // }

        $reports = Report::where('id', $id)
                ->update([
            'content'           => $content,
            'user_id'           => Auth::user()->id,
            'updated_at'        => date('Y-m-d H:i:s'),
            'created_at'        => date('Y-m-d H:i:s'),
        ]);
        
        return redirect('admin/report');
    }
}
