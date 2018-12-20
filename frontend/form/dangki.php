<div id="dangky" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng ký</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="dk_khachhang">
                    <div class="input-group mb-3  bg-white">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text bg-white" style="width: 130px;">Tên đăng nhập</span>                                                   
                        </div>
                        <input type="text"  class="form-control" id="dk_tendangnhap">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text bg-white" style="width: 130px;">Mật khẩu</span>                                                   
                        </div>
                        <input type="password" class="form-control" id="dk_matkhau" >
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text bg-white" style="width: 130px;">Họ tên</span>                                                   
                        </div>
                        <input type="text" class="form-control" id="dk_hoten" >
                    </div>                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text bg-white" style="width: 130px;">Ngày sinh</span>                                                   
                        </div>
                        <input type="date" class="form-control" id="dk_ngaysinh">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text bg-white" style="width: 130px;">Điện thoại</span>                                                   
                        </div>
                        <input type="tel" class="form-control" id="dk_dienthoai" >        
                    </div>                      
                    <p class="text-danger" id="dk_alrt" ></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_dangky">Đăng ký</button>
                <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $_DOMAIN; ?>js/dangky.js"></script>