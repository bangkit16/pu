<?php

$id = $_GET['id'];
$status = "Selesai";

include("koneksi.php");

mysqli_query($mysqli, "UPDATE transaksi SET status='$status' WHERE id_transaksi=$id");

header("Location: index.php");
