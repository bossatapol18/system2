<?php 
 include("./connect_db.php");

 date_default_timezone_set("Asia/Bangkok");
 $date_today = date("Y-m-d H:i:s");

 $mode = $_REQUEST["mode"];

 if($mode == "insert_data"){
     $fname = $_REQUEST["fname"];
     $lname = $_REQUEST["lname"];
     $username = $_REQUEST["username"];
     $password = $_REQUEST["password"];

     $sql = "INSERT INTO main_user (user_fname,user_lname,user_username,user_password,user_status,user_add_date)
     VALUES ('$fname','$lname','$username','$password','1','$date_today')";

     $conn->query($sql);

     echo "<script>location.href='index.php?PG=1';</script>";
 }

 if($mode == "edit_data"){

    $id = $_REQUEST["id"];

    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $status = $_REQUEST["status"];
    // $status= (isset($_REQUEST["status"])) ? $_REQUEST["status"] :'1';

    $sql = "UPDATE main_user SET
        user_fname='$fname',
        user_lname='$lname',
        user_username='$username',
        user_password='$password',
        user_status='$status',
        user_edit_date='$date_today'
        WHERE user_id = '$id'
        ";

        $conn->query($sql);
        echo "<script>location.href='index.php?PG=1';</script>";
 }

 if($mode == "delete_data"){

    $id = $_REQUEST["id"];

    $sql = "UPDATE main_user SET user_status = '0',user_edit_date='$date_today' WHERE user_id = '$id'";

        $conn->query($sql);
        echo "<script>location.href='index.php?PG=1';</script>";
 }
?>