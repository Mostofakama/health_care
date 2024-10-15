<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\District;
use App\Models\Division;
use App\Models\Hospital;
use App\Models\Pathologie;
use App\Models\SubDistrict;
use Illuminate\Support\Str;
use App\Services\AdminServices;
use App\Services\DoctorServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class PathologieServices{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pathologie = Pathologie::paginate(6);
        return view('admin.SuperAdmin.Pathologie.index', ['pathologie' => $pathologie]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $hospital = Hospital::all();
           return view('admin.SuperAdmin.Pathologie.create',compact('hospital'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {



        Pathologie::create([
            'name' => $request->name,
            'regular_price' => $request->regular_price,
            'discount_percentage' => $request->discount_percentage ,
            'hospital_id' => $request->hospital_id ,
        ]);


        return redirect()->route('pathology.index')->with('success', 'Doctor information added successfully!');
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

        $pathologie = Pathologie::with('hospital')->findOrFail($id);
        $hospital = Hospital::all();

        return view('admin.SuperAdmin.Pathologie.update', compact('hospital','pathologie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request,  $id)
    {
       $pathologie =  Pathologie::findOrFail($id);
       $pathologie->update([
            'name' => $request->name,
            'regular_price' => $request->regular_price,
            'discount_percentage' => $request->discount_percentage ,
            'hospital_id' => $request->hospital_id ,
        ]);


        return redirect()->route('pathology.index')->with('success', 'Doctor information update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $pathologie = Pathologie::findOrFail($id);




        $pathologie->delete();




        return redirect()->route('pathology.index')->with('success', 'pathology and associated image deleted successfully');
    }
}
