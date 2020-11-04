<?php
include_once "User.php";
include_once "dbconnect.php";

$email=$_POST['email'];
$password=$_POST['password'];



$connection=new DBConnector();



$pdo=$connection->connectToDB();

$user=new User();

$user->setEmail($email);
$user->setPassword($password);


 echo $user->login($pdo);







?>