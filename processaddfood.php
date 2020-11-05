<?php
include "dbconnect.php";
include "Food.php";

$foodname=$_POST['foodname'];
$fooddescription=$_POST['fooddescription'];
$foodimage=$_FILES['foodimage'];
$foodquantity=$_POST['foodquantity'];
$foodprice=$_POST['foodprice'];

$connection=new DBConnector();
$pdo=$connection->connectToDB();

$fooditem=new Food();

$fooditem->setFoodName($foodname);
$fooditem->setFoodDescription($fooddescription);
$fooditem->setFoodImage($foodimage);
$fooditem->setFoodQuantity($foodquantity);
$fooditem->setFoodPrice($foodprice);

 echo $fooditem->addFood($pdo);




?>