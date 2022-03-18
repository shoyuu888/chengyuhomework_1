<?php
    $uname = $_GET['name'];
    $uemail = $_GET['email'];
    $utel = $_GET['tel'];

    $gender = $_GET['gender'];

    $foodname = $_GET['pre'];
   
    // $foodnames = implode(",",$foodname);

    $size = $_GET['size'];
    $color = $_GET['color'];
    $birthday = $_GET['birthday'];

    echo "name：".$uname."</br>";
    echo 'email :'.$uemail."</br>";
    echo 'tel :'.$utel."</br>";

    echo 'size :'.$size."</br>";
    echo 'color :'.$color."</br>";
    echo '<b>birthday :</b>'.$birthday."</br>";

    if($gender == '1'){
        echo "<b>gender : </b>男</br>";
    }elseif($gender == '2'){
        echo "<b>gender : </b>女</br>";
    }else{
        echo "<b>gender : </b>其他</br>";
    }
    
    // echo '<b>foodname :</b>'.$foodnames."</br>";
     $foodnum = count($foodname);
    for($i=0;$i<$foodnum;$i++){
        echo '<b>foodname :</b>'.$foodname[$i]."</br>";
    }

    $file = $_GET['file'];
    // $comment=strip_tags($comment);
    // nl2br($comment);
    echo $_FILES["file"]["size"]."</br>";
    // echo '<br>'.$comment."</br>";   
    if(copy($_FILES["file"]["tmp_name"],$_FILES["file"]["size"])){
        echo "success";
    }else{
        echo "failed";
    }
?>