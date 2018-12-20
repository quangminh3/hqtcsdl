<?php 
// Kết nối database và thông tin chung
require_once 'connect/init.php';
// Nếu có tồn tại phương thức post
if (isset($_POST['tendangnhap']) && isset($_POST['matkhau']) && isset($_POST['hoten']) && isset($_POST['ngaysinh']) && isset($_POST['dienthoai']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];    
    $sql = "SELECT username FROM accounts WHERE username = '$username'";
    if($db->num_rows($sql) > 0){
        $sql = "SELECT id, username FROM accounts WHERE username = '$username' AND password = '$password'";
        if($db->num_rows($sql)){
            $temp = $db->select($sql);          
            $result = $temp[0];   
            
            $session->set($result['id'], $result['username']);            
            new Redirect($_DOMAIN);
        }
        else{
            echo "Thong tin khong chinh xac.";            
        }        
    }
    else{
        echo "Vui lòng điền đầy đủ thông tin.";
    }
}
// Ngược lại không tồn tại phương thức post
else{
    echo "Vui lòng điền đầy đủ thông tin"; // Trở về trang index
}
 
?>