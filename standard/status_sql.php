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
    $sql = "SELECT * , a.standard_id,b.agency_name AS name_agency , 
    a.standard_id,c.department_name AS name_department
    FROM standard_tb a INNER JOIN agency_tb b ON a.agency_id  = b.agency_id 
    INNER JOIN department_tb c ON a.department_id = c.department_id";
    $query = sqlsrv_query($conn,$sql);
 ?>