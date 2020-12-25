<?php 
$koneksi = mysqli_connect("localhost","root","","project_basdat" );

// ambil data dari tabel karyawan 
$result = mysqli_query($koneksi, "SELECT * FROM konfirmasi");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class="judul">Daftar Konfirmasi</h2>
    <div class="filter"></div>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Id Konfirmasi</th>
            <th>Id Pembayaran</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Bank</th>
            <th>Total</th>
            <th>Bukti</th>
        </tr>
        
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row["ID_KONFIRMASI"];?></td>
            <td><?= $row["ID_PEMBAYARAN"];?></td>
            <td><?= $row["TANGGAL_KONFIRMASI"];?></td>
            <td><?= $row["NAMA_PEMILIK_REKENING"];?></td>
            <td><?= $row["BANK"];?></td>
            <td><?= $row["TOTAL_TRANSFER"];?></td>
            <td><?= $row["BUKTI_TRANSFER"];?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <div class="btn">
        <a href="pembayaran.php">Back</a> ||
        <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
    </div>
    
</body>
</html>