<?php 
$koneksi = mysqli_connect("localhost","root","","project_basdat" );

// ambil data dari tabel karyawan 
$result = mysqli_query($koneksi, "SELECT * FROM keranjang_detail");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Keranjang</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2 class="judul">Detail Keranjang</h2>
    <div class="filter"></div>
    <table border="1" cellpadding="8" cellspacing="0" >
        <tr>
            <th>Id Keranjang Detail</th>
            <th>Id Order</th>
            <th>Id Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row["ID_KER_DETAIL"];?></td>
            <td><?= $row["ID_ORDER"];?></td>
            <td><?= $row["ID_BARANG"];?></td>
            <td><?= $row["JUMLAH"];?></td>
            <td><?= $row["HARGA"];?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <div class="btn">
        <a href="pembayaran.php">Back</a> ||
        <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
    </div>
    
</body>
</html>