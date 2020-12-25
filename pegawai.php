<?php 
// koneksi ke functions.php
require 'functionPegawai.php';

// jalankan function query di functions.php
$pegawai = query("SELECT * FROM pegawai ORDER BY ID_PEGAWAI DESC");

// jika user menekan cari tampilkan apa yg dicari
// tombol cari ditekan
if(isset($_POST["cari"]) ) {
	$pegawai = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="pegStyle.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="pegstyle.css">
    <title>Daftar Pegawai</title>
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
            <a href="pegawai.php"><i class="fas fa-user-friends"></i></i><span>Daftar Pegawai</span></a>
            <a href="#"><i class="fas fa-capsules"></i><span>Stok Obat</span></a>
            <a href="pembayaran.php"><i class="fas fa-clipboard-list"></i><span>Daftar Penjualan</span></a>
        </div>
        
        <div class="daftar p-5 m-5">
          <h3><i class="fas fa-user-cog mr-2"></i>DAFTAR PEGAWAI</h3><hr>
          <form class="form-inline my-2 my-lg-0 ml-auto" action="" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword" aria-label="Search" autocomplete="off">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari" autocomplete="off">Search</button>
          </form>
          <a href="tambah_Pegawai.php" class="btn btn-primary mt-3 mb-3">+ add</a>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Pegawai</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HP</th>
                <th scope="col">Level</th>
                <th colspan="2" scope="col">Tools</th>
              </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach($pegawai as $peg) :?>
            <tbody>
              <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $peg["ID_PEGAWAI"];?></td>
                <td><?= $peg["NAMA"];?></td>
                <td><?= $peg["ALAMAT"];?></td>
                <td><?= $peg["NOHP"];?></td>
                <td><?= $peg["LEVELP"];?></td>
                <td><a href="ubahPegawai.php?ID_PEGAWAI=<?= $peg["ID_PEGAWAI"]; ?>"><i class="fas fa-edit bg-warning p-2"></a></td>
                <td><a href="hapusPegawai.php?ID_PEGAWAI=<?= $peg["ID_PEGAWAI"]; ?>" onClick = "return confirm('yakin?');"><i class="fas fa-trash-alt bg-danger p-2"></i></a></td>
              </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>

  </body>
</html>