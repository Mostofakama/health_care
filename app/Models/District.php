<?php

namespace App\Models;

use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;
    protected $table = 'districts';
    protected $fillable = ['name', 'division_id'];


    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
