<?php

namespace App\Models;

use App\Models\District;
use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubDistrict extends Model
{
    use HasFactory;
    protected $table = 'sub_districts';
    protected $fillable = ['name', 'district_id', 'division_id'];

    // Each sub-district belongs to one district
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    // Each sub-district belongs to one division
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
