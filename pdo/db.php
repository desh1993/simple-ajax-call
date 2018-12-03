<?php
$hostname='localhost';
$username='root';
$password='desh931223';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=ajaxtest",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    echo 'Connected to Database<br/>';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?> 