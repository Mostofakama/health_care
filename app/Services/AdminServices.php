<?php

namespace App\Services;

use App\Models\Admin;
use App\Services\AdminServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class AdminServices{
    public function AdminSignup(){
        return view('admin.signup');
    }

    public function AdminSignupStore($request){
       Admin::create([
         'name' => $request->name,
         'email' => $request->email,
         'password' =>   $request->password,
         'role' => $request->role,
       ]);

    }
    public function AdminLogin(){
         return view('admin.login');
    }

    public function AdminLoginStore($request)
    {




        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

          $user =  Auth::guard('admin')->user()->role;
          if($user == 1){
            return redirect()->route('admin.dashboard');
          }else if($user == 2){
            return redirect()->route('subadmin.dashboard');
          }else{
            return redirect()->route('employee.dashboard');
          }

        }else{
            return "login failed";
        }

    }

    public function logout( $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Successfully logged out.');
    }
}
