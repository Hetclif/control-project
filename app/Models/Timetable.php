<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    const NUMERATOR_NUM = 1;
    const NUMERATOR_DENUM = 2;

    const WEEK_MUN = 1;
    const WEEK_TUE = 2;
    const WEEK_WED = 3;
    const WEEK_THU = 4;
    const WEEK_FRI = 5;
    const WEEK_SAT = 6;

    const LESSON_1 = 1;
    const LESSON_2 = 2;
    const LESSON_3 = 3;
    const LESSON_4 = 4;

    protected $table = 'timetables';
    protected $guarded = false;

    static function getNumerator(){
        return [
            self::NUMERATOR_NUM => 'Числитель',
            self::NUMERATOR_DENUM => 'Знаменатель',
        ];
    }

    public function getNumeratorTitleAttribute(){
        return self::getNumerator()[$this->numerator];
    }

    static function getWeekday(){
        return [
             self::WEEK_MUN => 'Понедельник',
             self::WEEK_TUE => 'Вторник',
             self::WEEK_WED => 'Среда',
             self::WEEK_THU => 'Четверг',
             self::WEEK_FRI => 'Пятница',
             self::WEEK_SAT => 'Суббота',
        ];
    }

    public function getWeekdayTitleAttribute(){
        return self::getWeekday()[$this->weekday];
    }

    static function getLesson(){
        return [
            self::LESSON_1 => '1 пара',
            self::LESSON_2 => '2 пара',
            self::LESSON_3 => '3 пара',
            self::LESSON_4 => '4 пара',
        ];
    }

    public function getLessonTitleAttribute(){
        return self::getLesson()[$this->lesson_number];
    }
}
