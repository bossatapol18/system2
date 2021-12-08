<?php
$sql = "UPDATE standard_tb SET standard_meet = ?, WHERE standard_id = ?" ;
$ss = array($_REQUEST["standard_meet"],$_REQUEST["standard_id"]);
$query = sqlsrv_query($conn, $sql, $ss);
//
if ($query == false) {
    print_r(sqlsrv_errors());
}else{
    echo "OK";
}
