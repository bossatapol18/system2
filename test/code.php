
<?php
require('../connection/connection.php');

if(isset($_POST['save_multiple_checkbox']))
{
    $brands = $_POST['brands'];
    // echo $brands;

    foreach($brands as $item)
    {
        $type_name = $_POST['type_name'];
        // echo $item . "<br>";
        $query = "INSERT INTO standard_tb (type_name) VALUES ('?')";
        $params = array($item);
        $query_run = sqlsrv_query($conn, $query , $params);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: index.php");
    }
}
?>