<?php 
$koneksi = mysqli_connect("localhost","root","","project_basdat" );

// ambil data dari tabel karyawan 
$result = mysqli_query($koneksi, "SELECT * FROM pembayaran");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Order Penjualan</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>

        <div class="sidebar">
            <header>MENU</header>
            <a class="active" href="home_admin.php"><i class="fas fa-home"></i><span>Home Admin</span></a>
            <a href="#"><i class="fas fa-user-friends"></i></i><span>Daftar Pegawai</span></a>
            <a href="#"><i class="fas fa-capsules"></i><span>Stok Obat</span></a>
            <a href="pembayaran.php"><i class="fas fa-clipboard-list"></i><span>Daftar Penjualan</span></a>
        </div>
    <h2 class="judul">Daftar Order Penjualan</h2>
    <div class="filter"></div>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Id Pembayaran</th>
            <th>Id Konfirmasi</th>
            <th>Id Order</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Total</th>
            <th>Status</th>
        </tr>

        <?php $x = 1;?>
        
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row["ID_PEMBAYARAN"];?></td>
            <td><?= $row["ID_KONFIRMASI"];?></td>
            <td><?= $row["ID_ORDER"];?></td>
            <td><?= $row["TANGGAL"];?></td>
            <td><?= $row["NAMA_PELANGGAN"];?></td>
            <td><?= $row["ALAMAT_PELANGGAN"];?></td>
            <td><?= $row["TOTAL_HARGA"];?></td>
            <td></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <div class="btn">
        <a href="detail_keranjang.php">Detail Keranjang </a> |
        <a href="konfirmasi.php">Data Konfirmasi</a>
        <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
    </div>

</body>
</html>