<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\District;
use App\Models\Division;
use App\Models\Hospital;
use App\Models\SubDistrict;
use Illuminate\Support\Str;
use App\Services\AdminServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class DiagnosticHospitalServices{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospital = Hospital::paginate(6);
        return view('admin.SuperAdmin.Hospital.index', ['hospital' => $hospital]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();
           return view('admin.SuperAdmin.Hospital.create',compact('division','district','subdistrict'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {

       // Initialize file name as null in case no file is uploaded
    $fileName = null;

    // Check if a file was uploaded
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');

        // Check if the file is valid before moving it
        if ($file->isValid()) {
            $img = $request->file('photo');
            $ext = $img->getClientOriginalExtension();

            $fileName =Str::random(20)  . time() . '.' . $ext;
           // $fileName = time() . '.' . $file->getClientOriginalExtension();
            // $file->move(public_path('uploads'), $fileName);
            $img->move(public_path().'/uploads/img/hospital',$fileName);
        } else {
            // Handle invalid file upload
            return back()->withErrors(['photo' => 'Invalid file upload.']);
        }
    }

        Hospital::create([
            'name'=>$request->name,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'subdistrict_id' => $request->subdistrict_id,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'type' => $request->type,
            'license_number' => $request->license_number,
            'photo' =>$fileName ?? null,
        ]);

        return redirect()->route('diagnostic.index');
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
