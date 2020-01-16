<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                    alert('User baru berhasil ditambahkan!
                </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Halaman Registrasi</h1>
    </header>

    <form action="" method="post">
        <table border="2" cellpadding="10" cellspacing="2">
            <tr>
                <td>
                    <label>
                        Username <br>
                        <input type="username" name="username">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Password <br>
                        <input type="password" name="password">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Konfirmasi Password <br>
                        <input type="password" name="password2">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="register">Register</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>