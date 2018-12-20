$_DOMAIN = 'http://news.test/frontend/';
$("#btn_dangky").click(function(){
    var tendangnhap = $('#dk_tendangnhap').val();
    var matkhau = $('#dk_matkhau').val();
    var hoten = $('#dk_hoten').val();
    var ngaysinh = $('#dk_ngaysinh').val();    
    var dienthoai = $('#dk_dienthoai').val();
    
    $.ajax({
        url : $_DOMAIN + 'dangky.php',
        type : 'POST',
        data : {
            tendangnhap : tendangnhap,
            matkhau : matkhau,
            hoten : hoten,
            ngaysinh : ngaysinh,
            dienthoai : dienthoai
        }, success : function(data) {             
            $("#dk_alrt").html(data);
        }, error : function() {
            
        }
    });
});
