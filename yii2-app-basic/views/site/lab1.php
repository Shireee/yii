<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="LabHead">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Лабораторная работа №1
    </p>


</div>
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

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')->label('Ваше имя') ?>
<?= $form->field($model, 'email')->label('Ваш Email') ?>
<?= $form->field($model, 'age')->label('Возраст')->textInput(['type' => 'number']) ?>
<?= $form->field($model, 'date')->label('Дата посещения')->input('date') ?>
<?= $form->field($model, 'kitchen')->label('Любимая кухня')->dropDownList(['0' => 'Русская','1' => 'Японская','2'=>'Китайская'], ['prompt' => 'Выберите кухню']); ?>
<?= $form->field($model, 'recommend')->label('Порекомендуете нас друзьям?') -> radioList( ['да' => 'Да','нет' => 'Нет', ] ); ?>
<?= $form->field($model, 'review')->label('Текст отзыва')->textarea(['rows' => '6']) ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
