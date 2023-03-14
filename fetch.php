<?php

include 'connect.php';

$query = $db->query("SELECT * FROM names");

while($row = $query->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>" . var_dump($row) . "</pre>";
}

