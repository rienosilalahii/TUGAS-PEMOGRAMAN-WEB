    <?php
    $folder = "foto/";
    include('koneksi.php');

    $tmp_name = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $ponsel = $_POST['ponsel'];

    $target_file = $folder . $nama_file;
    move_uploaded_file($tmp_name,$target_file);

    session_start();
    $username = $_SESSION['username'];

    $sql = "insert into mahasiswa values('$nim','$nama','$gender','$email','$ponsel','$nama_file')";
    $result = $conn->query($sql);
    if($result){
        header("location:read.php");
    }else{
        echo"Gagal Menyimpan";
    }
    ?>