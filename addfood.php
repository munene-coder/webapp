<head>
    
    <title>Add Foods</title>
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
<body>
     <div class="container">

        <form class="form-container" action="processaddfood.php" method="post" enctype="multipart/form-data">
        <h1>Add Food</h1>
            <div class="form-group col-sm-7">
            <label for="foodname">Food Name</label>
            <input type="text" class="form-control" id="foodname" name="foodname" required>
            </div>
            <div class="form-group col-sm-7">
            <label for="fooddscription">Food description</label>
            <input type="text" class="form-control" id="fooddescription" name="fooddescription" required>
            </div>
            <div class="form-group col-sm-7">
            <label for="foodprice">Food Price</label>
            <input type="text" class="form-control" id="foodprice" name="foodprice" required>
            </div>
            <div class="form-group col-sm-7">
            <label for="foodquantity">Food Quantity</label>
            <input type="text" class="form-control" id="foodquantity" name="foodquantity" required>
            </div>
            <div class="form-group col-sm-7">
            <label for="foodimage">Food Picture</label>
            <input type="file"  id="foodimage" name="foodimage" required>
            </div>
           <div class="form-group col-sm-7">
           <button type="submit" class="btn btn-outline-primary ">Add Item</button>
           </div>
        </form>
     <div>
</body>