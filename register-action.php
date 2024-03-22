<?php
include ("config.php");
include ("firebaseRDB.php");

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$rdb = new firebaseRDB($databaseURL);
$retrieve = $rdb->retrieve("/user", "Username", "EQUAL", $Username);
$data = json_decode($retrieve, 1);

if(count($data) > 0){
    $_SESSION['wrong'] = "User Already Exit!";
    header("location: register.php");
}else{
    $insert = $rdb->insert("/user",
    [
        "Username" => $Username,
        "Email"    => $Email,
        "Password" => md5($Password)
    ]);
}

$result = json_decode($insert, 1);
if(isset($result['name'])){
    $_SESSION['info'] = "Sign Up Success!";
    header("location: login.php");
}else{
    $_SESSION['wrong'] = "Sign Up Fail!";
    header("location: register.php");
}


?>