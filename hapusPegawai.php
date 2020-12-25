<?php 
require 'functionPegawai.php';

$id = $_GET["ID_PEGAWAI"];
if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('Data berhasil dihapus !');
			document.location.href = 'pegawai.php';
		</script>
		";
}else{
	echo "
		<script>
			alert('Data gagal dihapus !');
			document.location.href = 'pegawai.php';
		</script>
		";
}

?>