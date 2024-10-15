<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;
use App\Services\AdminServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class SubDistrictServices{
    public function index()
   {
       $SubDistrict = SubDistrict::paginate(10);
       return view('admin.SuperAdmin.Location.SubDistrict.index', ['SubDistrict' => $SubDistrict]);
   }


   public function create()
   {
    $division = Division::all();
    $district = District::all();
       return view('admin.SuperAdmin.Location.SubDistrict.create',compact('division','district'));
   }


   public function store($request)
   {
        SubDistrict::create([
            'name'=> $request->name,
            'division_id'=> $request->division_id,
            'district_id'=> $request->district_id,
        ]);

        return redirect()->route('subdistrict.index');
   }


   public function show(string $id)
   {



   }


   public function edit($id)
   {
   // $division_id = SubDistrict::find($id);
   $subDistrict = SubDistrict::with('district', 'division')->findOrFail($id);



    $division = Division::all();
    $district = District::all();

    if($subDistrict){
        return view('admin.SuperAdmin.Location.SubDistrict.update',compact('subDistrict','division','district'));
    }
    else{
        return view('Error.AdminNotFound');
    }

   }


   public function update($request, $id)
   {
        $SubDistrict = SubDistrict::find($id);
        if($SubDistrict){
            SubDistrict::where('id',$id)->update([
                'name'=> $request->name,
                'division_id'=> $request->division_id,
                'district_id'=> $request->district_id,
            ]);
        }else{
            return view('Error.AdminNotFound');
        }

        return redirect()->route('subdistrict.index');
   }


   public function destroy($id)
   {
    $SubDistrict = SubDistrict::findOrFail($id);
    $SubDistrict->delete();

    return redirect()->route('subdistrict.index')->with('success', 'SubDistrict deleted successfully');

   }
}
