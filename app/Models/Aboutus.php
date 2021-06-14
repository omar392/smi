<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;
    public function getWhoAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->who_ar;
    	}
    	return $this->who_en;
    }
    public function getVissionAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->vission_ar;
    	}
    	return $this->vission_en;
    }
    public function getMissionAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->mission_ar;
    	}
    	return $this->mission_en;
    }
    public function getGoalsAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->goals_ar;
    	}
    	return $this->goals_en;
    }
}
