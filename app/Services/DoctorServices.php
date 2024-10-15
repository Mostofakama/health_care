<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\District;
use App\Models\Division;
use App\Models\Hospital;
use App\Models\SubDistrict;
use Illuminate\Support\Str;
use App\Services\AdminServices;
use App\Services\DoctorServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class DoctorServices{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor = Doctor::paginate(6);
        return view('admin.SuperAdmin.Doctor.index', ['doctor' => $doctor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();
        $hospital = Hospital::all();
           return view('admin.SuperAdmin.Doctor.create',compact('division','district','subdistrict','hospital'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {
        $photoName = null;
        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $ext = $img->getClientOriginalExtension();

            $fileName =Str::random(20)  . time() . '.' . $ext;
            $img->move(public_path('uploads/img/doctors'), $fileName);
        }


        Doctor::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'qualifications' => $request->qualifications,
            'expert_in' => $request->expert_in,
            'organisation' => $request->organisation,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'facebook_link' => $request->facebook_link,
            'pinterest_link' => $request->pinterest_link,
            'twitter_link' => $request->twitter_link,
            'chamber_1_name' => $request->chamber_1_name,
            'chamber_1_address' => $request->chamber_1_address,
            'chamber_1_contact_number' => $request->chamber_1_contact_number,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'sub_district_id' => $request->sub_district_id,
            'hospital_id' => $request->hospital_id,
            'photo' => $fileName,
        ]);


        return redirect()->route('doctor.index')->with('success', 'Doctor information added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $hospital = Hospital::with(['division', 'district', 'subdistrict'])->find($id);


        if (!$hospital) {
            return view('Error.AdminNotFound');
        }


        return view('admin.SuperAdmin.Hospital.show', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $diagnostic = Hospital::findOrFail($id);
        $divisions = Division::all();
        $districts = District::all();
        $subdistricts = SubDistrict::all();

        return view('admin.SuperAdmin.Hospital.update', compact('diagnostic', 'divisions', 'districts', 'subdistricts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request,  $id)
    {

        $fileName = '';
        if ($request->hasFile('photo')) {
            $photo = Hospital::findOrFail($id);
            $imagePath = public_path('uploads/img/hospital/' . $photo->photo);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $fileName = Str::random(20) . time(). '.'. $ext;
            $file->move(public_path().'/uploads/img/hospital', $fileName);
        }else{
           $fileName = $request->old_photo;
        }

        Hospital::where('id',$id)->update([
            'name'=>$request->name,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'subdistrict_id' => $request->subdistrict_id,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'type' => $request->type,
            'license_number' => $request->license_number,
            'photo' => $fileName,
        ]);

        return redirect()->route('diagnostic.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $photo = Hospital::findOrFail($id);


        $imagePath = public_path('uploads/img/hospital/' . $photo->photo);


        $photo->delete();


        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        return redirect()->route('diagnostic.index')->with('success', 'SubDistrict and associated image deleted successfully');
    }
}
