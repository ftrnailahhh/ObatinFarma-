<?php 
require 'funct_obat.php';
$obat = query("SELECT * FROM obat");

//tombol cari ditekan
if(isset($_POST["cari"])){
  $obat = cari($_POST["keyword"]);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="fontawesome/css/all.css" rel="stylesheet">

    <title>Obatin Farma</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        
        <div class="container-fluid">
          <a class="navbar-brand" href="#">OBATIN FARMA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Info</a>
              </li>
             
            </ul>
            <form class="d-flex" action="" method="POST">
            <input class="form-control me-2" type="search" name="keyword" placeholder="Ketik nama obat yang ingin dicari!" aria-label="Search" autofocus autocomplete="off" size="40">
            <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
          </form>
          </div>
        </div>
      </nav>

      <div class="row no-gutters mt-5">
        <div class="col-md-10 m-auto p-5 pt-20">
            <h3><i class="fas fa-capsules me-2 "></i>MENU OBAT</h3><hr>
        
            <div class="row">
              <?php foreach($obat as $row) : ?>
                <div class="card mb-5 md-4 me-4" style="width: 15rem;">
                    <img src="gambar_obat/<?= $row["GAMBAR"]; ?>" class="card-img-top" alt="gambar">
                    <div class="card-body">
                    <h5 class="card-title"><?= $row["NAMA_OBAT"]; ?></h5>
                    <p class="card-text">Rp <?= $row["HARGA_OBAT"]; ?></p>
                    <a href="#" class="btn btn-primary">Tambah Ke Keranjang</a>
                    </div>
                </div> 
              <?php endforeach;?>
            </div>   

        </div>
    </div>

    <footer class="bg-dark text-white" id="footer">
        <div class="row">
            <div class="col-md-4 p-5 pe-md-4">
                <h5>Obatin Farma</h5>
                <p>Obatin Farma adalah aplikasi apotek online berbasis website yang berfokus pada pemenuhan dan distribusi obat-obatan kepada konsumen secara online. konsumen dapat memilih produk obat yang ingin dibeli kemudian melakukan proses pembayaran dan menunggu obat diantar ke rumah.</p>
            </div>
            <div class="col-md-4 p-5 pe-md-4">
                <h5>Developer</h5>
                <ul>
                    <li>Durrotun Nafisah</li>
                    <li>Indah Yunita</li>
                    <li>Fitri Na'ilah Anwar</li>
                </ul>
            </div>
            <div class="col-md-4 p-5 pe-md-4">
                <h5>UNIVERSITAS TRUNOJOYO MADURA</h5>
                <p>Jl Raya Telang, Bangkalan, Madura</p>
            </div>
        </div>
    </footer>

    

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>