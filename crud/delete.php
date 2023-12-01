<?php include "db_conn.php"; 
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM guest WHERE id = $id";
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
    <title>Delete Information</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card alert alert-danger">
                    <div class="card-body">
                        <h2 class="card-title text-center">Delete Information</h2>
                        <form method="post" action="deleteaction.php">
                           <div class="mb-3">
                                <input type="hidden" value="<?php echo $row["id"] ?>" name="id">
                            ID: <?php echo $row["id"] ?>
                        </div>
                        <div class="col">
                        FullName: <?php echo $row["f_name"] ?> 
                        </div>
                        <div class="col">
                        Address: <?php echo $row["Add_name"] ?>
                        </div>
                        <div class="mb-3">
                        Email: <?php echo $row["email"] ?>
                        </div>
                        <div class="mb-3">
                        Date of Registration: <?php echo $row["DOR"] ?>
                        </div>

                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
