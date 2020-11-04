<?php
session_start();

//implement the user interface

include "Interface.php";
include_once "dbconnect.php";
$connection=new DBConnector();

class User implements UserInterface{

    private $fullname;
    private $email;
    private $address;
    private $profilephoto;
    private $password;
    private $newpassword;

 
    public function __construct(){

     

    }

    //setters
   public function setprofilePhoto($pf){

    $this->profilephoto=$pf;
   }
   public function getprofilePhoto(){
   return $this->profilephoto;
   }
    public function setFullName($fn){
        $this->fullname=$fn;

    }
    public function setEmail($em){
        $this->email=$em;

    }
    public function setAddress($ad){
        $this->address=$ad;

    }
    public function setPassword($ps){
        $this->password=$ps;

    }
    //getters
    public function getFullName(){

        return $this->fullname;
    }
    public function getEmail(){
        
        return $this->email;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setNewPassword($pass){

        $this->newpassword=$pass;
    }
    public function getNewPassword(){
        return $this->newpassword;
    }

    
    public function register($pdo){

        $filepath="Assets/";
       $profileoriginalname=$this->getprofilePhoto()['name'];

        $prflfiletyp=substr($profileoriginalname,strpos($profileoriginalname,'.'),strlen($profileoriginalname));
        $newprofilephoto=time().$prflfiletyp;

        $phototmplctn=$this->getprofilePhoto()['tmp_name'];

        if(move_uploaded_file($phototmplctn,$filepath.$newprofilephoto)){

        $query=$pdo->prepare("INSERT INTO usertbl(fullname,email,address_city,profile_photo,password)VALUES(?,?,?,?,?)");
        $query->execute([$this->getFullName(),$this->getEmail(),$this->getAddress(),$newprofilephoto,$this->getPassword()]);
        $query=null;

        $_SESSION['rgstrsuccess']="Registered successfully!";
        header("location:register.php");

        }
    }

    public function login($pdo){

        $stmt=$pdo->prepare("SELECT  fullname, profile_photo, password FROM usertbl WHERE email=? ");
        $stmt->execute([$this->getEmail()]);

        $row= $stmt->fetch($pdo::FETCH_ASSOC);
        $stmt=null;

        if($this->password==$row['password']){
            $_SESSION['profile']=$row['profile_photo'];
            $_SESSION['user']=$row['fullname'];  
            header("location:profile.php");
        }
        else {
            
            $_SESSION['invalid']="invalid login.Please try again.";
            header("location:login.php");
        }
    }
    public function changePassword($pdo){

        $stmt=$pdo->prepare("SELECT password FROM usertbl WHERE email=?");
        $stmt->execute([$this->getEmail()]);

        $row=$stmt->fetch($pdo::FETCH_ASSOC);
        $stmt=null;

        if($this->password==$row['password']){
            $stmt=$pdo->prepare("UPDATE usertbl SET password=? WHERE email=?");
            $stmt->execute($this->getNewPassword,$this->getEmail());
            $stmt=null;

            return "Password updated successfully";
        }
        else{
            return "Error updating password";
        }

    }
    public function logout($pdo){

        //free all session variables
        session_unset();
        //destroy the session
        session_destroy();
        header("location:login.php");
    }
  
 

}

?>

