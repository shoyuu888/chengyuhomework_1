<?php
// session_start();
// if(isset($_SESSION['login'])){
//     if($_SESSION["login"]=="Yes"){
//         echo "<a href='logout.php'>登出</a>";
//     }else{
//         echo "滾!!";
//         exit();
//     }
// }else{
//         echo "滾!!";
//         exit();
// }
    session_start();
    if(empty($_SESSION['account'])){
        header('Location: login.php?errno=4');
        exit();
    }
    echo"welcom".$account;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="global.css">
   <link rel="stylesheet" href="desktop_enroll.css" media="screen and (min-width:960px)">  
   <link rel="stylesheet" href="phone.css" media="screen and (max-width:959px)">  
</head>
<body>
    <div class="full-width" id="nav">
        <div class="fixed-width">
            <div class="logo"></div>
            <div class="nav">
                <ul>
                    <li><a href="login.php">已經有帳號了？</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="full-width" id="header">
        <div id="overlay">
            <h1>登入</h1>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quas labore voluptatem consequatur rem odio eligendi esse sunt dolores.</p> -->
        <!-- </div> -->
    <!-- </div> --> 
    <div class="full-width clearfix">
    <div class="formdiv">
        <form action="rinfo.php" method="post">
        <!-- <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="tel">tel:</label><br>
        <input type="text" id="tel" name="tel"><br>
        <label for="gender">Gender:</label><br>
        <input type="radio" id="gender" name="gender" value="1">M
        <input type="radio" id="gender" name="gender" value="2">F
        <input type="radio" id="gender" name="gender" value="3">others<br> -->
        <label for="name">姓名：</label>
        <input type="text" id="name" name="name" placeholder="請填上您的姓名" required><br>
        <label for="email">EMAIL：</label>
        <input name="email" id="email" type="email" placeholder="請填寫您的電子郵件" required><br>
        <label for="tel">電話：</label>
        <input name="tel" id="tel" pattern='\d{4}[-]\d{6}' placeholder="請輸入格式0987-123456" required><br>
        <label for="password">設定密碼：</label>
        <input type="password" id="password" name="password" placeholder="請填入您的密碼" required><br>
        <label for="birthday">出生日期：</label>
        <input name="birthday" id="birthday" pattern='\d{4}[/]\d{2}[/]\d{2}' placeholder="請輸入格式YYYY/MM/DD" required><br>
        <label for="gender">性別：</label>
        <input type="radio" id="gender1" name="gender" value="1"><label for="gender1">男性</label>
        <input type="radio" id="gender2" name="gender" value="2"><label for="gender2">女性</label>
        <input type="radio" id="gender3" name="gender" value="3"><label for="gender3">其他</label><br>
        <input type="submit" value="確認送出">
      </form>
    </div>

    <div class="full-width clearfix">
        </div>
    
            <div id="our-bread-gallery">
                <div class="bread-gallery"><img src="images/b1.jpg" alt=""></div>
                <div class="bread-gallery"><img src="images/b2.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <div class="full-width clearfix" id="contact">
        <div class="fixed-width-sm">
            <h3>WELCOME!!</h3>
            <p>高雄市楠梓區高雄大學路400號</p>
            <div id="connect">
                <h3>連結</h3>
                <p>
                    <a href="" class="fa fa-facebook fa-lg"></a>
                    <a href="" class="fa fa-instagram fa-lg"></a>
                    <a href="" class="fa fa-twitter fa-lg"></a>
                    <a href="" class="fa fa-envelope fa-lg"></a>
                </p>
            </div>
            <div id="call">
                <h3>電話</h3>
                <p>
                    (+886)123456789
                </p>
            </div>
        </div>
    </div>
    <div class="full-width" id="footer">
        <div class="fixed-width-sm">
            <a href="">&copy;PRIME 2022</a>
            <a href="">BACK TO TOP</a>
            <a href="">DESIGN BY 醬油</a>
        </div>
    </div>
</body>
</html>