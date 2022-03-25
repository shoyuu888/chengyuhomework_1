<?php
$account = "255";
$password="264";
if(!empty($_POST['login'])){
    if($_POST['account'] == $account && $_POST['password'] == $password){
            session_start();
            $_SESSION["account"] = $_POST['account'];
            setcookie("account",$account,time()+17280);
            header('Location: kentin.php');
            exit();
        }elseif($_POST['account'] == 'admin' && $_POST['password'] == 'admin'){
            $_SESSION["account"] = $_POST['account'];
            setcookie("account",$account,time()+17280);
            header('Location: admin.php');
        }
        }else{
            header('Location: login.php?errno=1');
            exit();
        }
        }else{
            header('Location: login.php?errno =2');
            exit();
        }

?>