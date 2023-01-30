<?php
session_start();
$nik =$_POST['nik'];
$nama =$_POST['nama'];
$username  =$_POST['username'];
$password =$_POST['password'];
$telp =$_POST['telp'];


$koneksi = new PDO('mysql:host=localhost;dbname=pengaduanmasyarakat','root','');
$query = $koneksi->query("SELECT * FROM `masyarakat` WHERE nik='$nik' AND namalengkap='$namalengkap'");
$data = $query->fetch();
if($data){
    $_SESSION['nik'] =$nik;
    $_SESSION['namalengkap'] =$namalengkap;
    $_SESSION['username'] =$username;
    $_SESSION['password'] =$password;
    $_SESSION['telp'] =$telp;
    

    }else{
    header("location:login.php");
}