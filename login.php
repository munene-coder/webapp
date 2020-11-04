<?php
session_start();
?>
<head>
	<title>Sign In</title>

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
	   if(isset($_SESSION['invalid'])){
		?>
     <div class="alert alert-warning" ><?php echo $_SESSION['invalid'];?></div>
		<?php
		   session_unset();
	   }
	?>	
		<div class=" form-container">
		<h1 >Login</h1>
		<form action="processlogin.php" method="post">
			<div class="form-group col-sm-7" >
				<label for="email">Email</label>
				<input type="email"  id="email" class="form-control" name="email" placeholder="use your email as your username" required>
	</div>
			<div class="form-group col-sm-7" >
				<label for="pass">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="type your password" required>
	</div>
			<div xlass="form-group col-sm-7" >
				Want to change your password? Click <a href="changepass.php">here</a>
	</div>
			<div class="form-group col-sm-7" >
				<button type="submit" class="btn btn-outline-primary"> Login</button>
	</div>
	
			<div class="form-group col-sm-7" >
				Don't have an account? <a href="register.php"> Sign Up</a>
	</div>
		
			</form>
			<div>
	</div>
	</body>