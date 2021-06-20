<?php
session_start();
include("local.php");
?>
 <?php


if (isset($_POST['submit'])) {
	$name_shop = $_POST['shopname'];
    $id_product = $_POST['productid'];
	$name_product = $_POST['productname'];
	$price_product = $_POST['price'];
	$amount_product = $_POST['amount'];
    $pg_conn = pg_connect($conn_string);
	
    $result = pg_query($pg_conn, "INSERT INTO product(shop_name, product_id, product_name, price, amount) VALUES ('$name_shop','$id_product','$name_product','$price_product','$amount_product');");
	if ( $result ) {
        
        function function_alert($message) {
      
            // Display the alert box 
            echo "<script>alert('$message');</script>";
        }
        function_alert("Record Successfully Added!");
    }

}

?>

<!DOCTYPE  html>
<html>
<title>Edit ATN</title>
  <link rel = "icon" type = "image/png" href = "https://media.giphy.com/media/Ll22OhMLAlVDb8UQWe/giphy.gif">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <body>
   <div>
<a class="btn btn-danger btn-rounded"  style="float:left" href="admin.php"><span class="btn1">Back</span></a>
		</div>
		
		
		
		<div class="form-group">
		<center>
        <h2>ATN Insert Forms</h2>
        <form method="POST">
           <label for="email">Shop Name:</label>
		   <br>
            <input  type="text"  name="shopname">
            <br>
            <label for="email">ProductID:</label>
			<br>
            <input  type="text"  name="productid">
            <br>
			<label for="email">Product Name:</label><br>
			<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="productname">
			 
			  <option selected>Select product below</option>
			  <option value="Car">Car</option>
			  <option value="Drone">Drone</option>
			  <option value="Camera">Camera</option>
			  <option value="Apple Watch">AppleWatch</option>
			  <option value="Playstation">Playstation</option>
			  <option value="Laptop">Laptop</option>
			  <option value="Headphones">Headphones</option>
			  
			</select>
           
            <br>
			<label for="email">Price:</label>
			<br>
            <input  type="text" name="price">
            <br>
            <label for="email">Amount:</label>
			<br>
            <input  type="text" name="amount">
            <br><br>
           <input  type="submit"  name="submit">
        
		   </div>
		</form>
		
		</center>
    </body>
</html>

