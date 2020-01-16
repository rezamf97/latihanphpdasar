<?php
require 'functions.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Form Login</h1>
    </header>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic">Username / Password salah</p>
    <?php endif;  ?>

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
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>