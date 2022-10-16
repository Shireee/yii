<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RestoranForm extends Model
{
    public $name;
    public $email;
    public $date;
    public $age;
    public $kitchen;
    public $recommend;
    public $review;
    
    public function pars(){
        if (!ctype_graph($this->review)){
            $this->addError("В коментарии не должно быть пробелов");
        }
    }

    public function rules()
    {
        return [
            ['email', 'email'],
            ['name', 'string', 'length' => [5,30] ],
            [['date'], 'date', 'format'=>'php:Y-m-d'],
            [['age'], 'integer', 'min' => 18, 'max' => 100],
            [['name', 'email','date','age','kitchen','recommend'], 'required','message' => 'Заполните поле'],
            ['review', 'pars','message' => 'В коментарии не должно быть пробелов']
];
    }
}