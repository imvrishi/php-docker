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

$redis = new Redis();
$redis->connect('redis', 6379);
echo "Connected <br/>";

echo "Server is running: " . $redis->ping();

echo "Redis stored value (age): " . $redis->get('age');
