<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\TaskMNG;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Dashboard Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:2');
    }

    public function index(Request $request)
    {
        $year = $request->year;
        $month = $request->month;
        $status = $request->status;
        $filter = false;

        if($year == null)
            $year = date('Y');

        if($month == null){
            $month = date('m');
        } else {
            $month = $month < 10? '0' . $month : $month;
            $filter = true;
        }

        $start = $year . '-' . $month . '-01';
        $end = $year . '-' . $month . '-31';

        $tasks = TaskMNG::select('task_mngs.*', 'users.name')
                ->leftJoin('users', 'task_mngs.user_id', '=', 'users.id')
                ->orderby('task_mngs.id', 'desc')
                ->where(function($query) use ($start, $end, $filter) {
                    if($filter) {
                        $query->whereBetween('end_date', [$start, $end]);
                    } else {
                        $query->orWhere('end_date', null)
                          ->orWhereBetween('end_date', [$start, $end]);    
                    }
                });

        if($status != 0)
            $tasks = $tasks->where('status', $status);

        $tasks = $tasks->get();

        $paypal_price = TaskMNG::where(function($query) use ($start, $end, $filter) {
                                    if($filter)
                                        $query->whereBetween('paypal_date', [$start, $end]);
                                })
                        ->sum('paypal');

        $payoneer_price = TaskMNG::where(function($query) use ($start, $end, $filter) {
                                    if($filter)
                                        $query->whereBetween('payoneer_date', [$start, $end]);
                                })
                        ->sum('payoneer');
        
        return view('admin.dashboard',[
            'tasks'         => $tasks,
            'total_price'   => $paypal_price + $payoneer_price,
            'status'        => $status,
            'month'         => $month,
            'year'          => $year,
            'filter'        => $filter
        ]);
    }
}
