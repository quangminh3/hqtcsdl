<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Site Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>bootstrap-4.1.3/css/bootstrap.min.css"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="<?php echo $_DOMAIN; ?>bootstrap-4.1.3/js/jquery.min.js"></script>
    <script src="<?php echo $_DOMAIN; ?>bootstrap-4.1.3/js/popper.min.js"></script>
    <script src="<?php echo $_DOMAIN; ?>bootstrap-4.1.3/js/jquery.min.js"></script>
  
    
</head>
<body style="background-color:#f7f7f7">
    <div class="container border">
        
        <?php 
        // Nếu chưa đăng nhập
        if (!$user)
        {
            require_once 'templates/loginform.php';
        }
        // Nếu đăng nhập
        else
        {
            echo '<div class="row "><div class="mx-auto m-3 col-md-12"><ul class="nav justify-content-end row bg-white border"><li class="nav-item"><a class="nav-link" href="'.$_DOMAIN.'logout.php'.'" style="background-color: transparent;">Logout <span class="glyphicon glyphicon-share"></span></a></li></ul></div></div>';
            
            // Hiển thị sidebar
            echo'<div class="row">';
            require_once 'templates/sidebar.php';        
            // Hiển thị sidebar
            require_once 'templates/content.php';
            echo"</div>";
        }

        ?>