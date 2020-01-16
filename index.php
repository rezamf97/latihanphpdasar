<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Daftar Mahasiswa</h1>
    </header>

    <div class="container"><a href="tambah.php">Tambah Data Mahasiswa</a>
        <br><br>
    </div>

    <table>
        <form action="" method="post">
            <tr>
                <td>
                    <input type="text" name="keyword" size="20" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
                    <button type="submit" name="cari">Cari</button>
                </td>
            </tr>
        </form>
    </table>
    <br>

    <table border="1" cellpadding="10" cellspacing="2">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin?');">Hapus</a>
                </td>
                <td><img src="img/<?= $mhs["gambar"]; ?>" width="50"></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["npm"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>


    </table>

</body>

</html>