<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\District;
use App\Models\Division;
use App\Models\Hospital;
use App\Models\Ambulance;
use App\Models\Pathologie;
use App\Models\SubDistrict;
use Illuminate\Support\Str;
use App\Services\AdminServices;
use App\Services\DoctorServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class AmbulanceServices{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ambulance = Ambulance::paginate(6);
        return view('admin.SuperAdmin.Ambulance.index', ['ambulance' => $ambulance]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();

        return view('admin.SuperAdmin.Ambulance.create', compact( 'division', 'district', 'subdistrict'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {



        Ambulance::create([
            'name' => $request->name,
            'address' => $request->address,
            'division_id' => $request->division_id ,
            'district_id' => $request->district_id ,
            'subdistrict_id' => $request->subdistrict_id ,
        ]);


        return redirect()->route('ambulance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {



        $ambulance = Ambulance::findOrFail($id);
        $divisions = Division::all();
        $districts = District::all();
        $subdistricts = SubDistrict::all();

        return view('admin.SuperAdmin.Ambulance.update', compact('ambulance', 'divisions', 'districts', 'subdistricts'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request,  $id)
    {
       $pathologie =  Ambulance::findOrFail($id);
       $pathologie->update([
            'name' => $request->name,
            'address' => $request->address,
            'division_id' => $request->division_id ,
            'district_id' => $request->district_id ,
            'subdistrict_id' => $request->subdistrict_id ,
        ]);


        return redirect()->route('ambulance.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $ambulance = Ambulance::findOrFail($id);




        $ambulance->delete();




        return redirect()->route('ambulance.index');
    }
}
