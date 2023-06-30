<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Criteria extends Model
{
    use HasFactory;

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function evaluation_ratings()
    {
        return $this->hasManyThrough(Evaluation_rating::class,Question::class);
    }
    public function scopeGetAvgRatingForTeacherPerCriteria(Builder $query,$teacher_id):Builder
    {
        // dd($teacher_id);
        return $query->withAvg(['evaluation_ratings'=>fn($q)=>$q->where('teacher_id',$teacher_id)] ,'rating');
            // dd($query->get());
    }
}
