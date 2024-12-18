<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo 'hallo ' . $_SESSION['username'];
    echo '<br> Nama Lengkapnya : ' . $_SESSION['keterangan'];

    // echo '<br>' . session_id();
    ?>

    <a href="logout.php">Logout</a>
</body>

</html>