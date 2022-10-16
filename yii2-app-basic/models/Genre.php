<?php
namespace app\models;
use yii\db\ActiveRecord;
class Genre extends ActiveRecord
{
       public function getGener()
          {
            return $this->hasMany(Books::class, ['ID_genre' => 'ID_genre']);
          }
}
