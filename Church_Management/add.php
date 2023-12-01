
<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"cmsdb");

    if(isset($_POST['submit']))
        {
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
         $designation = $_POST['designation'];

           $sql = "insert into priest(firstname,lastname,designation)values(' $firstname',' $lastname',' $designation')";

           if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
           }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    body {
        background-image: url('OIP.jpg');
        background-repeat:no-repeat ;
        background-attachment:fixed ;
        background-size:100% 100% ;


    }

    .container {
    max-width: 1300px;
    margin: 20px auto;
    padding: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  

}


</style>
</head>
<body>

        <div class="container">
            <div class="row d-flex justify-content-center">
                 <div class="col-md-9">
                    <br> <br> <br>
                    <div class="card">
                    <div class="card-header">
                        <h1>  Church Management System </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" name="firstname" class="form-control"  placeholder="Enter Firstname"> 
                        </div>

                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" name="lastname" class="form-control"  placeholder="Enter Lastname"> 
                        </div>

                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name ="designation" class="form-control"  placeholder="Enter Designation" > 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>
                   
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>