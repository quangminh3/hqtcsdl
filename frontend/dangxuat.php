<?php 
    // Require database & thông tin chung
    require_once 'connect/init.php'; 
    // Xoá session
    $session->destroy();
    new Redirect($_DOMAIN); // Trở về trang index
 
?>