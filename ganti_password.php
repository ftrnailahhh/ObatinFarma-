<?php 

// panggil koneksi database
include "koneksi.php";

// enkripsi inputan password lama 
$password_lama = md5($_POST['pass_lama']);


// panggil username 
$username = $_POST['username'];

// uji jika pas lama sesuai 
$tampil = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' and password = '$password_lama'");
$data = mysqli_fetch_array($tampil);

// jika data ditemukan maka pass sesuai
if ($data) {
    //    uji jik pass baru dan konfirmasi pass lama itu sama
    $password_baru= $_POST['pass_baru'];
    $konfirmasi_password = $_POST['konfirmasi_pass'];

    if ($password_baru == $konfirmasi_password) {
        // proses update ganti pass
        // enkripsi pass barunya
        $pass_ok = md5($konfirmasi_password);
        $ubah = mysqli_query($koneksi, "UPDATE admin SET password = '$pass_ok' WHERE id = '$data[id]'");
        if ($ubah) {
            echo "<script>alert('Password Anda Berhasil Diubah, silahkan Logout untuk menguji password baru anda!');document.location='home_admin.php'</script>";
        }
    }else {
        echo "<script>alert('Password Baru dan Konformasi Password Anda Tidak Sesuai!');document.location='home_admin.php'</script>";
    }
}else {
    echo "<script>alert('Password Lama Anda Tidak Sesuai!');document.location='home_admin.php'</script>";
}



?>