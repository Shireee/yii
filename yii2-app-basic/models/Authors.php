<?php
namespace app\models;
use yii\db\ActiveRecord;
class Authors extends ActiveRecord
{
    public $booksCount;

    public function getBook()
        {
            return $this->hasMany(Books::class, ['ID_author' => 'ID_author']);
        }
}
