<?php
include ("config.php");
include ("firebaseRDB.php");

$UserName = $_POST['Username'];
$Password = $_POST['Password'];

$rdb = new firebaseRDB($databaseURL);
$retrieve = $rdb->retrieve("/user", "Username", "EQUAL", $UserName);
$data = json_decode($retrieve, 1);

if(count($data) == 0){
    $_SESSION['wrong'] = "Username doesn't exit!";
    header("location: login.php");
}else{
    $id = array_keys($data)[0];
    if($data[$id]['Password'] == md5($Password)){
        $_SESSION['user'] = $data[$id];
        header("location: home.php");
    }else{
        $_SESSION['wrong'] = "Password is not correct!";
        header("location: login.php");
    }
}

?>