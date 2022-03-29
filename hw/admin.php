<?php
    session_start();
    if(isset($_SESSION['account'])){
        header('Location: login.php?error=3');
        exit();
    }else{
            echo "<a href='logout.php'>登出</a>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="global.css">
   <link rel="stylesheet" href="admin.css" media="screen and (min-width:960px)">  
   <link rel="stylesheet" href="phone.css" media="screen and (max-width:959px)">  
</head>
<body>
<div class="full-width" id="header">
        <div id="overlay">
            <h1>您好 Admin</h1>
            <p>老大請執行您的指令</p>
        </div>
    </div>
</body>
</html>