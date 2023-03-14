<?php

include 'connect.php';

foreach($db->query("SELECT * FROM names") as $row){
    echo $row['firstname'] . $row['lastname'] . $row['postcode'] . "<br>";
}

