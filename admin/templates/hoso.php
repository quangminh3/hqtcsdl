<?php
    require_once 'core/init.php';
    $sql = "SELECT * FROM accounts WHERE id=".$_SESSION["id"];
    $temp = $db->select($sql);
    $result = $temp[0];
    echo '<table class="table table-hover">    
      <tr>
        <td colspan="2"><h4>'.strtoupper($result["FULLNAME"]).'<h4></td>        
      </tr>';
    foreach ($result as $key =>$value){
        echo '<tr class="">
            <td class="w-5">'.$key.'</td>
            <td class="w-7"><b>'.$value.'<b></td>        
            </tr>';
    }   
    echo '</table>';
?>