<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\AdminServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminRequest;
use App\Http\Requests\Auth\LoginRequest;

class AdminController extends Controller
{
    protected $AdminServices;

    public function __construct(AdminServices $AdminServices)
    {
        $this->AdminServices = $AdminServices;
    }

    public function AdminSignup(){
        return  $this->AdminServices->AdminSignup();
    }

    public function AdminSignupStore(AdminRequest $request){
         return   $this->AdminServices->AdminSignupStore($request);

    }

    public function AdminLogin(){
        return   $this->AdminServices->AdminLogin();
    }

    public function AdminLoginStore(LoginRequest $request){
        return   $this->AdminServices->AdminLoginStore($request);
    }
    public function logout(request $request){
        return   $this->AdminServices->logout($request);
    }
}



