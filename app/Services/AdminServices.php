<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Unions;
use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;
use App\Services\AdminServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class AdminServices{
    public function AdminSignup(){
        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();
        $unions = Unions::all();
        return view('admin.signup',compact('division', 'district', 'subdistrict', 'unions'));
    }

    public function AdminSignupStore($request){
       Admin::create([
         'name' => $request->name,
         'email' => $request->email,
         'password' =>   $request->password,
         'division_id' => 1,
         'district_id' => 1,
         'sub_district_id' => 1,
         'union_id' => 1,
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
