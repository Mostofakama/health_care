<?php

namespace App\Models;

use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pharmacy extends Model
{
    use HasFactory;

    protected $table = 'pharmacies';


    protected $fillable = [
        'name',
        'division_id',
        'district_id',
        'subdistrict_id',
        'contact_number',
        'email',
        'type',
        'license_number',
        'photo',
        'address',
        'type_hospital',
        'status',
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
}
