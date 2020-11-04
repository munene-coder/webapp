<?php
session_start();
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
           <script src="test.js"></script>
</head>
<body >
  
     
         <?php
             if(isset($_SESSION['user'])){
              ?>
               <div class="navbar navbar-dark bg-dark" style="color:white">
              <div class="navbar navbar-expand-sm">
              <ul class="navbar-nav">
              <li class="nav-item" >
              <a class="nav-link" href="#" style="color:white">
              <?php echo "Welcome, ".  $_SESSION['user'];?>
              </a>
              </li>
               </ul>
               </div>
               <form action="logout.php" method="post">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onClick="myFunction()">Logout</button>
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
               <form action="login.php" method="post"> 
               <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Login</button>
               </form>
               </div>
               <?php
             }
            ?>

      
    
  
</body>




