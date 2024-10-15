<?php

namespace App\Models;

use App\Models\District;
use App\Models\Division;
use App\Models\Hospital;
use App\Models\SubDistrict;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

     protected $table = 'doctors';

     protected $fillable = [
         'name',
         'designation',
         'qualifications',
         'expert_in',
         'organisation',
         'email',
         'facebook_link',
         'pinterest_link',
         'twitter_link',
         'contact_number',
         'photo',
         'chamber_1_name',
         'chamber_1_address',
         'chamber_1_contact_number',
         'division_id',
         'district_id',
         'sub_district_id',
         'hospital_id',
     ];


     public function division()
     {
         return $this->belongsTo(Division::class);
     }

     public function district()
     {
         return $this->belongsTo(District::class);
     }

     public function subdistrict()
     {
         return $this->belongsTo(SubDistrict::class);
     }

     public function hospital()
     {
         return $this->belongsTo(Hospital::class);
     }
}
