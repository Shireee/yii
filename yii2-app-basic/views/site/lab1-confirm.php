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
    <div class="form">
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')->label('Ваше имя') ?>
<?= $form->field($model, 'email')->label('Ваш Email') ?>
<?= $form->field($model, 'age')->label('Возраст')->textInput(['type' => 'number']) ?>
<?= $form->field($model, 'date')->label('Дата посещения')->input('date')  ?>
<?= $form->field($model, 'kitchen')->label('Любимая кухня')->dropDownList(['0' => 'Русская','1' => 'Японская','2'=>'Китайская'], ['prompt' => 'Выберите кухню']); ?>
<?= $form->field($model, 'recommend')->label('Порекомендуете нас друзьям?') -> radioList( ['да' => 'Да','нет' => 'Нет', ] ); ?>
<?= $form->field($model, 'review')->label('Текст отзыва')->textarea(['rows' => '6']) ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
    </div>
<?php ActiveForm::end(); ?>
<div class="backForm">
<p>Вы ввели следующую информацию:</p>
<ul>
    <li><label>Ваше имя</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Ваш е-mail</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Дата посещения</label>: <?= Html::encode($model->date) ?></li>
    <li><label>Ваш возраст</label>: <?= Html::encode($model->age) ?></li>
    <li><label>Любимая кухня</label>: <?= Html::encode($model->kitchen) ?></li>
    <li><label>Порекомендуете нас друзьям?</label> <?= Html::encode($model->recommend) ?></li>
    <li><label>Текст отзыва</label>: <?= Html::encode($model->review) ?></li>
</ul>
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
    .backForm{
        display: inline-block;
        margin-left: 50px;
    }
    .form{
        width: 500px;
        float: left;

    }
    
</style>
