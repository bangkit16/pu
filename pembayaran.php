<html>

<head>
    <title>Jasa Laundry</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $id = $_GET['id'];
    include("koneksi.php");

    $query_mysql = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE id_transaksi=$id");
    $data = mysqli_fetch_array($query_mysql);
    ?>
    <div class="Top">
        <h1 style="font-size: 50px;">Jasa Laundry</h1>
    </div>

    <div class="formIsi">

        <form action="#" method="post" name="form1">
            <table class="fontsize" width="25%" border="0">
                <tr>
                    <td>Nama</td>
                    <td>Rp. <?php echo $data['harga']; ?></td>
                </tr>
                <tr>
                    <td>Nominal Uang</td>
                    <td><input type="number" name="nominal" value="0"></td>
                </tr>
                <!-- <tr>
                    <td>Mobile</td>
                    <td><input type="text" name=""></td>
                </tr> -->
                <tr>
                    <td></td>
                    <td><input class="button but fontsize" type="submit" name="Submit" value="Bayar"><br></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="index.php" class="fontsize button but">Kembali Ke Menu</a>
                    <td>
                </tr>
            </table>
        </form>

        <?php
        include("koneksi.php");

        if (isset($_POST['Submit'])) {
            if ($data['harga'] - 1 < $_POST['nominal']) {
                $id = $_GET['id'];
                $status = "Lunas";
                $ler = mysqli_query($mysqli, "UPDATE transaksi SET pembayaran='$status' WHERE id_transaksi=$id");
                header("Location: index.php");
            } else {
                header("Location: index.php");
            }
        }
        ?>

    </div>

</body>

</html>