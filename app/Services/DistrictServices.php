<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\District;
use App\Models\Division;
use App\Services\AdminServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class DistrictServices{
    public function index()
   {
       $District = District::paginate(10);
       return view('admin.SuperAdmin.Location.District.index', ['District' => $District]);
   }


   public function create()
   {
    $District = Division::all();

       return view('admin.SuperAdmin.Location.District.create',['district' => $District]);
   }


   public function store($request)
   {
        District::create([
            'name'=> $request->name,
            'division_id'=> $request->division_id,
        ]);

        return redirect()->route('district.index');
   }


   public function show(string $id)
   {

   }


   public function edit($id)
   {
   // $division_id = District::find($id);

    $dis = District::with('division')->where('id',$id)->first();
    $division = Division::all();

    if($dis){
        return view('admin.SuperAdmin.Location.District.update',compact('dis','division'));
    }
    else{
        return view('Error.AdminNotFound');
    }

   }


   public function update($request, $id)
   {
        $District = District::find($id);
        if($District){
            District::where('id',$id)->update([
                'name'=> $request->name,
                'division_id'=> $request->division_id,
            ]);
        }else{
            return view('Error.AdminNotFound');
        }

        return redirect()->route('district.index');
   }


   public function destroy($id)
   {
    $District = District::findOrFail($id);
    $District->delete();

    return redirect()->route('district.index')->with('success', 'District deleted successfully');

   }
}
