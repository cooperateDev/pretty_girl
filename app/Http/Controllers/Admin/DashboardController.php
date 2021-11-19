<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

        return view('admin.dashboard',[
            'status'        => $status,
            'month'         => $month,
            'year'          => $year,
            'filter'        => $filter
        ]);
    }
}
