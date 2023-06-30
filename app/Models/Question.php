<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Question extends Model
{
    use HasFactory;

    public function questionaire()
    {
        return $this->belongsTo(Questionaire::class);
    }
    public function criteria(){
        return $this->belongsTo(Criteria::class);
    }
    public function evaluation_ratings()
    {
        return $this->hasMany(Evaluation_rating::class);
    }

    public function scopeWithAvgRatingForTeacherPerQuestion(Builder $query,$question_id):Builder
    {
        // return $query->where('criteria_id','1')->withAvg(['evaluation_ratings'=>fn(Builder $q)=>$q->where('teacher_id','1')],'rating');
        return $query->withAvg('evaluation_ratings','rating');
    }
}
