$_DOMAIN = 'http://news.test/frontend/';
$("#btn_dangnhap").click(function(){
    var username = $('#dn_tendangnhap').val();
    var password = $('#dn_matkhau').val();
    $.ajax({
        url : $_DOMAIN + 'dangnhap.php',
        type : 'POST',
        data : {
            username : username,
            password : password
        }, success : function(data) {             
            $("#alrt").html(data);
        }, error : function() {
            
        }
    });
});
