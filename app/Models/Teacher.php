<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Teacher extends Model
{
    use HasFactory;
    
    public function evaluation_ratings()
    {
        return $this->hasMany(Evaluation_rating::class);
    }
    public function students()
    {
        return $this->hasManyThrough( Evaluation_rating::class,User::class,);
    }
    
    // public function criterias()
    // {
    //     return $this->hasManyThrough(Criteria::class, Evaluation_rating::class);
    // }
    // public function questinaires()
    // {
    //     return $this->hasManyThrough(Questinaire::class, Question::class);
    // // }
    public function scopeWithAvgRating(Builder $query):Builder 
    {
        return $query->withAvg('evaluation_ratings','rating');
        // if(!$teacher_id){
        //     $query->withAvg('evaluation_ratings','rating');
        // }else{
        //      dd($teacher_id);
        //     $query->withAvg('evaluation_ratings','rating')->where('id',$teacher_id);
        // }
        // return $query;
      
    }

}
