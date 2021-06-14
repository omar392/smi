<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public function getQuestionAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->question_ar;
    	}
    	return $this->question_en;
    }
    public function getAnswerAttribute()
    {
    	if (app()->getLocale() == 'ar') {
    		return $this->answer_ar;
    	}
    	return $this->answer_en;
    }
}
