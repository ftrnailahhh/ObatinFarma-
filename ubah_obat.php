<?php 
require 'funct_obat.php';

//ambil data di url
$id = $_GET["id"];

//query data
$dataObat = query("SELECT * FROM obat WHERE ID_OBAT = $id ")[0];

// cek tombol submit
if(isset($_POST["submit"])){
  //cek
  if(ubah($_POST) > 0 ){
    echo "
      <script>
        alert('Data Obat Telah Berhasil Diubah!');
        document.location.href = 'daftar_obat.php'
      </script>
    ";

  }else{
    echo "
    <script>
      alert('Sayang Sekali, Data Obat Gagal Diubah!');
      document.location.href = 'daftar_obat.php'
    </script>
  ";
  }

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
    <link rel="stylesheet" href="daftar_obat.css">
     
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <title>Daftar Obat | Obatin Farma</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Halaman Admin | <b>Obatin Farma</b> </a>
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
        <h3><i class="fas fa-capsules me-2 "></i>UBAH DATA OBAT</h3><hr>

        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="gambarLama" value="<?= $dataObat["GAMBAR"]; ?>">
            <div class="row mb-3">
              <label for="id" class="col-sm-2 col-form-label">ID Obat</label>
              <div class="col-sm-10">
                <input type="number" name="id" class="form-control" id="id" required value="<?= $dataObat["ID_OBAT"]; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="namaObat" class="col-sm-2 col-form-label">Nama Obat</label>
              <div class="col-sm-10">
                <input type="text" name="namaObat" class="form-control" id="namaObat" required value="<?= $dataObat["NAMA_OBAT"]; ?>">
              </div>
            </div>

            <div class="row mb-3">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                  <input type="number" name="stok" class="form-control" id="stok" required value="<?= $dataObat["STOK"]; ?>">
                </div>
              </div>

              <div class="row mb-3">
                <label for="hargaObat" class="col-sm-2 col-form-label">Harga Obat</label>
                <div class="col-sm-10">
                  <input type="number" name="hargaObat" class="form-control" id="hargaObat" required value="<?= $dataObat["HARGA_OBAT"]; ?>">
                </div>
              </div>

              <!-- <div class="row mb-3">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar Obat</label>
                <div class="col-sm-10">
                  <input type="text" name="gambar" class="form-control" id="gambar" value="<?= $dataObat["GAMBAR"]; ?>">
                </div>
              </div> -->

              <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label><br>
                <img src="gambar_obat/<?= $dataObat["GAMBAR"]; ?>" width="150"  alt=""><br>
                <input class="form-control" type="file" name="gambar" id="gambar" >
              </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
          </form>
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