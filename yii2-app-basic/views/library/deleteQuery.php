<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<a href="http://yii/yii2-app-basic/web/index.php?r=site%2Flab2">Lab-2</a>
<h1>Delete query</h1>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'ID_author')->label('id')?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
