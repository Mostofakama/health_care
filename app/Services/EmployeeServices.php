<?php

namespace App\Services;

use App\Models\User;
use App\Models\Unions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class EmployeeServices {
//  public function index ($request){
//     return $request;
//    $employee_dis_id =   Auth::guard("admin")->user()->sub_district_id;
//    $user = DB::table('users')
//    ->join('unions', 'unions.id', '=', 'users.union_id')
//    ->where('active', '=', 0 )
//    ->where('users.sub_district_id', $employee_dis_id,)

//    ->select([
//      'unions.name as union_name',
//      'users.id',
//      'users.visitor_name',

//      'users.card_number',
//      'users.mobile',
//      'users.birth_date'
//    ])
//    ->paginate(10);

//     return view('admin.Employee.Dashboard',compact('user'));
//  }
 public function index( $request)
 {

     $query = User::query();

     if ($request->filled('search')) {
         $search = $request->input('search');
         $user =  $query->where('card_number', 'like', "%$search%")
               ->orWhere('mobile', 'like', "%$search%")->paginate(10);
     }

     $user = $query->paginate(10);

     return view('admin.Employee.Dashboard',compact('user'));
 }



 public function UserActive($id){
  User::where('id',$id)
        ->update(['active' => 1]);
  return redirect()->route('employee.dashboard');
 }
 public function Active (){

    $employee_dis_id =   Auth::guard("admin")->user()->sub_district_id;
    $user = DB::table('users')
    ->join('unions', 'unions.id', '=', 'users.union_id')
    ->where('active', '=', 1 )
    ->where('users.sub_district_id', $employee_dis_id,)

    ->select([
      'unions.name as union_name',
      'users.id',
      'users.visitor_name',
      'users.card_number',
      'users.mobile',
      'users.birth_date'
    ])
    ->paginate(10);

     return view('admin.Employee.Active',compact('user'));
  }

  public function UserUnActive($id){
    User::where('id',$id)
          ->update(['active' => 0]);
    return redirect()->route('employee.dashboard');
   }

   public function Unions($union_id){
    $employee_dis_id = Auth::guard("admin")->user()->sub_district_id;


    $unions = Unions::where('sub_district_id', $employee_dis_id)->get();


    if($union_id == null){
        $user = DB::table('users')
            ->join('unions', 'unions.id', '=', 'users.union_id')
           // ->where('active', '=', 0)
            ->where('users.sub_district_id', $employee_dis_id)
            ->select([
                'unions.name as union_name',
                'users.id',
                'users.visitor_name',
                'users.card_number',
                'users.mobile',
                'users.birth_date',
                'users.active'
            ])
            ->paginate(10);
    } else {

        $user = DB::table('users')
            ->join('unions', 'unions.id', '=', 'users.union_id')
            //->where('active', '=', 0)
            ->where('users.union_id', $union_id)
            ->where('users.sub_district_id', $employee_dis_id)
            ->select([
                'unions.name as union_name',
                'users.id',
                'users.visitor_name',
                'users.card_number',
                'users.mobile',
                'users.birth_date',
                'users.active'
            ])
            ->paginate(10);
    }

    // Return the view with user data and unions
    return view('admin.Employee.UnionsUser', compact('user', 'unions', 'union_id'));
}


}
