<?php

$connection = new PDO('mysql:host=localhost;dbname=logowanie', 'root', '');

$checked_ids = $_POST['check_id'];

foreach ($checked_ids as $id) {
    $sql = "DELETE FROM lists WHERE listId = '$id'";
    $statement = $connection->prepare($sql); 
    $statement->execute();
}
