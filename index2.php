<?php

$hostname = 'localhost';

$username = 'adminaccount';

$password = ')6@*7PKRU.GXwSWA';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>