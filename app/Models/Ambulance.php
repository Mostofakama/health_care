<?php

namespace App\Models;

use App\Models\District;
use App\Models\Division;
use App\Models\SubDistrict;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ambulance extends Model
{
    use HasFactory;
    protected $table = 'ambulances';
    protected $fillable = [
        'name',
        'address',
        'division_id',
        'district_id',
        'subdistrict_id',
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
