<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $table = 'hospitals';


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
