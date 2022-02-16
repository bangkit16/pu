<?php

$id = $_GET['id'];
$status = "Proses";

include("koneksi.php");

mysqli_query($mysqli, "UPDATE transaksi SET status='$status' WHERE id_transaksi=$id");

header("Location: index.php");
