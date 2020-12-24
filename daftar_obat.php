<?php 
require 'funct_obat.php';
$obat = query("SELECT * FROM obat")

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="daftar_obat.css">
     
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <title>Daftar Obat | Obatin Farma</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Halaman Admin | <b>Obatin Farma</b> </a>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link text-white " href="#"><i class="fas fa-home me-2"></i>HOME ADMIN</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white "  href="#"><i class="fas fa-user-tie me-2"></i>DAFTAR PEGAWAI</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white "  aria-current="page" href="daftar_obat.php"><i class="fas fa-capsules me-2 "></i>STOK OBAT</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " text-white href="#"><i class="fas fa-clipboard-list me-2"></i>DAFTAR PENJUALAN</a><hr class="bg-secondary">
          </li>
        
        </ul>

      </div>
      <div class="col-md-10 p-5 pt-20">
        <h3><i class="fas fa-capsules me-2 "></i>DAFTAR STOK OBAT</h3><hr>

        <a href="tambah_obat.php" class="btn btn-primary mb-3"><i class="fas fa-plus-circle me-3"></i>TAMBAH DATA OBAT</a>

        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">ID OBAT</th>
              <th scope="col">NAMA OBAT</th>
              <th scope="col">STOK</th>
              <th scope="col">HARGA OBAT</th>
              <th scope="col">GAMBAR OBAT</th>
              <th colspan= "3" scope="col">AKSI</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach($obat as $row) : ?>
            <tr>
              <th scope="row"><?= $row["ID_OBAT"]; ?></th>
              <td><?= $row["NAMA_OBAT"]; ?></td>
              <td><?= $row["STOK"]; ?></td>
              <td><?= $row["HARGA_OBAT"]; ?></td>
              <td><img src="gambar_obat/<?= $row["GAMBAR"]; ?>" alt="obat" width="100"></td>
              
              <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
              
            </tr>
            <?php endforeach;?>
            <!-- <tr>
              <th scope="row">2</th>
              <td>Panadol</td>
              <td>25</td>
              <td>7000</td>
              <td><img src="" alt=""></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Bodrex Migra</td>
              <td>7</td>
              <td>7000</td>
              <td><img src="" alt=""></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <script type ="text/javascript" src="daftar_obat.js"></script>

  </body>
</html>