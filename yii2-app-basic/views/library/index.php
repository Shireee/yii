<?php
use yii\helpers\Html;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($books as $book): ?>
    <li>
        <?= Html::encode("{$book->Description}") ?>:
    </li>
<?php endforeach; ?>
</ul>
