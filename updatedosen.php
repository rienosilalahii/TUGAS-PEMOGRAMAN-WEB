<?php
include('koneksi.php');
$nim = $_POST['nidn'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$ponsel = $_POST['ponsel'];

$sql = "update mahasiswa set nama='$nama',gender='$gender',jabatan='$jabatan',email ='$email',ponsel='$ponsel' where nim = '$nim'";
$exe = $conn->query($sql);

if($exe){
    header("location:read.php")
}
?>