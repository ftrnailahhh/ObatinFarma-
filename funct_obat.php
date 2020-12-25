<?php 

// koneksi ke database
$conn = mysqli_connect("localhost","root", "", "obatinfarma_db");


function query($query){
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }
   
    return $rows;

}

function tambah($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["namaObat"];
    $stok = $data["stok"];
    $harga = $data["hargaObat"];


    //upload gambar
    $gambar = upload();
    if(!$gambar ){
        return false;
    }


    // $gambar = $data["gambar"];

    // query insert data
    $query= "INSERT INTO obat () VALUES ($id,'$nama',$stok,$harga,'$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yg diupload
    if($error === 4){
        echo "<script
                alert('Upload gambar terlebih dahulu!')
            </script> ";
        return false;
    }

    //cek apakah yang diupload gambar
    $ekstensiValid = ['png', 'jpg', 'jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar,$ekstensiValid)){
        echo "<script
                alert('Pastikan ekstensi file gambar anda png, jpg, atau jpeg!')
            </script> ";
        return false;
    }

    // cek jika ukuran terlalu besar
    if($ukuranFile > 1000000 ){
        echo "<script
                alert('Ukuran gambar terlalu besar! maksimal 1 MB ')
            </script> ";
        return false;
    }

    // gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru.= $ekstensiGambar;
    move_uploaded_file($tmpName, 'gambar_obat/' .$namaFileBaru);

    return $namaFileBaru;


}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM obat where ID_OBAT = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["namaObat"];
    $stok = $data["stok"];
    $harga = $data["hargaObat"];
    $gambarLama = $data["gambarLama"];

    //cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }
    

    // query ubah data
    $query= "UPDATE  obat SET 
                NAMA_OBAT = '$nama',
                STOK = $stok,
                HARGA_OBAT = $harga,
                GAMBAR = '$gambar'
            WHERE ID_OBAT = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword){
    $query = "SELECT * FROM obat WHERE NAMA_OBAT LIKE '%$keyword%'";

    return query($query);
}



?>