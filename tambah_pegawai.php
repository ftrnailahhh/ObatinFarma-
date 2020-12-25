<?php
// koneksi ke functions.php
require 'functionPegawai.php';

//jalankan function query di functions.php
if ( isset($_POST["submit"]) ) {
	// cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
				<script>
					alert('Data berhasil dimasukkan !');
					document.location.href = 'pegawai.php';
				</script>
		";
	}else{
		echo "
				<script>
					alert('Data gagal dimasukkan !');
					document.location.href = 'tambah_pegawai.php';
				</script>
		";
	}

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
    <link rel="stylesheet" href="pegstyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Daftar Pegawai</title>
  </head>
  <body>
    <div class="daftar m-5 p-4">
        <form class="form m-5 p-4" action="" method="post">
            <h3 class="pt-1"><i class="fas fa-user-cog mr-2"></i>DAFTAR PEGAWAI</h3><hr>
            <div class="form-group row">
                <label for="inputId" class="col-md-6 col-form-label">ID Pegawai</label>
                <div class="col-md-6">
                    <input type="text" name="idPegawai" id="inputId" class="col-md-6" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-md-6 col-form-label">Nama Pegawai</label>
                <div class="col-md-6">
                    <input type="text" name="nama" id="inputNama" class="col-md-6" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAl" class="col-md-6 col-form-label">Alamat</label>
                <div class="col-md-6">
                    <input type="text" name="alamat" id="inputAl" class="col-md-6" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNo" class="col-md-6 col-form-label">No HP</label>
                <div class="col-md-6">
                    <input type="text" name="nomor" id="inputNo" class="col-md-6" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputle" class="col-md-6 col-form-label">Level</label>
                <div class="col-md-3">
                    <select class="form-control" name="level">
                        <option value="Apoteker">Apoteker</option>
                        <option value="Admin">Admin</option>
                        <option value="Asisten Apoteker">Asisten Apoteker</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Kurir">Kurir</option>
                    </select>
                </div>
            </div>
            <a class="btn btn-primary" href="pegawai.php" role="button">Back</a>
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </form>
    </div>
</body>
</html>