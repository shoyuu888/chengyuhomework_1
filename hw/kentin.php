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
   <link rel="stylesheet" href="desktop.css" media="screen and (min-width:960px)">  
   <link rel="stylesheet" href="phone.css" media="screen and (max-width:959px)">  
</head>
<body>
    <div class="full-width" id="nav">
        <div class="fixed-width">
            <div class="logo"></div>
            <div class="nav">
                <ul>
                    <li><a href="login.php">登入</a></li>
                    <li><a href="enroll.php">註冊</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="full-width" id="header">
        <div id="overlay">
            <h1>墾丁三日遊</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quas labore voluptatem consequatur rem odio eligendi esse sunt dolores.</p> -->
        </div>
    </div>
    <div class="full-width clearfix">
        <div class="fixed-width">
            <div id="our-story">
                <h2 class="title">行程內容</h2>
                <p class="article">
                  <a href="https://www.klook.com/zh-TW/blog/attractions-kenting-pingtung-taiwan/" target="_blank">行程A</a>
                  <a href="https://mimihan.tw/kenting-travel/" target="_blank">行程B</a>
                </p>
            </div>
            <div id="our-story-gallery">
                <div class="gallery"><img src="images/164333447524625_P15622163.jpg"></div>
                <div class="gallery"><img src="images/hdralnin15emw2q6b4z1.jpg"></div>
                <div class="gallery"><img src="images/images.jpg"></div>
                <div class="gallery"><img src="images/kenting.jpg"></div>
            </div>
        </div>
    </div>
    <div class="full-width" id="craft">
<!--        <h2>SIMPLE <ins>CRAFT</ins></h2>-->
        <h2 class="cover-title">輕 <span class="under-line">旅行</span></h2>
    </div>
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
        <label for="trip">選擇此次的行程</label><br>
        <SELECT id="trip" name="trip">
          <option value="1">A</option>
          <option value="2">B</option>
        </SELECT><br>
        <label for="pre">選擇您想要的美食：</label><br>
        <input type="checkbox" id="pre" name="pre[]" value="牛排">牛排
        <input type="checkbox" id="pre" name="pre[]" value="豬排">豬排
        <input type="checkbox" id="pre" name="pre[]" value="羊排">羊排
        <input type="checkbox" id="pre" name="pre[]" value="雞排">雞排
        <input type="checkbox" id="pre" name="pre[]" value="魚排">魚排<br>
        <label for="size">選擇您的T-shirt size:</label><br>
        <SELECT id="size" name="size">
          <option value="1">S</option>
          <option value="2">M</option>
          <option value="3">L</option>
          <option value="4">XL</option>
        </SELECT>
        <br>
        <label for="color">選擇您喜歡的T-shirt顏色:</label><br>
        <SELECT id="size" id="color" name="color">
          <option value="1">紫</option>
          <option value="2">黃</option>
          <option value="3">薄荷綠L</option>
          <option value="4">黑</option>
        </SELECT>
        <br>
        <input type="submit" value="確認送出">
      </form>
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