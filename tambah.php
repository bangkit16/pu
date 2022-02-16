<?php
if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $berat = $_POST['berat'];
    $status = "Masuk";
    $harga = $berat * 5000;
    $pembayaran = "Belum Lunas";
    include("koneksi.php");

    $result = mysqli_query($mysqli, "INSERT INTO transaksi(nama,berat,status,harga,pembayaran) VALUES('$nama','$berat','$status','$harga','$pembayaran')");

    header("Location: index.php");
}
