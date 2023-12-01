
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
<style>
    body {
        background-image: url('OIP.jpg');
        background-repeat:no-repeat ;
        background-attachment:fixed ;
        background-size:100% 100% ;


    }

    .container {
    max-width: 1300px;
    margin: 50px auto;
    padding: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  

}


</style>
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
                    <a href="#">T-Shirt Clothing</a></br>
                    <a href="#">JRP Clothing</a></br>
                    <a href="#">Cake Shop</a></br>
                </div>
            </div>

            <a href="../contact.php">Contact</a>
            <a href="../about.php">About</a>
        </nav>
    </div>
<body>
        <div class="container">
            <div class="row d-flex justify-content-center">
                 <div class="col-md-9">
                    <br> <br> <br>
                    <div class="card">
                    <div class="card-header">
                        <h1> Church Management System </h1>
                    </div>
                    <div class="card-body">
                   
                    <button class="btn btn-success"> <a href="add.php" class="text-light" > Add New </a> </button>
                        
                        <br/>
                        <br/>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Designation</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                $connection = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($connection,"cmsdb");

                                $sql = "SELECT * FROM `priest`";
                                $run = mysqli_query($connection, $sql);
                                $id= 1;

                                while($row = mysqli_fetch_array($run))
                                {
                                    $uid = $row['id'];
                                    $firstname = $row['firstname'];
                                    $lastname = $row['lastname'];
                                    $designation = $row['designation'];
                                ?>

                                   <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $firstname ?></td>
                                        <td><?php echo $lastname ?></td>
                                        <td><?php echo $designation ?></td>

                                        <td>
                                        <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Edit </a> </button> &nbsp;
                                       <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Delete </a> </button>
                                        </td>
                                   </tr>
                                    <?php $id++; } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>