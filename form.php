<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save.php" method="POST" enctype="multipart/form-data">
        Nim : <br>
        <input type="text" name="nim" id=""> <br>
        Nama : <br>
        <input type="text" name="nama" id=""> <br>
        Gender : <br>
        <select name="gender" id="">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        Email : <br>
        <input type="text" name="email" id=""> <br>
        Ponsel : <br>
        <input type="text" name="ponsel" id=""> <br>
        Foto : <br>
        <input type="file" name="foto" id=""> <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>