<?php
    require_once 'classes/DB.php';
    require_once 'classes/Session.php';
    require_once 'classes/redirect.php';
    
    //connect to DB
    $db = new DB();        
    $_DOMAIN = "http://news.test/admin/";
    date_default_timezone_set('Asia/Ho_Chi_Minh'); 
    $date_current = '';
    $date_current = date("Y-m-d H:i:sa");
    //Session start
    $session = new Session();
    $session->start();
    //Check session
   
    if ($session->get() != ''){
        $user = $session->get();
    }
    else{
        $user = '';
    }
    if ($user){
        // Lấy dữ liệu tài khoản
        $sql = "SELECT * FROM accounts WHERE username = '$user'";
        if ($db->num_rows($sql))
        {            
            $data_user = $db->select($sql);      
            return $data_user = $data_user[0];
            
        }
    }
 
?>