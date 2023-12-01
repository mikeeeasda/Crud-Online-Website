<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $name = $_POST['name'];
   $flavor = $_POST['flavor'];
   $modeofpayment = $_POST['modeofpayment'];

   $sql = "INSERT INTO `payment`(`id`, `name`, `flavor`, `modeofpayment`) VALUES (NULL,'$name','$flavor','$modeofpayment')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>MY CAKE SHOP</title>
</head>
<style>
body{
    background-image: url('3.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
    background-color: maroon;
}
.card-body{
    width: 30rem;
}
.card{
    width: 32rem;
}
</style>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #CBC3E3;">
    MY CAKE SHOP
  </nav>
  

   <div class="container">
      <div class="text-center mb-4">
         <h3>Complete the form below to add a new order</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <mark><label class="form-label">Full Name:</label></mark>
                  <input type="text" class="form-control" name="name" placeholder="">
               </div>

               <div class="col">
                  <mark><label class="form-label">Flavor:</label></mark>
                  <input type="text" class="form-control" name="flavor" placeholder="">
               </div>
            </div>

            <div class="mb-3">
               <mark><label class="form-label">Mode of Payment:</label></mark>
               <input type="text" class="form-control" name="modeofpayment" placeholder="">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Order</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>