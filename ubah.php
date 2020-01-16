<?php

require 'functions.php';

$id = $_GET["id"];
$mhsw = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "<script>
                alert('data gagal diubah!');
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
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Edit Data Mahasiswa</h1>
    </header>

    <form action="" method="post" enctype="multipart/form-data">
        <table border="2" cellpadding="10" cellspacing="2">
            <input type="hidden" name="id" value="<?= $mhsw["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhsw["gambar"]; ?>">
            <tr>
                <td>
                    <label for="nama">Nama :</label>
                    <br><input type="text" name="nama" id="nama" required value="<?= $mhsw["nama"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="npm">NPM :</label>
                    <br><input type="text" name="npm" id="npm" required value="<?= $mhsw["npm"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                    <br><input type="text" name="email" id="email" required value="<?= $mhsw["email"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Jurusan :</label>
                    <br><input type="text" name="jurusan" id="jurusan" required value="<?= $mhsw["jurusan"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Gambar : </label><br>
                    <img src="img/<?= $mhws['gambar']; ?>" width="40"><br>
                    <br><input type="file" name="gambar" id="gambar">
                </td>
            </tr>
            <tr>
                <td>
                    <br><button type="submit" name="submit">Edit Data</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>