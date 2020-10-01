<?php

namespace App\Http\Controllers\Student;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

    
class StudentController extends Controller
{


    public function showRegForm()
    {
        return view('student.sign_up');
    }


    function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'stristudentng', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string',  'confirmed'],
        ]);
    } 


    function create(array $data)
    {
        return Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect()->route('student.login');

    }

    /* Login form for Admins*/
    public function showLogForm()
    {
        return view('student.sign_in');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',            
            'password' => 'required',
        ]);
       
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            return redirect()->route('student.dashboard');
        }
        return redirect()-back()->withInput($request->only('email'));
    }



    // public function __construct()
    // {
    //     // $this -> middleware('guest:admin');
    // }

    public function home()
    {
        return view('private_st.private');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function show()
    {
        $posts = Student::all();
        return view('private_st.private',[
            'posts' => $posts
        ]);
    }
}
