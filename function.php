<?php
include 'config.php';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die('Koneksi Gagal : ' . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        return false;
    } else {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}
