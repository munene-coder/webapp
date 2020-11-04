
<?php

include_once "dbconnect.php";
include_once "User.php";

$connection=new DBconnector();

$pdo=$connection->connectTODB();

$email=$_POST['email'];
$password=$_POST['oldpass'];
$newpassword=$_POST['newpass'];


$user=new User();

$user->setEmail($email);
$user->setPassword($password);
$user->setNewPassword($newpassword);

 echo $user->changePassword($pdo);
 $pdo=$connection->closeDB();



?>