<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Books;
use app\models\Authors;
use app\models\Genre;
use app\models\SearchForm;
use app\models\AuthorForm;


class LibraryController extends Controller
{
    public function actionTask1()
    {
        $authors = Authors::find()
        ->all();

        return $this->render('task1', ['authors' => $authors ]);
    }
    public function actionTask2Genre()
        {
            $genres = Genre::find()
            ->all();

            return $this->render('task2Genre', ['genres' => $genres ]);
        }
    public function actionTask2Books()
        {
            $books = Books::find()->with('author','genre')->all();  //жадная загрузка

            return $this->render('task2Books', ['books' => $books]);

        }
    public function actionQuery1(){
        $books = Books::find()
        ->where(['between', 'Year_of_creating', '1900-1-1','2000-1-1'])
        ->orderBy('Year_of_creating')
        ->all();
        return $this->render('query1', ['books' => $books ]);
    }
    public function actionQuery2(){
            $authors = Authors::find()
            ->select([
                    '{{authors}}.*', // получить все атрибуты покупателя
                    'COUNT({{books}}.ID_author) AS booksCount' // вычислить количество заказов
                ])
            ->joinWith('book')
            ->groupBy('{{authors}}.ID_author')
            ->all();
            return $this->render('query2', ['authors' => $authors]);
        }
    public function actionQuery3(){

           $model = new SearchForm();

           if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $books = Books::find()
                       ->where(['like','Name', $model->word])
                       ->all();

                       return $this->render('query3-confirm', ['books' => $books, 'model' => $model ]);
           } else {
               // либо страница отображается первый раз, либо есть ошибка в данных
               return $this->render('query3', ['model' => $model]);
           }

    }
    public function actionSave(){

        $model = new AuthorForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

             $author = new Authors();
             $author->FIO = $model->FIO;
             $author->Birthday = $model->Birthday;
             $author->Deathday = $model->Deathday;
             $author->save();
             Yii::$app->session->setFlash('success', "Автор добавлен");
             return $this->render('saveQuery', ['model' => $model ]);
             } else {
             // либо страница отображается первый раз, либо есть ошибка в данных
             return $this->render('saveQuery', ['model' => $model]);
              }
    }
    public function actionDelete(){

        $model = new AuthorForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

             $author = Authors::findOne($model->ID_author);
             $author->FIO = $model->ID_author;
             $author->delete();
             Yii::$app->session->setFlash('success', "Автор удалён");
             return $this->render('deleteQuery', ['model' => $model ]);
             } else {
             // либо страница отображается первый раз, либо есть ошибка в данных
             return $this->render('deleteQuery', ['model' => $model]);
              }
    }
}
