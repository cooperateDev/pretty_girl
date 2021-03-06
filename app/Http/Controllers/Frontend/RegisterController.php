<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required',
        ],$messages);

        if ($validator->fails()) {
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }

        $image = "";

        if($_FILES["file"]["name"]) {
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            $image = time() . '_' . $_FILES["file"]["name"];

            if (file_exists("upload/images/avatar/" . $image)) 
                unlink("upload/images/avatar/" . $image);
       
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/images/avatar/" . $image);
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'avatar' => $image,
            'role' => 1
        ]);

        // if($user)
        //     return json_encode(array('success' => 'true'));
        // else
        //     return json_encode(array('error' => 'true'));

        return view('frontend.auth.login');
    }

    public function index(){
        return view('frontend.auth.signup');
    }
}
