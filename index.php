<?php   
    
    require_once 'http://news.test/admin/core/init.php';
    $sql = "SELECT * FROM accounts";
    $temp = $db->select($sql);
    echo $temp;
    
?>
