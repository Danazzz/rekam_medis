<?php
date_default_timezone_set('asia/hong_kong');
session_start();

$con=mysqli_connect('localhost','root','','rekam_medis');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

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