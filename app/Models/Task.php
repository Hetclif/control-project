<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    const COMPLETE_IN_PROC = 1;
    const COMPLETE_YES = 2;
    const COMPLETE_OVERDUE =3;

    protected $table = 'tasks';
    protected $guarded = false;

    static function getCompeleted(){
        return [
            self::COMPLETE_IN_PROC => 'В процессе',
            self::COMPLETE_YES => 'Выполнена',
            self::COMPLETE_OVERDUE => 'Просрочена',
        ];
    }

    public function getCompletedTitleAttribute(){
        return self::getCompeleted()[$this->completed];
    }
}
