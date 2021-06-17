<?php
require_once "_congif/config.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} ?>   
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Naditya Wisna &mdash; Login</title>
      <!-- Bootstrap Core CSS -->
      <link href="<?=base_url('_assets/simple-sidebar/css/bootstrap.min.css');?>" rel="stylesheet">
      <link href="<?=base_url('_assets/simple-sidebar/css/simple-sidebar.css');?>" rel="stylesheet">
      <link rel="icon" href="<?=base_url('_assets/RS ORTHOPEDI DAN TRAUMATOLOGI.png');?>"
</head>
<body>
    <script src="<?=base_url('_assets/simple-sidebar/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/simple-sidebar/js/bootstrap.min.js')?>"></script>
    <div id="wrapper"> 
        <div id="sidebar-wrapper">
           <ul class="sidebar-nav">
              <li class="sidebar-brand">
                 <a href="#">Rumah Sakit </a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Data Pasien</a>
        </li>
        <li>
            <a href="#">Data Dokter</a>
        </li>
        <li>
            <a href="#">Data Poliklinik</a>
        </li>
        <li>
            <a href="#">Data Obat</a>
        </li>
        <li>
            <a href="#">Rekam Medis</a>
        </li>
        <li>
            <a href="#">Logout</a>
        </li>
    </ul>
</div>  
<div id="page-content-wrapper">
    <div class="container-fluid">
