<?php
session_start();

// Displaying whole list

$uid = $_SESSION['userid'];

$connection = new PDO('mysql:host=localhost;dbname=damian.halibart', 'damian.halibart', '12345678');

$sql = "SELECT * FROM users JOIN lists WHERE users.userId = lists.userId AND lists.userId = '$uid' ORDER BY lists.listId DESC;";

$statement = $connection->prepare($sql);
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