<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class AuthorForm extends ActiveRecord
{
        public $ID_author;
        public $FIO;
        public $Birthday;
        public $Deathday;

    public function rules()
    {
        return [
            [['ID_author','FIO', 'Birthday', 'Deathday'], 'safe']
        ];
    }
}