<?php
    echo'
        <h4>Nhân viên</h4>
        <a class="text-justify-end" href="#"><span class="glyphicon glyphicon-plus"></span>Thêm nhân viên</a>
        <hr style="border: 1px dashed grey"></hr>       
        <table class="table">
        <thead>
          <tr>
            <th>Chọn</th>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>';
    require_once 'core/init.php';
    $sql = "SELECT id, username, fullname, email FROM accounts";    
    if($db->num_rows($sql)){
        $temp = $db->select($sql);
        foreach($temp as $rows){
            echo'<tr><td><input type="checkbox" name="ckb_nhanvien" id="ckb_nhanvien"></td>';
            foreach($rows as $key => $value){                
                echo'<td>'.$value.'</td>';                  
            }
             echo'</tr>';
        }
        
    }
        
?>