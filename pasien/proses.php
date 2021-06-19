<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Excepetion\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nomor = trim(mysqli_real_escape_string($con, $_POST['nomor']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    mysqli_query($con,"INSERT INTO tb_pasien(id_pasien, nomor_identitas, nama_pasien, jenis_kelamin, alamat, no_telp ) VALUES ('$uuid', '$nomor', '$nama', '$jenis', '$alamat', '$no_telp') or die (mysqli_error($con));
    echo "<script>Window.location='data.php';</script>";
}
else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nomor = trim(mysqli_real_escape_string($con, $_POST['nomor']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    mysqli_query($con,"UPDATE tb_pasien SET nomor_identitas = '$nomor', nama_pasien = '$nama' , jenis_kelamin = '$jenis', alamat = '$alamat', no_telp = '$no_telp' WHERE id_pasien = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>