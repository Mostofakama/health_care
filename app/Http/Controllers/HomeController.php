<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Services\HomeServices;
use App\Http\Requests\Home\SignupRequest;

class HomeController extends Controller
{
    protected $HomeServices;

    public function __construct(HomeServices $HomeServices)
    {
        $this->HomeServices = $HomeServices;
    }
    public function index (){
       return $this->HomeServices->index();

    }

    public function PathologyList($hospital){
        return $this->HomeServices->PathologyList($hospital);
    }

    public function DoctorList($hospital){
        return $this->HomeServices->DoctorList($hospital);
    }

    public function DoctorSingle($doctor){
        return $this->HomeServices->DoctorSingle($doctor);
    }

    public function Gallery(){
        return $this->HomeServices->Gallery();
    }

    public function Signup(){
        return $this->HomeServices->Signup();
    }

    public function SignupStore(SignupRequest $request){
        return $this->HomeServices->SignupStore($request);
    }

    public function SearchDoctor(Request $request){
        return $this->HomeServices->SearchDoctor($request);
    }
    public function SearchDiagnostic(Request $request){
        return $this->HomeServices->SearchDiagnostic($request);
    }
    public function pharmacyList(Request $request){
        return $this->HomeServices->pharmacyList($request);
    }
    public function HomeService(){
        return $this->HomeServices->HomeService();
    }
    public function CardSearch(Request $request){
        return $this->HomeServices->CardSearch($request);
    }
    public function Dental(){
        return $this->HomeServices->Dental();
    }
    public function Eye(){
        return $this->HomeServices->Eye();
    }
    public function Blood(){
        return $this->HomeServices->Blood();
    }
    public function Ambulance(){
        return $this->HomeServices->Ambulance();
    }


}
