<?php

namespace App\Http\Controllers\SubAdmin;

use Illuminate\Http\Request;
use App\Services\SubAdminServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmployeeStoreRequest;

class SubAdminController extends Controller
{

    protected $SubAdminServices;

    public function __construct(SubAdminServices $SubAdminServices)
    {
        $this->SubAdminServices = $SubAdminServices;
    }
    public function index(){

        return $this->SubAdminServices->index();
    }
    public function Employee(){
        return $this->SubAdminServices->Employee();
    }
    public function EmployeeStore(EmployeeStoreRequest $request){
        return $this->SubAdminServices->EmployeeStore($request);
    }

    public function EmployeeUpdate(string $id){
        return $this->SubAdminServices->EmployeeUpdate($id);
    }
    public function EmployeeDestroy(string $id){
        return $this->SubAdminServices->EmployeeDestroy($id);
    }
}
