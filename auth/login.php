<?php
require_once "../_config/config.php";
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
    <link rel="icon" href="<?=base_url('_assets/RS ORTHOPEDI DAN TRAUMATOLOGI.png');?>"
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <div align="center" style="margin-top: 250px;">
                <form action ="" method="post" class="navbar-form">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
