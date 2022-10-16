<?php
use yii\helpers\Html;
?>
<a href="http://yii/yii2-app-basic/web/index.php?r=site%2Flab2">Lab-2</a>
<h1>Authors</h1>
<table>
 <tr>
 <thead>
    <td>ID</td>
    <td>FIO</td>
    <td>Birthday</td>
    <td>Deathday</td>
  </tr>
  </thead>
  <?php foreach ($authors as $author): ?>
  <tbody>
      <td><?= Html::encode("{$author->ID_author}") ?> </td>
      <td><?= Html::encode("{$author->FIO}") ?> </td>
      <td><?= Html::encode("{$author->Birthday}") ?> </td>
      <td><?= Html::encode("{$author->Deathday}") ?> </td>
  </tbody>
  <?php endforeach; ?>
</table>