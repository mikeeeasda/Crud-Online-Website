
<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"cmsdb");
$edit = $_GET['edit'];

$sql = "select * from priest where id = '$edit'";

$run = mysqli_query($connection,$sql);


while($row=mysqli_fetch_array($run))
{
    $uid = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $designation = $row['designation'];

}

?>

<?php
   $connection = mysqli_connect("localhost","root","");

    $db = mysqli_select_db($connection,"cmsdb");


    if(isset($_POST['submit']))
        {
          $edit = $_GET['edit'];  
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $designation = $_POST['designation'];

           $sql = "UPDATE `priest` SET `firstname`= '$firstname',`lastname`= '$lastname',`designation`='$designation' WHERE id =  '$edit'";

             $run = mysqli_query($connection, $sql);

  if ($run) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($connection);
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
    margin: 50px auto;
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
                        <h1>  Church Management System</h1>
                    </div>
      

                    <div class="card-body">

                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" name="firstname" class="form-control"  placeholder="Enter Firstame" value="<?php echo $firstname; ?>"> 
                        </div>

                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" name="lastname" class="form-control"  placeholder="Enter Lastname" value="<?php echo $lastname ?>"> 
                        </div>

                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name ="designation" class="form-control"  placeholder="Enter Designation" value="<?php echo $designation ?>"> 
                        </div>
                        <br/>
                        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
                        </form>
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>