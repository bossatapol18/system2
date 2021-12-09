<?php
include 'database.php';
if(isset($_POST['submit']))
{
$type_id=$_POST['type_id'];
foreach ($_POST['type_name'] as $key => $value) 
{
	if(in_array($_POST['type_name'][$key], $type_id))
	{
    $type_id=$_POST['type_id'];
	$type_name=$_POST['type_name'][$key];
    
	$sql="INSERT INTO type_tb VALUES (?)";
    $params = array($type_id,$type_name);
	$result=sqlsrv_query($conn,$sql,$params);
	}
}
}
header('Location: index.php');
?>