<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:admin.php");
}

if (isset($_POST['proses'])) {
    if (($_POST['username'] == 'admin') and ($_POST['password'] == 'admin')) {
        $_SESSION['username'] = $_POST['username'];
        header("location:admin.php");
    } else {
        echo "username dan password tidak terdaftar";

    }
    //echo "User Name : " . $_POST['username'] . "<br>";
    //echo "Password : " . $_POST['password'] . "<br>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">for login</h5>
                <form action="" method="POST">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <button type="submit" name="proses" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>x`
</body>

</html>