<?php
use yii\helpers\Html;
?>
<a href="http://yii/yii2-app-basic/web/index.php?r=site%2Flab2">Lab-2</a>
<h1>Books</h1>
<table>
 <tr>
 <thead>
    <td>ID</td>
    <td>Name</td>
    <td>Description</td>
    <td>Year of creating</td>
    <td>Author</td>
    <td>Genre</td>
  </tr>
  </thead>

 <tbody>

  <?php foreach ($books as $book): ?>
  <tbody>
     <td><?= Html::encode("{$book->ID_book}") ?> </td>
     <td><?= Html::encode("{$book->Name}") ?> </td>
     <td><?= Html::encode("{$book->Description}") ?> </td>
     <td><?= Html::encode("{$book->Year_of_creating}") ?> </td>
     <td><?= Html::encode("{$book->author->FIO}") ?> </td>
     <td><?= Html::encode("{$book->genre->Name}") ?> </td>
  </tbody>
  <?php endforeach; ?>
</table>