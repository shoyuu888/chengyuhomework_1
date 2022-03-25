<?php
    session_start();
    if(empty($_SESSION['account'])){
        header('Location: login.php?errno=3');
        exit();
    }
    echo"welcom admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    WELCOM admin
</body>
</html>