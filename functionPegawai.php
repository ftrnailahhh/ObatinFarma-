<?php 
// koneksi kedatabase
$conn = mysqli_connect("localhost", "root", "", "project_basdat");

function query($query) {
	global $conn;
	// mysqli_query -> ambil data query dalam table conn
	$result = mysqli_query($conn, $query);
	// wadah kosong untuk menampung data
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		// begitu ambil data dari lemari simpan ke kotak rows
		$rows[] = $row;
	}
	return $rows;
}
function ubah($data) {
	global $conn;

	// ambil data dari tipa elemen dalam form

	//htmlspecialchars() -> data yang masuk akan diolah agar data tsbt tidak langsung menampilkan hasil dari tag tsbt
	$idP = htmlspecialchars($data["idPegawai"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$nomor= htmlspecialchars($data["nomor"]);
	$level= htmlspecialchars($data["level"]);
	$id = $data["id"];

	//query insert data
	$query = "UPDATE pegawai
				SET
			ID_PEGAWAI = '$idP',
			NAMA = '$nama',
			ALAMAT = '$alamat',
			NOHP = '$nomor',
			LEVElP = '$level'
			WHERE ID_PEGAWAI = '$id'
			";
			
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function tambah($data) {
	global $conn;

	// ambil data dari tipa elemen dalam form

	//htmlspecialchars() -> data yang masuk akan diolah agar data tsbt tidak langsung menampilkan hasil dari tag tsbt
	$id = htmlspecialchars($data["idPegawai"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$nomor= htmlspecialchars($data["nomor"]);
	$level= htmlspecialchars($data["level"]);

	//query insert data
	$query = "INSERT INTO pegawai
				VALUES
			('$id', '$nama', '$alamat', '$nomor', '$level')
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM pegawai WHERE ID_PEGAWAI = '$id'");
	return mysqli_affected_rows($conn);
}
function cari($keyword) {
	$query = "SELECT * FROM pegawai 
				WHERE
			  NAMA LIKE '%$keyword%' OR
			  NOHP LIKE '%$keyword%' OR
			  ID_PEGAWAI LIKE '%$keyword%' OR
			  ALAMAT LIKE '%$keyword%'
				";
	return query($query);
}
?>