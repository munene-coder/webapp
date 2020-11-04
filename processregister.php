
<?php

include_once './dbconnect.php';
include_once './User.php';

$connection=new DBconnector();
$pdo=$connection->connectToDB();

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$profilephoto=$_FILES['profilephoto'];
$address=$_POST['address'];
$password=$_POST['password'];

$user=new User();

$user->setEmail($email);
$user->setprofilePhoto($profilephoto);
$user->setFullName($fullname);
$user->setAddress($address);
$user->setPassword($password);
 
 echo $user->register($pdo);

 



?>