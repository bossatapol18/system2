<?php
require_once "db.php";
if (isset($_GET['agency_name']) && !empty($_GET['agency_name'])) {
  $agency_name = $_GET['agency_name'];
  $agency_name = $_POST['agency_name'];
$sql2 = ("SELECT * FROM agency_tb  WHERE agency_name VALUES (?) LIKE '%".$agency_name."%' LIMIT 25");
$params = array($agency_name);
$result  = sqlsrv_query($conn, $sql2 , $params);
if (sqlsrv_num_rows($result) > 0) {
     while ($user = sqlsrv_fetch_array($result , SQLSRV_FETCH_ASSOC)) {
      $res[] = $user['agency_name'];
     }
    } else {
      $res = array();
    }
    echo json_encode($res);
}
?>