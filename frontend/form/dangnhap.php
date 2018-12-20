<div id="dangnhap" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng nhập</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="POST" id="dn_nguoidung" onsubmit="return false;">
                   <div class="input-group mb-3  bg-white">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text bg-white" style="width: 130px;">Tên đăng nhập</span>                                                   
                        </div>
                        <input type="text" id="dn_tendangnhap" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text bg-white" style="width: 130px;">Mật khẩu</span>                                                   
                        </div>
                        <input type="password" id="dn_matkhau" class="form-control">
                    </div>
                    <p class="text-danger" id="alrt"></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="btn_dangnhap">Đăng nhập </button>
                <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $_DOMAIN; ?>js/dangnhap.js"></script>