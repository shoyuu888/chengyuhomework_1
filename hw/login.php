
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
   <link rel="stylesheet" href="desktop_login.css" media="screen and (min-width:960px)">  
   <link rel="stylesheet" href="phone.css" media="screen and (max-width:959px)">  
</head>
<body>
    <div class="full-width" id="nav">
        <div class="fixed-width">
            <div class="logo"></div>
            <div class="nav">
                <ul>
                    <li><a href="enroll.php">加入我們成就屬於你自己的旅行</a></li>
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
        <div class="fixed-width">
            <div id="our-story">
                <h2 class="title">醬油旅遊</h2>
                <p class="article">
                在家很無聊？<br>讓我們<br>帶您找回最舒適的一天
                </p>
            </div>
            <div id="our-story-gallery">
                <div class="form">
                    <form action="loginProcess.php" method="post">
                    <label for="account">帳號</label><br>
                    <input type="text" id="account" name="account" placeholder="請輸入您的email或電話號碼">
                    <br>
                    <label for="password">密碼</label><br>
                    <input type="text" id="password" name="password" placeholder="請輸入您的密碼">
                    <br>
                    <input type="submit" name="login" value="確認送出">
                    <a href="enroll.php">加入我們</a>
                    <hr>
                    </form>
                </div>
                <div class="ps">
                    <a href="">忘記密碼</a>
                </div>
            </div>
        </div>
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

<?php


// header('Refresh:1');
if(isset($_COOKIE["account"])){
    $_cookieaccount = $_COOKIE["account"];
    echo "感謝".$cookieaccount."回到本系統";
}else{
    echo "歡迎初次來到本系統";
}

    if(!empty($_GET['error'])){
        if($_GET['error']== 1){
            echo "<br>使用者名稱密碼錯誤";
        }elseif($_GET['error'] == 2){
            echo "<br>請輸入使用者名稱密碼";
        }elseif($_GET['error'] == 3){
            echo "<br>非法訪問，滾";
        }
    }


?>
</body>
</html>
