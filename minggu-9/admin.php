<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:form-reg.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">

            <div class="card-body">
                <?php
                echo "User Name : " . $_SESSION['username'];
                ?>

            </div>
            <a href="logout.php" class="btn btn-primary">logout</a>
        </div>
    </div>
</body>

</html>