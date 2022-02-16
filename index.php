<html>

<head>
    <title>Jasa Laundry</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">
</head>

<body>
    <?php $nomor = 1;; ?>
    <div class="Top">
        <h1>Jasa Laundry</h1>
        <p>Note : Harga per 1 Kg = Rp 5000</p>
    </div>
    <div class="formIsi">

        <form action="tambah.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td class="fontsize">Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td class="fontsize">Berat</td>
                    <td><input type="text" name="berat"></td>
                </tr>
                <!-- <tr>
                    <td>Mobile</td>
                    <td><input type="text" name=""></td>
                </tr> -->
                <tr>
                    <td></td>
                    <td><input class="button but fontsize" type="submit" name="Submit" value="Tambah"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="divTabel">

        <h3 class="fontsize">Data Laundry</h3>
        <table border="1" class="table">
            <tr class="fontsize">
                <th>No</th>
                <th>Nama</th>
                <th>Berat</th>
                <th>Status Pakaian</th>
                <th>Harga</th>
                <th>Pembayaran</th>
                <th>Opsi Status</th>
            </tr>
            <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM transaksi");

            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <tr class="fontsizee">
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['berat']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td><?php echo $data['pembayaran'];
                        if ($data['pembayaran'] == "Belum Lunas") { ?>
                            &nbsp;<a style="float :right" class="pembayaran button" href="pembayaran.php?id=<?php echo $data['id_transaksi']; ?>">Bayar</a>
                        <?php } ?>
                    </td>
                    <td>
                        <a class="statusProses button" href="statusProses.php?id=<?php echo $data['id_transaksi']; ?>">Proses</a> |
                        <a class="statusSelesai button" href="statusSelesai.php?id=<?php echo $data['id_transaksi']; ?>">Selesai</a>
                    </td>
                </tr>1
            <?php } ?>
        </table>
    </div>
</body>

</html>