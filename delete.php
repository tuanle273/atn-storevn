 <?php
include 'local.php';
if (isset($_POST['submit'])) {
$idproduct = $_POST['product_id'];
$sql = "delete from product where product_id = '$idproduct'";
$conn = pg_connect($conn_string);
$result = pg_query($conn, $sql);
if($result){
  echo "Deleted successfully\n";
  
} else {
  echo pg_last_error($conn);
}
}
?>
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
            Input product ID to delete:<br>
            <input  type="text"  id="product_id" name="product_id">
            <br>     
           <button  type="submit" class="btn btn-warning" name="submit">Delete</button>
        </form>
   <style>
form {
font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
text-transform:auto;

  
}

</style>
</html>  