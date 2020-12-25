<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf untuk mengakses halaman ini, Anda harus Login terlebih dahulu!');document.location='index.php'</script>";
}
    

?>
<!DOCTYPE html>
<html lang="en">.
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrator</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
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

    <div class="container">
        <div class="jumbotron bg-info text-white">
            <h1 class="display-4">Hallo, <b><?= $_SESSION['nama_lengkap']?></b> !</h1>
            <p class="lead">Selamat Datang, Anda berhasil login sebagai <b><?= $_SESSION['username'] ?></b></p>
            <hr class="my-4">
            <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                Ganti Password(*abaikan jika tidak ingin ganti password)
            </div>
            <div class="card-body">
            <form method="post" action="ganti_password.php">
                <input type="hidden" name="username" value="<?=$_SESSION['username']?>">
                <div class="form-group">
                    <label>Masukkan Password Lama Anda!</label>
                    <input type="password" class="form-control" name="pass_lama" required>
                </div>
                <div class="form-group">
                    <label>Masukkan Password Baru Anda!</label>
                    <input type="password" class="form-control" name="pass_baru"  required>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password Baru Anda!</label>
                    <input type="password" class="form-control" name="konfirmasi_pass"  required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
    </div>
    <!-- penutup container -->
</body>
</html>