<?php

try {
    $dbh = new PDO('mysql:host=mysql;dbname=phpdocker', 'app', 'password');
    foreach($dbh->query('SELECT * FROM lol') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch(PDOException $e) {
    echo "Error: ", $e->getMessage(), "<br/>";
    die();
}
