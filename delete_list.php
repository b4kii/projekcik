<?php

$connection = new PDO('mysql:host=localhost;dbname=damian.halibart', 'damian.halibart', '12345678');

$checked_ids = $_POST['check_id'];

foreach ($checked_ids as $id) {
    $sql = "DELETE FROM lists WHERE listId = '$id'";
    $statement = $connection->prepare($sql); 
    $statement->execute();
}
