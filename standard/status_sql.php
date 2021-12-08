<?php
if (isset($_POST) && !empty($_POST)) {
    $standard_name = $_POST['standard_name'];
    $standard_number = $_POST['standard_number'];
    $type_id = $_POST['type_id'];
    $standard_meet = $_POST['standard_meet'];
    $standard_detail = $_POST['standard_detail'];
    $standard_mandatory = $_POST['standard_mandatory'];
    $standard_tacking = $_POST['standard_tacking'];
    $standard_note = $_POST['standard_note'];
    $agency_id = $_POST['agency_id'];
    $department_id = $_POST['department_id'];
}
    $sql = "SELECT * FROM standard_tb ";
    $query = sqlsrv_query($conn,$sql);
?>





<!-- อันนี้อันเก่า ลองไม่ใส่แล้ว หน้าเอกสารทั้งหมดดึงข้อมูลไม่ออก -->
    <?php
if (isset($_POST) && !empty($_POST)) {
    $standard_name = $_POST['standard_name'];
    $standard_number = $_POST['standard_number'];
    $type_id = $_POST['type_id'];
    $standard_meet = $_POST['standard_meet'];
    $standard_detail = $_POST['standard_detail'];
    $standard_mandatory = $_POST['standard_mandatory'];
    $standard_tacking = $_POST['standard_tacking'];
    $standard_note = $_POST['standard_note'];
    $agency_id = $_POST['agency_id'];
    $department_id = $_POST['department_id'];
}
    $sql = "SELECT * FROM standard_tb";
    $query = sqlsrv_query($conn,$sql);
?>
