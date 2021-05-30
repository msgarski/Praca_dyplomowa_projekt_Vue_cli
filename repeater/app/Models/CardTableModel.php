<?php

namespace App\Models;

//use App\Libraries\Token;


class CardTableModel extends \CodeIgniter\Model
{
    protected $table = 'card';

    protected $allowedFields = ['question',
                                'answer',
                                'pronounciation',
                                'sentence',
                                'image',
                                'answer_sound',
                                'lesson_id',
                                'learned_at',
                                'tries',
                                'summary',
                                'fast_repeat',
                                'awkward',
                                'overlearning',
                                'last_repeat', 
                                'next_repeat', 
                                'card_awareness',
                                'total_repetitions',
                                'success_repeatitions',
                                'priority',
                                'longest_period',
                                'multiplier',
                                'reverse_ready',
                                'oneday_repeat'
                            ];

    // tutaj okreslam klasę odpowiedzialną za tworzenie obiektu card:
    protected $returnType = 'App\Entities\CardEntity';

    protected $useTimestamps = true;

    protected $validationMessages = [];

    public function amountOfCards()
    {
        return $this->select('*')
                    ->countAllResults();
    }

    public function amountOfLessonCards($lessonId)
    {
        return $this->where('lesson_id', $lessonId)
                    ->countAllResults();

    }





    // public function amountOfUserCards1($userId)
    // {
    //     return $this->select('card.question')
    //                 ->from('user')
    //                 ->join('course', 'course.user_id = user.id')
    //                 ->join('lesson', 'course.id = lesson.course_id')
    //                 ->join('card', 'lesson.id = card.lesson_id')
    //                 ->where('user.id', $userId);
                    
    // }

    // public function amountOfUserCards($userId)
    // {
    //     return $this->select('question')
    //                 ->join('course', 'course.user_id = user.id')
    //                 ->join('lesson', 'course.id = lesson.course_id')
    //                 ->join('card', 'lesson.id = card.lesson_id')
    //                 ->where('user.id', $userId)
    //                 ->findAll();
                    
    // }
}