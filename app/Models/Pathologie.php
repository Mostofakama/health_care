<?php

namespace App\Models;

use App\Models\Hospital;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pathologie extends Model
{
    use HasFactory;
    protected $table = 'pathologies';

    protected $fillable = [
        'name',
        'regular_price',
        'discount_percentage',
        'discount_price',
        'hospital_id'
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($pathology) {
            $pathology->discount_price = $pathology->regular_price - ($pathology->regular_price * ($pathology->discount_percentage / 100));
        });
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
