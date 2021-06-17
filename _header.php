<?php
require_once "_congif/config.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} else{
?>   
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
    <div id = "wrapper">
</body>
</html>
<?php
}
?>