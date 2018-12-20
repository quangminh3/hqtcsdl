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
                                                
                                    <li class="nav-item">
                                      <a class="nav-link btn" data-toggle="modal" data-target="#dangky" href="#">Đăng ký </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link btn" data-toggle="modal" data-target="#dangnhap" href="#">Đặng nhập </a>
                                    </li>

                                <li class="nav-item">
                                  <a class="nav-link btn" href="#">Liên hệ</a>
                                </li>                  </ul>
                </div>
              </div>
            </nav>
        </div>
   

<div id="dangnhap" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng nhập</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="POST" id="dn_nguoidung">
                    <div class="form-group">                        
                        <input type="text" id="dn_username" class="form-control" placeholder="Tên đăng nhập">                       
                    </div>
                    <div class="form-group">                        
                         <input type="password" id="dn_password" class="form-control" placeholder="Mật khẩu ">                        
                    </div>                        
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="btn_dangnhap">Đăng nhập </button>
                <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </dvi>
</div>
    <div id="dangky" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng ký</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="dk_khachhang">
                    <div class="form-group">                        
                        <input type="text" id="dk_username"class="form-control" placeholder="Tên đăng nhập">                       
                    </div>
                    <div class="form-group">                        
                         <input type="password" id="dk_matkhau" class="form-control" placeholder="Mật khẩu ">                        
                    </div> 
                    <div class="form-group">                        
                         <input type="text" id="dk_hoten" class="form-control" placeholder="Họ tên">                        
                    </div> 
                    <div class="form-group">                        
                        <input type="text" id="dk_email" class="form-control" placeholder="Email">                        
                    </div> 
                    <div class="form-group">                        
                         <input type="text" id="dk_email" class="form-control" placeholder="Phone">                        
                    </div> 
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_dangky">Đăng ký</button>
                <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>        </div>
    
    </body>
</html>
;