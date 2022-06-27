<?php
session_start();

if(isset($_GET["act"])){
    if($_GET["act"]=="logout"){
        session_unset();
    }
}

if(isset($_SESSION["login"])){
    header("Location: halamanutama.php");
}
$psn= "";
if(isset($_POST["txUSER"])){
    $usr = $_POST["txUSER"]; //form
    $pass= md5($_POST["txPASS"]); //form
    include_once("dbkoneksi2.php");
    $sql = "SELECT username, passcode FROM users WHERE username='$usr';";
    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        $h = mysqli_fetch_array($hsl);
        $user = $h["username"];  //tabel
        $passcode = $h["passcode"];  //tabel
        if($pass === $passcode){
            //echo "Login Sukses";
            $_SESSION["login"] = md5($pass);
            $_SESSION["loginuser"] = $user;
            header("Location: halamanutama.php");
        }else{
            $psn = "Login tidak benar";
        }
    }else{
        $psn = "Login tidak benar";
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div class=container>
        <h3>Login Form</h3>
        <?=$psn;?>
        <form method="post" action="index.php">
            <div>User Name</div>
            <div><input type="text" name="txUSER" id="txUSER"></div>
            <div>Password</div>
            <div><input type="password" name="txPASS" id="txPASS"></div>
            <div>
                <button type="submit"> Login! </button>
            </div>
        </form>
    </div>
</body>
</html>