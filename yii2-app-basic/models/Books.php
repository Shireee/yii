<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Authors;
use app\models\Genre;
class Books extends ActiveRecord
{
    public function getAuthor()
        {
            return $this->hasOne(Authors::class, ['ID_author' => 'ID_author']);
        }
    public function getGenre()
               {
                   return $this->hasOne(Genre::class, ['ID_genre' => 'ID_genre']);
               }
}
