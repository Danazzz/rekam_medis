<?php
// setting default timezone 
date_default_timezone_set('asia/hong_kong');

session_start();

// koneksi ke database
$con=mysqli_connect('localhost','root','','rekam_medis');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

// fungsi base_url
function base_url($url = null){
    $base_url = "http://localhost/Klp3_ProjectWeb";
    if($url != null){
        return $base_url."/".$url;
    }
    else{
        return $base_url;
    }
}
?>