<?php
include("koneksi.php");
$user = $_POST['user'];
$password = $_POST['password'];
$sql = "select * from users where username = '$user' and password = '$password'";
$exe = $conn->query($sql);
$banyak = $exe->num_rows;
if ($banyak=1){
    session_start();
    $_SESSION['username']=$user;
    $_SESSION['login']=true;
    header("location:read.php");
} else{
    echo "Username dan Password salah";
}
?>