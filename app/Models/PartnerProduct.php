<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerProduct extends Model
{
    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
