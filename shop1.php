<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="body.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>ATN SHOP</title>
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
<body>
 <div>
	
	<a class="btn btn-danger btn-rounded" href="logout.php"><span class="btn1">Logout</span></a>
	<a href="insert.php" class="btn btn-info" role="button" >ADD</a>
	<a href="update.php" class="btn btn-info" role="button" >UPDATE</a>
	
	
	<br><br>
	
</div>
	</div>
<h1> shop  </h1>

</body>
</head>
<?php 
    include("local.php");
    
    $pg_conn = pg_connect($conn_string);
    
    
    $result = pg_query($pg_conn, "select * from product;");
    
    
    //var_dump(pg_fetch_all($result));

  
    include("displayDBadmin.php");
    display_table($result);
    pg_close();
    ?>