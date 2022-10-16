<?php

use yii\helpers\Html;
use yii\bootstrap5\Nav;
?>
<div class="LabHead">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Лабораторная работа №2
    </p>


</div>
 <?php echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Country', 'url' => ['/country/index']],
            ['label' => 'Authors', 'url' => ['/library/task1']],
            ['label' => 'Genre', 'url' => ['/library/task2-genre']],
            ['label' => 'Books', 'url' => ['/library/task2-books']],
            ['label' => 'Queries','items'=>[
                             ['label' => 'query-1', 'url' => ['/library/query1']],
                             ['label' => 'query-2', 'url' => ['/library/query2']],
                             ['label' => 'query-3', 'url' => ['/library/query3']]]],
            ['label' => 'Save', 'url' => ['/library/save']],
            ['label' => 'Delete', 'url' => ['/library/delete']],
            ]]);
?>
<style>
    .LabHead{
        background: rgba(103, 255, 40, .4);
        font-size: 25px;
        border-radius: 8px;
    }
    p{
        margin-left: 10px;
        font-family: "Trebuchet MS", Verdana, sans-serif;
    }
    
</style>

