<?php
session_start();
include 'dbconnect.php';

    
$connection=new DBConnector();
$pdo=$connection->connectToDB();

?>
<head>
	        <!--Bootstrap css-->
	        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
	        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
          <!--Bootstrap js and Jquery-->
	        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
	        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	        </script>
	        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
	         integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
	        </script>
        	<link rel="stylesheet" type="text/css" href="style.css">
	         <meta name="viewport" content="width=device-width" initial-scale="1.0">
</head>
<body> 

<?php

if(isset($_SESSION['user'])){
    $stmt=$pdo->prepare("SELECT fullname,address_city,email,profile_photo FROM usertbl WHERE fullname=?");
    $stmt->execute([$_SESSION['user']]);
  
    $row=$stmt->fetch($pdo::FETCH_ASSOC);

    $stmt="null";
?>
         <div class="navbar navbar-dark bg-dark" style="color:white">
                 <div class="navbar navbar-expand-sm"> 
                      <ul class="navbar-nav"> 
                          <li class="nav-item" >
                             <a class="nav-link" href="#" style="color:white">
                               <?php echo "Welcome, ".  $_SESSION['user'];?>
                             </a>
                           </li>
                            <li class="nav-tem">
                                  <a href="makeorder.php" class="nav-link active">Order an Item</a>
                            </li>
                       </ul>
                  </div>
                 <div class="btn-log">
                         <form action="logout.php" method="post">
                              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onClick="myFunction()">Logout</button>
                        </form>
                 </div>
            </div>
        <div class="container">
                 <form class="form-container" action="#" method="post">
                       <h1 >My Profile</h1>
   
                          <div class="form-group col-sm-7">
                                 <label for="fullname">Name</label>
                                 <input  type="text" class="form-control" value=<?php echo $row['fullname'];?>>
                          </div>
                          <div class="form-group col-sm-7">
                                <label for="email">Email</label>
                                <input  type="email" class="form-control" value=<?php echo $row['email'];?>>
                         </div>
                         <div class="form-group col-sm-7">
                                <label for="address">Address</label>
                                <input  type="text" class="form-control" value=<?php echo $row['address_city'];?>>
                        </div>
                        <div class="form-group col-sm-7">
                                <label for="profilephoto">Profile Photo</label>
                                <input type="file" class="form-control" name="profilephoto">
                        </div>
                        <div class="form-group col-sm-7">
                                <button type="submit" class="btn btn-outline-primary">Update Profile</button>
                         </div>
                 </form>

      </div>
      <?php
             }
             else{
               ?>
              <div class="navbar navbar-dark bg-dark" style="color:white">
                      <?php
                            echo "You are not logged in";
                      ?>
                   <div class="btn-log">
                         <form action="logout.php" method="post">
                              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Login</button>
                        </form>
                    </div>
             </div>
                   <?php
             }
                 ?>
         
</body>

