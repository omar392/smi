<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function getNameAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->name_ar;
    	}
    	return $this->name_en;
    }
}
