<?php

include_once("dbconnect.php");
include_once("User.php");

$connection=new DBConnector();
$pdo=$connection->connectToDB();


$user=new User();
$user->logout($pdo);


?>