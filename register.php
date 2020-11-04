<?php
session_start();
?>

<head>
	<title>Sign Up</title>

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
	<div class="container">

	<?php
	  if(isset($_SESSION['rgstrsuccess'])){
		  ?>

   <div class="alert alert-success">
   <?php
	 echo $_SESSION['rgstrsuccess'] ;
	 unset($_SESSION['rgstrsuccess']); 
   ?>
   </div>
		  <?php
	  }
	?>
	  
		<div class="form-container">
		<h1 id="registerheader">Sign Up</h1>
		<form  action="processregister.php" method="POST" enctype="multipart/form-data">
			<div class="form-group col-sm-7">
				<label for="fname">Fullname</label>
				<input type="text" id="fname" name="fullname" class="form-control" placeholder="type your fullname"  required >
			</div>
		
           <div class="form-group col-sm-7"> 
           	<label for="email">Email</label>
           	<input type="email" id="email" name="email" class="form-control" placeholder="type your email"  required>
           </div>
		   <div class="form-group col-sm-7">
		   <label for="profilephoto">Profile picture</label>
		   <input type="file"  name="profilephoto" id="profilephoto" required>

		   </div>
           <div  class="form-group col-sm-7">
           	<label for="address">Address</label>
           	<input type="text" id="address" name="address" class="form-control" placeholder="type your address"  required>
           </div>
           <div class="form-group col-sm-7" >
           	<label for="pass">Password</label>
           	<input type="password" id="pass" name="password" class="form-control" placeholder="type your password"  required>
           </div>
           <div class="form-group col-sm-7">
           <button type="submit" class="btn btn-outline-primary">Register</button>
           </div>
           <div class="form-group">
           	Already have an account? <a href="login.php">Login</a>
           </div>
		</form>
          </div>
	</div>
	</body>