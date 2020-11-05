<?php

session_start();
class Order{

    
    private $foodid;
    private $customerid;
    private $customername;
    private $amount;
//Price for 1 item
    private $total;
    //price for many items
    private $grandtotal;
    public function __construct(){

    }
    
public function setCustomerName($em){
    $this->customeremail=$em;
}
public function getCustomerName(){
    return $this->customername;
}
public function setFoodid($fid){
    $this->foodid=$fid;

}
public function getFoodid(){
    return $this->foodid;
}
public function setCustomerid($cid){
    $this->customerid=$cid;

}
public function getCustomerid(){
    return $this->customerid;
}

public function setAmount($am){
    $this->amount=$am;
}
public function getAmount(){
    return $this->amount;
}
public function setTotal($total){
    $this->total=$total;
}
public function getTotal(){
    return $this->total;
}
//find total amount
public function grandTotal(){
    
     return $this->grandtotal=$this->getAmount()*$this->getTotal();
}
public function makeOrder($pdo){

 $stmt=$pdo->prepare("SELECT id FROM usertbl WHERE fullname=?");
   $stmt->execute([$this->getCustomerName()]);
   $rs=$stmt->fetch($pdo::FETCH_ASSOC);

  print_r($rs);

   $stmt=null;

   
  $stmt=$pdo->prepare("INSERT INTO ordertbl (foodid,customerid,amount,totalcharges)VALUES(?,?,?,?)");
$stmt->execute([$this->getFoodid(),$this->getCustomerid(),$this->getAmount(),$this->grandTotal()]);

   $stmt=null;

   $_SESSION['ordersuccess']="Your order has been placed";
   header("location:Viewfoods.php");
   return "Order has been placed!";
}
}
?>