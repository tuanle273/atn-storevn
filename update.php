<!-- START CODE OF UPDATE FUNCTION -->
<?php
session_start();
include ("local.php");
// Create connection

if (isset($_POST['submit'])) {
    $name_product = $_POST['productname'];
	$price_product = $_POST['price'];
	$amount_product = $_POST['amount'];
	$id = $_POST['id'];
    $pg_conn = pg_connect($conn_string);
	
    $result = pg_query($pg_conn, "UPDATE product SET product_name = '$name_product', price = '$price_product', amount = '$amount_product'  WHERE id = '$id';");
    if ( $result ) {
        
        function function_alert($message) {
      
            // Display the alert box 
            echo "<script>alert('$message');</script>";
        }
        function_alert("Record Successfully Updated!");
    }
}
?>

<!DOCTYPE  html>
<html>
<title>UPDATE ATN</title>
  <link rel = "icon" type = "image/png" href = "https://media.giphy.com/media/Ll22OhMLAlVDb8UQWe/giphy.gif">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <body>
    <body>
	 <div>
<a class="btn btn-danger btn-rounded"  style="float:left" href="admin.php"><span class="btn1">Back</span></a>
		</div>
	<CENTER>
        <h2>ATN Update Forms</h2>
        <form  method="POST"  action="update.php">
			ID<br>
            <input  type="text"  name="id">
            <br>
            Product Name<br>
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
            Price<br>
            <input  type="text"  name="price">
            <br>
			Amount<br>
            <input  type="text"  name="amount">
            <br><br>
            <input  type="submit"  name="submit">
        </form>
	</CENTER>
    </body>
</html>
<!-- EXIT CODE OF UPDATE FUNCTION -->