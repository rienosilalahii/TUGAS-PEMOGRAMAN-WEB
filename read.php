<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }
    ?>
    <h1>Halo <?= $_SESSION['username']?></h1>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <td>Nim</td>
            <td>Nama</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Ponsel</td>
            <td>Foto</td>

        </tr>
        <?php
        include('koneksi.php');
        $username = $_SESSION['username'];
        $sql = "select * from mahasiswa";
        $result = $conn->query($sql);
        while ($data = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['gender']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['ponsel']; ?></td>
            <td>
                <img src="foto/<?=$data['foto'];?>"width="100" height="100">
            </td>
            <td>
                <a href="edit.php?nim=<?= $data['nim']?>">Edit</a>
                <a href="delete.php?nim=<?= $data['nim']?>"onclick="return confirm('Yakin dihapus?')">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        <br>
    </table>
    <a href="form.php">Tambah Mahasiswa</a>
    <a href="logout.php">LOGOUT</a>
</body>
</html>