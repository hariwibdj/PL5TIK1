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
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        echo $_SESSION['username'];
        ?>
    </div>
</body>

</html>