<?php
date_default_timezone_set('asia/hong_kong');
session_start();

$con=mysqli_connect('localhost','root','','rekam_medis');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}
?>