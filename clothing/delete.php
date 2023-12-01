<?php include "db_conn.php"; 
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM `clothing` WHERE id = $id";
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
    <title>Are you sure to delete?</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Are you sure to delete?</h2>
                    <form method="post" action="deleteaction.php">
                        <div class="mb-3">
                            <input type="hidden" value="<?php echo $row["id"] ?>" name="id">
                         id: <?php echo $row["id"] ?>
                        </div>
                        <div class="row mb-3">
                        <div class="col">
                        full_name: <?php echo $row["full_name"] ?> 
                        </div>
                        <div class="col">
                        color: <?php echo $row["color"] ?>
                        </div>
                        <div class="mb-3">
                        email: <?php echo $row["email"] ?>
                        </div>
                        <div class="mb-3">
                        gender: <?php echo $row["gender"] ?>
                        </div>

                        <a href="index.php" class="btn btn-secondary">No</a>
                        <input type="submit" class="btn btn-danger" value="Yes">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
