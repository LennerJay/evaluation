<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Criteria;
use App\Models\Evaluation_rating;
use App\Models\Question;
use App\Models\Questionaire;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Evaluation_rating::factory()->create(['user_id'=> $user->id,'question_id'=>$question->id]);
        // User::factory(200)->create();
        // Teacher::factory(2)->BSIT()->create();
        // Teacher::factory(2)->BEED()->create();
        // Teacher::factory(2)->BSHRM()->create();

        Questionaire::factory()->create(['title'=>'First Semester','description'=>'evaluation for 1st semester'])->each(function($questionaire){
            $users = User::factory(200)->create();
            $teachers1 = Teacher::factory(1)->BSIT()->create();
            $teachers2 = Teacher::factory(1)->BEED()->create();
            $teachers3 = Teacher::factory(1)->BSHRM()->create();
            // $teachers = [Teacher::factory()->BSIT()->create(),
            //             Teacher::factory()->BEED()->create(),
            //             Teacher::factory()->BSHRM()->create()
            //         ];
            Criteria::factory(1)->Ts()->create()->each(function($criteria) use ($teachers1,$teachers2,$teachers3,$questionaire,$users){
                $questions =  Question::factory(10)->create(['criteria_id'=>$criteria->id,'questionaire_id'=>$questionaire->id]);
             
                foreach($teachers1 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                foreach($teachers2 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                foreach($teachers3 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                
            });
            Criteria::factory(1)->Cm()->create()->each(function($criteria) use ($teachers1,$teachers2,$teachers3,$questionaire,$users){
                $questions =  Question::factory(10)->create(['criteria_id'=>$criteria->id,'questionaire_id'=>$questionaire->id]);
             
                foreach($teachers1 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                foreach($teachers2 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                foreach($teachers3 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                
            });
            Criteria::factory(1)->Cs()->create()->each(function($criteria) use ($teachers1,$teachers2,$teachers3,$questionaire,$users){
                $questions =  Question::factory(10)->create(['criteria_id'=>$criteria->id,'questionaire_id'=>$questionaire->id]);
             
                foreach($teachers1 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                foreach($teachers2 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                foreach($teachers3 as $teacher){
                    foreach($users as $user){
                        foreach($questions as $question){
                            Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
                        }
                    }
                }
                
            });
        });





















        // Questionaire::factory(1)->create()->each(function($questionaire){
        //     Criteria::factory(1)->Ts()->create()->each(function($criteria) use ($questionaire){
                
        //         $questions = Question::factory(20)->create(['criteria_id'=>$criteria->id,'questionaire_id'=>$questionaire->id]);
        //         Teacher::factory(2)->BSIT()->create()->each(function($teacher)use($questions){
        //             User::factory(10)->create()->each(function($user) use ($teacher,$questions){
        //                 foreach($questions as $question){
        //                     Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
        //                 }
        //             });
        //         });
        //     });
        //     Criteria::factory(1)->Cm()->create()->each(function($criteria) use ($questionaire){
        //         $questions = Question::factory(20)->create(['criteria_id'=>$criteria->id,'questionaire_id'=>$questionaire->id]);
        //             Teacher::factory(2)->BEED()->create()->each(function($teacher)use($questions){
        //                 User::factory(10)->create()->each(function($user) use ($teacher,$questions){
        //                     foreach($questions as $question){
        //                         Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
        //                     }
        //                 });
        //             });
        //     });
        //     Criteria::factory(1)->Cs()->create()->each(function($criteria) use ($questionaire){
        //         $questions =  Question::factory(20)->create(['criteria_id'=>$criteria->id,'questionaire_id'=>$questionaire->id]);
        //         Teacher::factory(2)->BSHRM()->create()->each(function($teacher)use($questions){
        //             User::factory(10)->create()->each(function($user) use ($teacher,$questions){
        //                 foreach($questions as $question){
        //                     Evaluation_rating::factory()->create(['user_id'=>$user->id,'teacher_id'=>$teacher->id,'question_id'=>$question->id]);
        //                 }
        //             });
        //         });
        //     });
          
        // });

       
    





        // Teacher::factory(5)->create();
        // User::factory(5)->create();
        // ---this is to ensure to have different criteria---
        // Criteria::factory(1)->Ts()->create();
        // Criteria::factory(1)->Cm()->create();
        // Criteria::factory(1)->Cs()->create();
        //----------------------------------------------
        
    }
}
