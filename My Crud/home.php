<?php
include "dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="style.css" rel="stylesheet">
  <title>My CRUD Application</title>
</head>
<div class="menu-container">
        <nav>
            <a href="../index.php">Home</a>
           

            <!-- Dropdown Example -->
            <div class="dropdown">
                <a href="#">Website</a>
                <div class="dropdown-content">
                    <a href="../Church_Management/index.php">Church Managemet</a></br>
                    <a href="../crud/index.php">Hotel Reservation</a></br>
                    <a href="../clothing/index.php">T-Shirt Clothing</a></br>
                    <a href="../My Crud/home.php">JRP Clothing</a></br>
                    <a href="../cake shop/index.php">Cake Shop</a></br>
                </div>
            </div>

            <a href="../contact.php">Contact</a>
            <a href="../about.php">About</a>
        </nav>
    </div>

<body>


  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:skyblue;">
    My CRUD Application
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    

    <table class="table table-hover text-center">
      <thead class="table" style="background-color:orange">
        <tr>
          <th scope="col">Customer Id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Age</th>
          <th scope="col">Phone</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `Customer_table`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["Customer_Id"] ?></td>
            <td><?php echo $row["First_Name"] ?></td>
            <td><?php echo $row["Last_Name"] ?></td>
            <td><?php echo $row["Age"] ?></td>
            <td><?php echo $row["Phone"] ?></td>
            <td><?php echo $row["Gender"] ?></td>
            <td><?php echo $row["Address"] ?></td>
            <td><?php echo $row["Email"] ?></td>
            <td>
              <a href="update.php?Customer_Id=<?php echo $row["Customer_Id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?Customer_Id=<?php echo $row["Customer_Id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="insert.php" class="btn btn-dark mb-3" style="background-color:green">Add New</a>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>