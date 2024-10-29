<?php

namespace App\Services;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Unions;
use App\Models\gallery;
use App\Models\District;
use App\Models\Division;
use App\Models\Hospital;
use App\Models\Pharmacy;
use App\Models\Ambulance;
use App\Models\Pathologie;
use App\Models\SubDistrict;
use Illuminate\Support\Facades\DB;

class HomeServices{
    public function index(){
        $doctor = Doctor::paginate(8);
        $hospital = Hospital::paginate(8);
        return view('Home.Home',compact('doctor','hospital'));
    }

    public function PathologyList($hospital){
       $pathology = Pathologie::where('hospital_id',$hospital)->paginate(14);
       return view('Home.page.PathologyList',compact('pathology'));
    }


    public function DoctorList($hospital){
        $doctor = Doctor::where('hospital_id',$hospital)->paginate(16);
        return view('Home.page.DoctorList',compact('doctor'));
    }
    public function DoctorSingle($doctor){
         $doctor = Doctor::where('id',$doctor)->first();
        return view('Home.page.SingleDoctor',compact('doctor'));
    }
    public function Gallery(){
         $gallery = gallery::paginate(16);
        return view('Home.page.Gallery',compact('gallery'));
    }


    public function Signup(){
        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();
        $unions = Unions::all();
        return view('Home.page.Signup',compact('division', 'district', 'subdistrict', 'unions'));
    }
    public function SignupStore($request){
     User::create([
        "visitor_name"=>$request->visitor_name,
        "father_name"=>$request->father_name,
        "birth_date"=>$request->birth_date,
        "voter_id"=>$request->voter_id,
        "mobile"=>$request->mobile,
        "profession"=>$request->profession,
        "card_number"=>$request->card_number,
        "password"=>$request->password,
        "division_id"=>$request->division_id,
        "district_id"=>$request->district_id,
        "sub_district_id"=>$request->sub_district_id,
        "union_id"=>$request->union_id,
        "gender"=>$request->visitor_gender,
     ]);
      return redirect()->route('home');
    }


    public function SearchDoctor($request ){

        $subDistrictId = $request->input('sub_district_id');
        $doctor = Doctor::where('sub_district_id', $subDistrictId)->get();

        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();

        return view('Home.page.SearchDoctor',compact('doctor','division', 'district', 'subdistrict'));
    }

    public function SearchDiagnostic($request ){

        $subDistrictId = $request->input('sub_district_id');
        $hospital = Hospital::where('subdistrict_id', $subDistrictId)->get();

        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();

        return view('Home.page.SearchHospital',compact('hospital','division', 'district', 'subdistrict'));
    }
    public function pharmacyList($request ){

        $subDistrictId = $request->input('sub_district_id');
        $pharmacy = Pharmacy::where('subdistrict_id', $subDistrictId)->get();

        $division = Division::all();
        $district = District::all();
        $subdistrict = SubDistrict::all();

        return view('Home.page.Pharmacy',compact('pharmacy','division', 'district', 'subdistrict'));
    }

    public function HomeService(){
        return view('Home.page.HomeService');
    }
    public function CardSearch( $request){

        // $user = User::->get();
        $user = DB::table('users')->where('card_number',$request->card_number)
        ->where('active',1)
        ->join('divisions', 'divisions.id', '=', 'users.division_id')
        ->join('districts', 'districts.id', '=', 'users.district_id')
        ->join('sub_districts', 'sub_districts.id', '=', 'users.sub_district_id')
        ->join('unions', 'unions.id', '=', 'users.union_id')
        ->select(

            'users.id',
            'users.visitor_name',
            'users.father_name',
            'users.birth_date',
            'users.voter_id',
            'users.mobile',
            'users.profession',
            'users.card_number',
            'users.gender',
            'divisions.name as division_name',
            'districts.name as district_name',
            'sub_districts.name as subdistrict_name',
            'unions.name as union_name'
        )
        ->get();
        return view('Home.page.CardSearch',compact('user'));
    }

    public function Dental(){

        $dentalHospitals = Hospital::where('type_hospital','Dental')->get();

        return view('Home.page.Dental',compact('dentalHospitals'));
    }
    public function Eye(){

        $eyeHospitals = Hospital::where('type_hospital','Eye')->get();

        return view('Home.page.Eye',compact('eyeHospitals'));
    }
    public function Blood(){
      return view('Home.page.Blood');
    }
    public function Ambulance(){
        $ambulances = Ambulance::all();
        return view('Home.page.Ambulance',compact('ambulances'));

    }
}
