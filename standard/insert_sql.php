<?php 
$type_id = (isset($_GET['type_id'])) ? $_GET['type_id'] : '';
$group_id = (isset($_GET['group_id'])) ? $_GET['group_id'] : '';
$department_id = (isset($_GET['department_id'])) ? $_GET['department_id'] : '';
$agency_id = (isset($_GET['agency_id'])) ? $_GET['agency_id'] : '';
if (isset($_POST) && !empty($_POST)) {
    $group_id = $_POST['group_id'];
    $standard_number = $_POST['standard_number'];
    $type_id = $_POST['type_id'];
    $standard_meet = $_POST['standard_meet'];
    $standard_detail = $_POST['standard_detail'];
    $standard_mandatory = $_POST['standard_mandatory'];
    $standard_tacking = $_POST['standard_tacking'];
    $standard_note = $_POST['standard_note'];
    $agency_id = $_POST['agency_id'];
    $department_id = $_POST['department_id'];
$sql0 = "INSERT INTO standard_tb (standard_meet,standard_number,standard_detail,standard_mandatory,agency_id,department_id,type_id,group_id,standard_tacking,standard_note) VALUES (?,?,?,?,?,?,?,?,?,?)";
$params = array($standard_meet,$standard_number,$standard_detail,$standard_mandatory,$agency_id,$department_id,$type_id,$group_id,$standard_tacking,$standard_note);
if(sqlsrv_query( $conn, $sql0, $params)){
    $alert = '<script type="text/javascript">';
    $alert .= 'alert("เพิ่มข้อมูลสำเร็จ !!");';
    $alert .= 'window.location.href = "?page=status";';
    $alert .= '</script>';
    echo $alert;
    exit();;
}else{
    echo "Error: " . $sql0 . "<br>" . sqlsrv_errors($conn);
}
sqlsrv_close($conn);
}
$sql="SELECT * FROM type_tb ";
$query = sqlsrv_query($conn,$sql);

$sql1="SELECT * FROM group_tb ";
$query1 = sqlsrv_query($conn,$sql1);

$sql2="SELECT * FROM agency_tb ";
$query2 = sqlsrv_query($conn,$sql2);

$sql3="SELECT * FROM department_tb ";
$query3 = sqlsrv_query($conn,$sql3);
?>