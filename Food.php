<?php

class Food{
    private $foodname;
    private $foodimage;
    private $foodquantity;
    private $fooddescription;
    private $foodprice;

public function __construct(){

}
public function setFoodName($fn){
    $this->foodname=$fn;
}
public function getFoodName(){
    return $this->foodname;
}
public function setfoodImage($fi){
    $this->foodimage=$fi;
}
public function getFoodImage(){
    return $this->foodimage;
}
public function setFoodQuantity($fq){
    $this->foodquantity=$fq;
}
public function getFoodQuantity(){
    return $this->foodquantity;
}
public function setFoodDescription($fd){
     $this->fooddescription=$fd;

} 
public function getFoodDescription(){
    return $this->fooddescription;
}
public function setFoodPrice($fp){
    $this->foodprice=$fp;
}
public function getFoodPrice(){
    return $this->foodprice;
}
public function addFood($pdo){
    
    $foodimagename=$this->getFoodImage()['name'];
    $tmp_location=$this->getFoodImage()['tmp_name'];

    $filetype=substr($foodimagename,strpos($foodimagename,'.'),strlen($foodimagename));

    $newfilename=time().$filetype;
    $filepath="Assets/";

    if(move_uploaded_file($tmp_location,$filepath.$newfilename)){
        $stmt=$pdo->prepare("INSERT INTO foodtbl(foodname,foodimage,foodquantity,description,price)VALUES(?,?,?,?,?) ");
        $stmt->execute([$this->getFoodName(),$newfilename,$this->getFoodQuantity(),$this->getFoodDescription(),$this->getFoodPrice()]);
        $stmt=null;

        return "Recorded successfully!";
    }
}
}
?>