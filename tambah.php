<?php

require 'functions.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Tambah Data Mahasiswa</h1>
    </header>

    <form action="" method="post" enctype="multipart/form-data">
        <table border="2" cellpadding="10" cellspacing="2">
            <tr>
                <td>
                    <label for="nama">Nama :</label>
                    <br><input type="text" name="nama" id="nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="npm">Npm :</label>
                    <br><input type="text" name="npm" id="npm" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                    <br><input type="text" name="email" id="email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Jurusan :</label>
                    <br><input type="text" name="jurusan" id="jurusan" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Gambar : </label>
                    <br><input type="file" name="gambar" id="gambar">
                </td>
            </tr>
            <tr>
                <td>
                    <br><button type="submit" name="submit">Tambah Data</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>