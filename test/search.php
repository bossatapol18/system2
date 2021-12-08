<?php  
require('../connection/connection.php');
 if(isset($_POST["query"])&& !empty($_POST["query"]))  
 {  
    $group_id = $_POST['group_id'];
    $group_name = $_POST['group_name'];
     $output = '';  
      $query = "SELECT * FROM group_tb WHERE group_name VALUES (?,?) LIKE '%".$_POST['query']."%' ";  
      $params = array($group_id,$group_name);
      $result = sqlsrv_query($conn, $query , $params);  
      $output = '<ul class="list-unstyled">';  
      if(sqlsrv_num_rows($result) > 0)  
      {  
           while($row =sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))  
           {  
                $output .= '<li>'.$row["group_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>ไม่มี</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  