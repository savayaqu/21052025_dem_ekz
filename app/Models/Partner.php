<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name',
        'director',
        'email',
        'phone',
        'address',
        'rating',
        'partner_type_id'
    ];
    public $timestamps = false;
    public function partnerProducts()
    {
        return $this->hasMany(PartnerProduct::class);
    }
    public function partnerType()
    {
        return $this->belongsTo(PartnerType::class);
    }
}
