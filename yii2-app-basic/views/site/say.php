<?php

try{
    $user = 'root';
    $DBH = new PDO ('mysql: host=localhost; port=3307; dbname=library; charset=utf8', $user);

    $stmt = $pdo->query('SELECT * from authors');
    while ($row = $stmt->fetch())
    {
    echo $row['name'] . "\n";
    }

}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>