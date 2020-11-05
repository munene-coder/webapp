<?php

include 'dbconnect.php';
include 'Food.php';
include 'order.php';

$connection=new DBConnector();
$pdo=$connection->connectToDB();

$customerid=$_POST['customerid'];
$foodid=$_POST['foodid'];
$quantity=$_POST['quantity'];
$foodprice=$_POST['foodprice'];


$order=new Order();

$order->setCustomerid($customerid);
$order->setFoodid($foodid);
$order->setAmount($quantity);
$order->setTotal($foodprice);

$order->makeOrder($pdo);


?>