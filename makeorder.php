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
	        <meta name="viewport" content="width=device-width" initial-scale="1.0">
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
            <script src="makeorder.js"></script>
           
           <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <?php       
            
            if(isset($_SESSION['user'])){
                   $stmt=$pdo->prepare("SELECT id FROM usertbl WHERE fullname=?");
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
                                  <a href="profile.php" class="nav-link active">Go to profile</a>
                            </li>
                       </ul>
                  </div>
                 <div class="btn-log">
                         <form action="logout.php" method="post">
                              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onClick="myFunction()">Logout</button>
                        </form>
                 </div>
            </div>
               <div class="ordercontainer">
                     <form class="form-container" action="#" method="#">
                            <h1 > Order item</h1>
                                 <input type="hidden" name="custname" id="custname" value="<?php echo $row['id']?>">
                                    <div class="form-group col-sm-7">
                                          <label for="foodname">Name of Food</label>
                                               <input  type="text" class="form-control" name="food_name" id="food_name" required>
                                    </div>
                                    <div class="form-group col-sm-7">
                                          <label for="foodquantity">Food Quantity</label>
                                               <input  type="text" class="form-control" name="food_quantity" id="food_quantity" required>
                                   </div>
                                   <div class="form-group col-sm-7">
                                            <button type="submit" class="btn btn-outline-primary" id="orderbtn">Place Order</button>
                                   </div>
                      </form>
                     <div class="ordercontainer">
                           <form class="form-container" action="#" method="#">
                               <h1>Check  status</h1>
                               <div class="form-group col-sm-7">
                                          <label for="order_id">Order Id</label>
                                               <input  type="text" class="form-control" name="order_status" id="order_status" required>
                                   </div>
                                   <div class="form-group col-sm-7">
                                            <button type="submit" class="btn btn-outline-primary" id="checkorderbtn">Check Order</button>
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