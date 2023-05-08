<?php
require('koneksi.php');
$status = $_GET['status'];
$id_transaksi = $_GET['id_transaksi'];

$sql = "UPDATE transaksi set
        status = '$status'
        WHERE id_transaksi = '$id_transaksi'";

$hasil = mysqli_query($kon, $sql);

echo json_encode([
    "status" => "success"
]);

?>