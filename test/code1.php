<?php
require('../connection/connection.php');

    
if(isset($_POST['save_multiple_data']) && !empty($_POST))
{
    $group_name = $_POST['group_name'];
    $standard_meet = $_POST['standard_meet'];
    $standard_tacking = $_POST['standard_tacking'];

    $query = "INSERT INTO standard_tb (group_name,standard_meet,standard_tacking) VALUES (?,?,?)";
    $params = array($group_name,$standard_meet,$standard_tacking);
    $query_run = sqlsrv_query($conn, $query,$params);

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Inserted Successfully";
        header("Location: insert-multiple-data.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: insert-multiple-data.php");
        exit(0);
    }
}
?>