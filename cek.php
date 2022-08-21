<?php
include 'function.php';

if (isset($_POST['cek'])) {
    $npm = $_POST['npm'];
    $query = "SELECT * FROM asisten_dosen WHERE npm = '$npm'";
    $result = query($query);
    if (!$result) {
        echo "NPM $npm tidak ditemukan";
        $hasil = "Mohon Maaf!";
    } else {
        echo "NPM $npm ditemukan";
        $hasil = "Selamat anda diterima!";
    }
} else {
    echo "Silahkan isi NPM";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $hasil ?></title>
</head>

<body>

</body>

</html>