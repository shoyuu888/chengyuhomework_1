<?php
$account = "255";
$password="264";
if(!empty($_POST['login'])){
    if($_POST['account'] == $account && $_POST['password'] == $password){
            session_start();
            $_SESSION["account"] = "Yes";
            header('Location: kentin.php');
            exit();
        }elseif($_POST['account'] == 'admin' && $_POST['password'] == 'admin'){
            $_SESSION["account"] = "Yes";
            header('Location: admin.php');
            exit();
        }elseif($_POST['account'] != $account || $_POST['password'] != $password){
            header('Location: login.php?error=1');
            exit();
            
        }else{
            header('Location: login.php?error =2');
            exit();
        }
}
?>