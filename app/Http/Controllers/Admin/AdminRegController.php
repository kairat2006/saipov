<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

    
class AdminRegController extends Controller
{


    public function showRegForm()
    {
        return view('admin.sign_up');
    }


    function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string',  'confirmed'],
        ]);
    } 


    function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect()->route('admin.dashboard');

    }

    /* Login form for Admins*/
    public function showLogForm()
    {
        return view('admin.sign_in');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',            
            'password' => 'required',
        ]);
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            return redirect()->route('admin.dashboard');
        }
        return redirect()-back()->withInput($request->only('email'));
    }
   



    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     dd($request->all());
    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         return 'succes';
    //     }
    // }



    public function __construct()
    {
        // $this -> middleware('guest:admin');
    }

    public function home()
    {
        return view('tprivate.admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}












    


