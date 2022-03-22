<?php
session_start();

// Adding one row of list to the table

$uid = $_SESSION['userid'];

$connection = new PDO('mysql:host=localhost;dbname=damian.halibart', 'damian.halibart', '12345678');

$todoValue =  '';

if(isset($_POST['text'])) {
    $todoValue = $_POST['text'];
}

$sql = "INSERT INTO lists (val, userId) VALUES (:val, :userId)";

$statement = $connection->prepare($sql);
$statement->execute(
    array(
        ':val' => $todoValue,
        ':userId' => $uid
    )
);

// displaying one row of todo list
$sql2 = "SELECT * FROM lists WHERE lists.userId = '$uid' ORDER BY listId DESC LIMIT 1;
";

$statement = $connection->prepare($sql2);
$statement->execute();

$result = $statement->fetchAll();
$output = '';

foreach ($result as $row) {
    $output .= '
    <tr id="tr_'.$row['listId'].'">
        <td class="check">
            <input type="checkbox" id="element_'.$row['listId'].'">
        </td>
        <td>
            <div class="list-element">'.$row['val'].'</div>
        </td>
    </tr>
    ';
}

echo $output;