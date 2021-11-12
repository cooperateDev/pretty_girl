<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\TaskMNG;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;

class TaskMNGController extends Controller
{
    protected $redirectTo = 'admin/';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:2');
    }

    public function index(Request $request)
    {

        $tasks = TaskMNG::select('task_mngs.*', 'users.name')
                ->leftJoin('users', 'task_mngs.user_id', '=', 'users.id')
                ->orderby('task_mngs.id', 'desc')
                ->get();
        
        return view('admin.taskMNG.list',[
            'tasks' => $tasks
        ]);
    }

    public function task_create(Request $request)
    {
        $users = User::get();
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d');

        return view('admin.taskMNG.create', [
            'status'            => 'create',
            'users'             => $users,
            'start_date'        => $start_date,
            'end_date'          => $end_date
        ]);
    }

    public function task_add(Request $request)
    {

        $title              = $request->title;
        $desc               = $request->desc;
        $user_id            = $request->user_id;
        $teammate           = $request->teammate;
        $status             = $request->status;
        $start_date         = $request->start_date;
        $end_date           = $request->end_date;
        $paypal             = $request->paypal;
        $payoneer           = $request->payoneer;
        $price              = $request->price;
        $contract_price     = $request->contract_price;
        $payment_mode       = $request->payment_mode;

        $price = (float)$paypal + (float)$payoneer;
        $price_date = date("Y-m-d");
        
        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/taskmng')
                    ->withErrors($validator)
                    ->withInput();
        }

        $taskmng = TaskMNG::create([
            'title'             => $title,
            'desc'              => $desc,
            'user_id'           => $user_id,
            'teammate'          => $teammate,
            'status'            => $status,
            'start_date'        => $start_date,
            'end_date'          => $end_date,
            'paypal'            => $paypal,
            'payoneer'          => $payoneer,
            'payment_mode'      => $payment_mode,
            'contract_price'    => $contract_price,
            'price'             => $price,
            'price_date'        => $price_date,
            'paypal_date'       => date('Y-m-d'),
            'payoneer_date'     => date('Y-m-d'),
        ]);
        
        return redirect('admin/taskmng');
    }

    public function task_del(Request $request, $id)
    {
        TaskMNG::where('id', '=', $id)->delete();

        return redirect('admin/taskmng');
    }

    public function task_info(Request $request, $id)
    {
        
        $task_info = TaskMNG::where('id', '=', $id)->first();
        $users = User::get();
        
        return view('admin.taskMNG.create',[
            'status'            => 'edit',
            'task_info'         => $task_info,
            'users'             => $users
        ]);
    }

    public function task_edit(Request $request, $id)
    {

        $title              = $request->title;
        $desc               = $request->desc;
        $user_id            = $request->user_id;
        $teammate           = $request->teammate;
        $status             = $request->status;
        $start_date         = $request->start_date;
        $end_date           = $request->end_date;
        $paypal             = $request->paypal;
        $payoneer           = $request->payoneer;
        $price              = $request->price;
        $contract_price     = $request->contract_price;
        $payment_mode       = $request->payment_mode;

        $price = (float)$paypal + (float)$payoneer;
        $price_date = date("Y-m-d");
        
        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/taskmng')
                    ->withErrors($validator)
                    ->withInput();
        }

        $taskmng = TaskMNG::where('id', $id)
                ->update([
            'title'             => $title,
            'desc'              => $desc,
            'user_id'           => $user_id,
            'teammate'          => $teammate,
            'status'            => $status,
            'start_date'        => $start_date,
            'end_date'          => $end_date,
            'paypal'            => $paypal,
            'payoneer'          => $payoneer,
            'payment_mode'      => $payment_mode,
            'contract_price'    => $contract_price,
            'price'             => $price,
            'price_date'        => $price_date,
            'paypal_date'       => date('Y-m-d'),
            'payoneer_date'     => date('Y-m-d'),
        ]);
        
        return redirect('admin/taskmng');
    }
}
