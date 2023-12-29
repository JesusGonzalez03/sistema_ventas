<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name', 'lastname', 'document', 'address', 'phone'];

    public function city() {
        return $this->belongsTo(City::class);
    }
}
