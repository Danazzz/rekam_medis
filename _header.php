<?php
require_once "_congif/config.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login')."';</script>";
} else{
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}
