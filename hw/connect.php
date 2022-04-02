<?php

    $link = @mysqli_connect(
        'localhost',
        'root',
        '',
        'php_hw'
    );
    // $dbname = "php_hw";
    // if ( !mysqli_select_db($link, $dbname)) {
    //     die("無法開啟 $dbname 資料庫!<br/>");
    // } else{
    //     echo "資料庫: $dbname 開啟成功!<br/>";
    // }
    // $sql = "INSERT INTO `user` value(0955165789,4567444)";
    $sql = "SELECT * FROM user";
    if ( $result = mysqli_query($link, $sql) ) { 
        while( $row = mysqli_fetch_assoc($result) ){ 
            echo '<tr>';
            echo "</td><td>".$row["register"]."</td><td>".$row["password"]."</td><br/>";
            echo '</tr>';
         }
    }
    // if ( $result = mysqli_query($link, $sql) ) { 
    //     if(mysqli_affected_rows($link) > 0){ 
    //         $id = mysqli_insert_id($link);
    //         echo $id;
    //     }elseif(mysqli_affected_rows($link) == 0){
    //         echo 0;
    //     }
    // }
    

?>