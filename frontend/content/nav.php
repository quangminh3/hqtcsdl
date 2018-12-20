<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="bootstrap-4.1.3/css/bootstrap.min.css"> 
  <script src="bootstrap-4.1.3/js/jquery.min.js"></script>
  <script src="bootstrap-4.1.3/js/popper.min.js"></script>
  <script  src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
  <script src="js/jQuery-v3-3-1.js"></script>  
  <script src="js/jQuery.form.min.js"></script> 
  <style>
     
  </style>
</head>
<body style="background-color:#f7f7f7">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-susscess bg-white fixed-top">
              <div class="container">
                <a class="navbar-brand" href="#">Nhà tốt</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">            
                    <?php
                        require_once 'connect/init.php';
                            if($user == null){                        
                                echo'                            
                                    <li class="nav-item">
                                      <a class="nav-link btn" data-toggle="modal" data-target="#dangky" href="#">Đăng ký </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link btn" data-toggle="modal" data-target="#dangnhap" href="#">Đặng nhập </a>
                                    </li>

                                ';
                            }
                            else{
                                echo'<li class="nav-item">
                                      <a class="nav-link btn" href="#">Đăng Tin</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link btn" href="#">Tài khoảng </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link btn" href="'.$_DOMAIN.'dangxuat.php">Đăng xuất </a>
                                    </li>';
                            }
                            echo '<li class="nav-item">
                                  <a class="nav-link btn" href="#">Liên hệ</a>
                                </li>';
                    ?>
                  </ul>
                </div>
              </div>
            </nav>
        </div>
   

