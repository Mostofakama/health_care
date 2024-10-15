<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Division;
use App\Services\AdminServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Admin\Division\UpdateRequest;



class DivisionServices{
    public function index()
   {
       $division = Division::paginate(10);
       return view('admin.SuperAdmin.Location.Division.index', ['divisions' => $division]);
   }


   public function create()
   {
       return view('admin.SuperAdmin.Location.Division.create');
   }


   public function store($request)
   {
        Division::create([
            'name'=> $request->name,
            'code'=> $request->code,
        ]);

        return redirect()->route('division.index');
   }


   public function show(string $id)
   {

   }


   public function edit(string $id)
   {

    $division = Division::find($id);
    if($division){
        return view('admin.SuperAdmin.Location.Division.update',compact('division'));
    }
    else{
        return view('Error.AdminNotFound');
    }

   }


   public function update($request, string $id)
   {
        $division = Division::find($id);
        if($division){
            Division::where('id',$id)->update([
                'name'=> $request->name,
                'code'=> $request->code,
            ]);
        }else{
            return view('Error.AdminNotFound');
        }

        return redirect()->route('division.index');
   }


   public function destroy($id)
   {
    $division = Division::findOrFail($id);
    $division->delete();

    return redirect()->route('division.index')->with('success', 'Division deleted successfully');

   }
}
