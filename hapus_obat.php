<?php 
require 'funct_obat.php';

$id = $_GET["id"];

if(hapus($id) > 0 ) {
    echo "
      <script>
        alert('Data Obat Telah Berhasil Dihapus!');
        document.location.href = 'daftar_obat.php'
      </script>
    ";
}else{
    echo "
    <script>
      alert('Sayang Sekali, Data Obat Gagal Dihapus!');
      document.location.href = 'daftar_obat.php'
    </script>
  ";
  }

?>