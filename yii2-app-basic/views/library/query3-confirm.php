<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<a href="http://yii/yii2-app-basic/web/index.php?r=site%2Flab2">Lab-2</a>
<h1>Seach book by word</h1>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'word')?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
<table>
 <tr>
 <thead>
    <td>ID</td>
    <td>Name</td>
  </tr>
  </thead>
  <?php foreach ($books as $book): ?>
  <tbody>
      <td><?= Html::encode("{$book->ID_book}") ?> </td>
      <td><?= Html::encode("{$book->Name}") ?> </td>
  </tbody>
  <?php endforeach; ?>
</table>