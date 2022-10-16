<?php
use yii\helpers\Html;
?>
<a href="http://yii/yii2-app-basic/web/index.php?r=site%2Flab2">Lab-2</a>
<h1>Genre</h1>
<table>
 <tr>
 <thead>
    <td>ID</td>
    <td>Genre</td>
    <td>Description</td>
  </tr>
  </thead>
  <?php foreach ($genres as $genre): ?>
  <tbody>
      <td><?= Html::encode("{$genre->ID_genre}") ?> </td>
     <td><?= Html::encode("{$genre->Name}") ?> </td>
     <td><?= Html::encode("{$genre->Description}") ?> </td>
  </tbody>
  <?php endforeach; ?>
</table>