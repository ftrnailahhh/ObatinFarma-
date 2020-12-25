<?php 

// panggil koneksi database
include "koneksi.php";

$pass = md5($_POST['password']);
// agar hacker tdk mudah msk dlm halaman admin sqli escape string ini
$username = mysqli_escape_string($koneksi, $_POST['username']); 
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

// cek username terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM admin  WHERE username = '$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);

// uji jika username trdaftar
if ($user_valid) {
    // jika username trdaftar 
    // cek pswrd sesuai atau tdk 
   if ($password == $user_valid['password']) {
    //    jika pswrd sesuai 
    // buat session
    session_start();
    $_SESSION['username'] = $user_valid['username'];
    $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
    $_SESSION['level'] = $user_valid['level'];

    // uji level user
    if ($level == "Administrator") {
        header('location:home_admin.php');
    } 
 }else {
    echo "<script>alert('Password Anda Tidak Sesuai!');document.location='index.php'</script>";
} 
}else {
    echo "<script>alert('Username Anda Tidak Terdaftar!');document.location='index.php'</script>";
}

?>
