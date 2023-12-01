<?php include "db_conn.php"; 
if (isset($_GET["id"])) {
    $id = $_GET["id"];

  $sql = "SELECT * FROM `payment` WHERE id = $id";
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<div id='msg'>No results found.</div>";
    }
} else {
    echo "<div id='msg'>No Id provided</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you sure you want to delete?</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
body{   background-image: url('1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
    background-color: palevioletred;
}
.card-body{
    width: 30rem;
}
.card{
    width: 32rem;
}
</style>

<body><center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Are you sure you want to delete?</h2>
                    <form method="post" action="deleteaction.php">
                        <div class="mb-3">
                            <center><input type="hidden" value="<?php echo $row["ID"] ?>" name="id">
                         id: <?php echo $row["ID"] ?>
                        </div>
                        <center><div class="row mb-3">
                        <div class="col">
                        Name: <?php echo $row["name"] ?> 
                        </div>
                        <div class="col">
                        Flavor: <?php echo $row["flavor"] ?>
                        </div>
                        <div class="mb-3">
                        Mode of Payment: <?php echo $row["modeofpayment"] ?>
                        </div>
                    </center>
                        <a href="index.php" class="btn btn-secondary">No</a>
                        <input type="submit" class="btn btn-danger" value="Yes">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
</body>
</html>
