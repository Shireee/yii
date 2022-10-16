<?php
use yii\helpers\Html;
?>
<a href="http://yii/yii2-app-basic/web/index.php?r=site%2Flab2">Lab-2</a>
<h1>Year between 1900 2000 </h1>
<table>
 <tr>
 <thead>
       <td>ID</td>
       <td>Name</td>
       <td>Description</td>
       <td>Year of creating</td>
  </tr>
  </thead>
  <?php foreach ($books as $book): ?>
  <tbody>
                <td><?= Html::encode("{$book->ID_book}") ?> </td>
                <td><?= Html::encode("{$book->Name}") ?> </td>
                <td><?= Html::encode("{$book->Description}") ?> </td>
                <td><?= Html::encode("{$book->Year_of_creating}") ?> </td>
  </tbody>
  <?php endforeach; ?>
</table>
<style>
