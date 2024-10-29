<?php

namespace App\Services;


use App\Models\Unions;
use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;


class UnionsServices{

    public function index()
    {
        $unions = Unions::paginate(6);
        return view('admin.SuperAdmin.Location.Unions.index', ['unions' => $unions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();
           return view('admin.SuperAdmin.Location.Unions.create',compact('division','district','subdistrict',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {
        Unions::create([
            'name' => $request->name,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'sub_district_id' => $request->sub_district_id,
        ]);


        return redirect()->route('unions.index');
    }


    public function edit( $id)
    {
        $unions = Unions::findOrFail($id);
        $divisions = Division::all();
        $districts = District::all();
        $subdistricts = SubDistrict::all();

        return view('admin.SuperAdmin.Location.Unions.update', compact('unions', 'divisions', 'districts', 'subdistricts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request,  $id)
    {



        Unions::where('id',$id)->update([
            'name'=>$request->name,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'sub_district_id' => $request->sub_district_id,
        ]);

        return redirect()->route('unions.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $unions = Unions::findOrFail($id);



        return redirect()->route('unions.index');
    }
}
