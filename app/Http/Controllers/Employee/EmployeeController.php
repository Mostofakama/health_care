<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Services\EmployeeServices;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    protected $EmployeeServices;

    public function __construct(EmployeeServices $EmployeeServices)
    {
        $this->EmployeeServices = $EmployeeServices;
    }
    public function index(Request $request){
        return $this->EmployeeServices->index($request);
    }
    public function UserActive(string $id){
        return $this->EmployeeServices->UserActive($id);
    }
    public function Active(){
        return $this->EmployeeServices->Active();
    }
    public function UserUnActive(string $id){
        return $this->EmployeeServices->UserUnActive($id);
    }
    public function Unions(string $union_id = null){
        return $this->EmployeeServices->Unions($union_id);
    }
}
