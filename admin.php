<!-- START CODE OF ADMIN PAGE -->
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="body.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>ATN ADMIN</title>
	<link rel = "icon" type = "image/png" href = "https://media.giphy.com/media/VbnUQpnihPSIgIXuZv/giphy.gif">
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
       crossorigin="anonymous"></script>

</head>

<body style="background: #F5F5F5;>
	
    <div class="container">

    <div>
	<a class="btn btn-danger btn-rounded" href="logout.php"><span class="btn1">Logout</span></a>
	<a href="insert.php" class="btn btn-info" role="button" >ADD</a>
	<a href="update.php" class="btn btn-info" role="button" >UPDATE</a>
	
	
	<br><br>
	<div class="loading">
	<span>ATN SHOP</span>
	</div><br>
</div>
	 <div> 
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-lg">
         
        </ul>
      </nav>
	   <?php
include 'local.php';
if (isset($_POST['submit'])) {
$id = $_POST['id'];
$sql = "delete from product where id = '$id'";
$conn = pg_connect($conn_string);
$result = pg_query($conn, $sql);
if($result){
  function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
function_alert("Deleted successfully!");
} else {
  echo pg_last_error($conn);
}
}
?>
<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2021 Copyright:
  <a href="https://www.facebook.com/tuanle.27.3/"> Le Anh Tuan</a>
</div>
<!-- Copyright -->

</footer>
<!-- **********************END CODE OF ADMIN PAGE********************* -->

<!--****************************** START CODE OF DELETE FUNCTION****************************** -->
<!DOCTYPE html>
<html>
 <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
       crossorigin="anonymous"></script>
    

        <form  method="POST"  action="admin.php">
            Input ID to delete:<br>
            <input  type="text"  id="id" name="id">            
           <button  type="submit" class="btn btn-outline-danger" name="submit">Delete</button>
        </form>
   <style>
form {
margin-top: 50px;
font-family: "Calbiri Black", "Calbiri Bold", Gadget, sans-serif;
text-transform:auto;
float: right;
width: 74%;
  
}

</style>
</html>  
<br>
      <!-- **************************************** END CODE OF DELETE FUNCTION****************************** *******************************************-->

	  
	  <!-- *******************DISPLAY RESULT DATABASE****************** -->
        <?php 
    include("local.php");
    
    $pg_conn = pg_connect($conn_string);
    
    
    $result = pg_query($pg_conn, "select * from product;");
    
    
    //var_dump(pg_fetch_all($result));

	
    include("displayDBadmin.php");
    display_table($result);
	
    pg_close();
    ?>
  <!-- END DISPLAY DATABASE****************** -->
<!-- refresh page -->
<script>
    $(document).ready(function(){
        function getData(){
            $.ajax({
                type: 'POST',
                url: 'displayDBadmin.php',
                success: function(data){
                    $('#output').html(data);
                }
            });
        }
        getData();
        setInterval(function () {
            getData(); 
        }, 4000);  // it will refresh your data every 1 sec

    });
</script>
<!-- refresh page -->
  
<!--************************CSS ***************************************-->
<style>


body {background:#f3efe8;}
.loading {
  font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
  text-transform:uppercase;
  
  width:150px;
  text-align:center;
  line-height:50px;
  
  position:absolute;
  left:0;right:0;top:10%;
  margin:auto;
  transform:translateY(-50%);
}


.loading span {
  position:relative;
  z-index:999;
  color:#fff;
}
.loading:before {
  content:'';
  background:#61bdb6;
  width:128px;
  height:36px;
  display:block;
  position:absolute;
  top:0;left:0;right:0;bottom:0;
  margin:auto;
  
  animation:2s loadingBefore infinite ease-in-out;
}

@keyframes loadingBefore {
  0%   {transform:translateX(-14px);}
  50%  {transform:translateX(14px);}
  100% {transform:translateX(-14px);}
}


.loading:after {
  content:'';
  background:#ff3600;
  width:17px;
  height:60px;
  display:block;
  position:absolute;
  top:0;left:0;right:0;bottom:0;
  margin:auto;
  opacity:.5;
  
  animation:2s loadingAfter infinite ease-in-out;
}

@keyframes loadingAfter {
  0%   {transform:translateX(-50px);}
  50%  {transform:translateX(50px);}
  100% {transform:translateX(-50px);}
}
</style>
</body>

</html>