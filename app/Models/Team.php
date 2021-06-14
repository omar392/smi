<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function getNameAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->name_ar;
    	}
    	return $this->name_en;
    }
    public function getRoleAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->role_ar;
    	}
    	return $this->role_en;
    }
}
