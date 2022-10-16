<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SearchForm extends Model
{
    public $word;

    public function rules()
    {
        return [
            ['word', 'string'],
        ];
    }
}