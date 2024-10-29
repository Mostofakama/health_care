<?php

namespace App\Services;

use App\Models\User;
use App\Models\Admin;
use App\Models\Unions;
use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;
use App\Services\SubAdminServices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class SubAdminServices{

public function index(){
  //  $employee = Admin::where('role' , 3)->paginate(10);
    $employee = DB::table('admins')->where('role' ,3)
    ->join('divisions', 'divisions.id', '=', 'admins.division_id')
    ->join('districts', 'districts.id', '=', 'admins.district_id')
    ->join('sub_districts', 'sub_districts.id', '=', 'admins.sub_district_id')
    ->join('unions', 'unions.id', '=', 'admins.union_id')
    ->select(
        'admins.id',
        'admins.name',
        'admins.email',
        'admins.password_textPlain',
        'divisions.name as division_name',
        'districts.name as district_name',
        'sub_districts.name as subdistrict_name',
        'unions.name as union_name'
    )
    ->paginate(10);


    return view('admin.SubAdmin.Dashboard',compact('employee'));
}
 public function Employee(){
    $division = Division::all();
    $district = District::all();
    $subdistrict = SubDistrict::all();
    $unions = Unions::all();
    return view('admin.SubAdmin.Employee',compact('division', 'district', 'subdistrict', 'unions'));
 }

public function EmployeeStore($request){

     Admin::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' =>Hash::make($request->password),
      'password_textPlain' => $request->password,
      'division_id'=>$request->division_id,
      'district_id'=>$request->district_id,
      'sub_district_id'=>$request->sub_district_id,
      'union_id'=>$request->union_id,
      'role' => 3,
     ]);
     return redirect()->route('subadmin.dashboard');
}
public function EmployeeUpdate( $id){
     $employee = Admin::findOrFail($id);
     return view('admin.SubAdmin.EmployeeUpdate', compact('employee'));
}
public function EmployeeDestroy($id){
     $employee = Admin::findOrFail($id);
     $employee->delete();
     return redirect()->route('subadmin.dashboard');
}


}
