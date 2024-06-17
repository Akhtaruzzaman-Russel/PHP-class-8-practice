<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection


$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// echo "Database Connection Successful";

// // Close connection

// mysqli_close($conn);


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>

  <?php

    $sql = "SELECT * FROM sales";
    $result = mysqli_query($conn, $sql);


    ?>

<?php while($row=mysqli_fetch_assoc(   $result) ){ ?>
    


    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <th scope="row"><?php echo $row['customer_name']; ?></th>
      <th scope="row"><?php echo $row['category_name']; ?></th>
      <th scope="row"><?php echo $row['product_name']; ?></th>
      <th scope="row"><?php echo $row['brand_name']; ?></th>
      <th scope="row"><?php echo $row['unit_price']; ?></th>
      <th scope="row"><?php echo $row['qty']; ?></th>
      <th scope="row"><?php echo $row['total_price']; ?></th>
      <!-- <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td> -->
    </tr>

    <?php }  ?>



  </tbody>
</table>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>