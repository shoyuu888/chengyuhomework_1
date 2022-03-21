<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $gender = $_POST['gender'];

    $password = $_POST['password'];
   
    // $foodnames = implode(",",$foodname);

    // $size = $_GET['size'];
    // $color = $_GET['color'];
    $birthday = $_POST['birthday'];

    if($name == ""){
        echo "姓名為空";
    }else{
        echo "姓名：{$name}";
        echo "<br>";
    }
    echo 'email :'.$email."</br>";
    echo '電話 :'.$tel."</br>";
    echo '密碼：'.$password."</br>";
    // echo 'size :'.$size."</br>";
    // echo 'color :'.$color."</br>";
    echo '<b>生日 :</b>'.$birthday."</br>";

    if($gender == '1'){
        echo "<b>性別 : </b>男</br>";
    }elseif($gender == '2'){
        echo "<b>性別 : </b>女</br>";
    }else{
        echo "<b>性別 : </b>其他</br>";
    }
    
    // echo '<b>foodname :</b>'.$foodnames."</br>";
    //  $foodnum = count($foodname);
    // for($i=0;$i<$foodnum;$i++){
    //     echo '<b>foodname :</b>'.$foodname[$i]."</br>";
    // }

    // $file = $_GET['file'];
    // $comment=strip_tags($comment);
    // nl2br($comment);
    // echo $_FILES["file"]["size"]."</br>";
    // echo '<br>'.$comment."</br>";   
    // if(copy($_FILES["file"]["tmp_name"],$_FILES["file"]["size"])){
    //     echo "success";
    // }else{
    //     echo "failed";
    // }
?>