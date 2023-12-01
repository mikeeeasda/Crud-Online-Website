<?php
include "dbcon.php";
$id = $_GET['Customer_Id'];

if (isset($_POST["submit"])) {
  $b = $_POST['First_Name'];
  $c = $_POST['Last_Name'];
  $d= $_POST['Age'];
  $e  = $_POST['Phone'];
  $f = $_POST['Gender'];
  $g = $_POST['Address'];
  $h = $_POST['Email'];

  $sql = "UPDATE `customer_table` SET `First_Name`='$b',`Last_Name`='$c',`Age`='$d',`Phone`='$e',`Gender`='$f',`Address`='$g', `Email`='$h' WHERE Customer_Id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: home.php?msg=Data updated successfully");
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>My CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    MY CRUD Application
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Customer Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `customer_table` WHERE Customer_Id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
    <form action="" method="post" >
            <div class="form-group">
               <div class="col" style="width:30vw; min-width:100px;">
                  <label class="form-label" >First Name:</label>
                  <input type="text" class="form-control" name="First_Name" value="<?php echo $row['First_Name'] ?>">
               </div>

               <div class="col" style="width:30vw; min-width:100px;">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="Last_Name" value="<?php echo $row['Last_Name'] ?>">
               </div>

               <div class="col" style="width:1vw; min-width:50px;">
                  <label class="form-label">Age:</label>
                  <input type="varchar" class="form-control" name="Age" value="<?php echo $row['Age'] ?>">
               </div>

               <div class="col"  style="width:15vw; min-width:15px;">
                  <label class="form-label">Phone:</label>
                  <input type="varchar" class="form-control" name="Phone" value="<?php echo $row['Phone'] ?>">
               </div>
<br>
               <div class="col">
               <label class="form-label">Gender:</label>
               <select value="<?php echo $row['Gender'] ?>" id="Gender" name="Gender">
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               </div><option value="Gender">Other</option>
               </select>
<br>
               <div class="col">
                  <label class="form-label">Address:</label>
                  <input type="varchar" class="form-control" name="Address" value="<?php echo $row['Address'] ?>">
               </div>

               <div class="col">
                  <label class="form-label">Email:</label>
                  <input type="varchar" class="form-control" name="Email" value="<?php echo $row['Email'] ?>">
               </div>
            </div>
<br>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Proceed</button >
               <a href="home.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>