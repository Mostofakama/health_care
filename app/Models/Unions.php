<?php

namespace App\Models;

use App\Models\District;
use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unions extends Model
{
    use HasFactory;

     // Define the table name if it's not the plural form of the model
     protected $table = 'unions';

     // Fillable fields for mass assignment
     protected $fillable = ['name', 'sub_district_id', 'district_id', 'division_id'];

     /**
      * Each union belongs to one subdistrict.
      */
     public function subdistrict()
     {
         return $this->belongsTo(SubDistrict::class);
     }

     /**
      * Each union belongs to one district.
      */
     public function district()
     {
         return $this->belongsTo(District::class);
     }

     /**
      * Each union belongs to one division.
      */
     public function division()
     {
         return $this->belongsTo(Division::class);
     }
}
