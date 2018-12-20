$_DOMAIN = 'http://news.test/admin/';
$("#loginbutton").click(function(){
    var username = $('#username').val();
    var password = $('#password').val();
    $.ajax({
        url : $_DOMAIN + 'login.php',
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
