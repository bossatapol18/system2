<table border="1" width="500px">
    <tr align="center">
        <td>ลำดับ</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>สถานะ</td>
        <td>แก้ไข</td>
        <td>ลบ</td>
    </tr>

<?php 

    $sql = "SELECT * FROM main_user";

    $result = $conn-> query($sql)->fetchAll();
    $i=0;
    foreach ($result as $row){ 

    $i+=1;

    $user_id = $row["user_id"];
    $user_fname = $row["user_fname"];
    $user_lname = $row["user_lname"];
    $user_status = $row["user_status"];

    $show_status = status_name($user_status);
    $go_to_edit = "location.href='?PG=3&id=$user_id';";
    $go_to_delete = "if(confirm('ลบข้อมูล')){location.href='process_page.php?mode=delete_data&id=$user_id'}";
 ?>      
 
 <tr align="center">
     <td><?php echo $i; ?></td>
     <td><?php echo $user_fname; ?></td>
     <td><?php echo $user_lname; ?></td>
     <td><?php echo $show_status; ?></td>
     <td><button onclick="<?php echo $go_to_edit; ?>">แก้ไข</button></td>
     <td><button onclick="<?php echo $go_to_delete; ?>">ลบ</button></td>
 </tr>
 <?php

 } 
 
 ?>
 </table>

 <?php 
    function status_name($status_code){
        switch($status_code){
            case"0": $status_name="ลบแล้ว"; break;
            case"1": $status_name="ปกติ"; break;
            default: $status_name="ไม่ระบุ"; break;
        }
        return $status_name;
    }
 ?>
    
