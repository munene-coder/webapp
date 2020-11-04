<head>
	<title>Change Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> 
</head>
<style>
	.changepassform{
		margin-left: 500px;
		width:600px;
		height:600px;
		background-color: white;
		padding-left: 60px;
	}
		#changepassbody{
		
		background-color: #f2fbfd;
		background-size: cover;

	}
	
	.input-group{
		margin:40px;
	}
	#changepassbtn{
		background-color: black;
		color:white;
		margin-left: 100px;
		width:70px;
	}
	.footer li{
		display:inline-block;
	}
	</style>
<body id="changepassbody">
    <div class="pagewrapper">
    	<div class="changepassform">
    		<h1 id="changepasshead">Change password</h1>
    		<form id="changepassform" action="processpassword.php" method="post">
			<p class="input-group">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" class="form-control" placeholder="type your emal" required>
			</p>
    			<p class="input-group">
    			<label for="oldpassword">Old password</label>
    			<input type="password" id="oldpassword" name="oldpass" class="form-control" placeholder="type your old password" required>
    		</p>
    		<p class="input-group">
    			<label for="newpassword">New Password</label>
    			<input type="password" id="newpassword" name="newpass" class="form-control" placeholder="type your new password" required>
    		</p>
    	
    		<p class="input-group">
    			<input type="submit" id="changepassbtn" name="changepassbtn" class="form-control" value="submit">
    		</p>
    	</form>
    
    	<div class="footer">
				<ul >
				<a href="#"><li>Terms of Conditions |</li></a>
				<a href="#">	<li>Privacy Policy |</li></a>
				<a href="#">	<li>Cookie Policy</li></a>
				</ul>
			</div>
				</div>
    </div>
	</body>