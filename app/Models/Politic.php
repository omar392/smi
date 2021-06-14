<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politic extends Model
{
    use HasFactory;
    public function getTitleAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->title_ar;
    	}
    	return $this->title_en;
    }
    public function getPoliticsAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->politics_ar;
    	}
    	return $this->politics_en;
    }
}
