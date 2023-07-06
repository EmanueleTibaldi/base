<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=mydb');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "INSERT INTO comments VALUES ('{$_POST['comment']}');";
try {
    if ($db->exec($sql)) {
?><h1>Inserted!</h1><?php
    } else {
        ?><h1>Not inserted :( <?php echo print_r($db->errorInfo(), 1);?> </h1><?php
    }
} catch (PDOException $exception) {
    die($exception->getMessage());
}
