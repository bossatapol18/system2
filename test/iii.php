<html>
<head>
<title>ThaiCreate.Com PHP & SQL Server (sqlsrv)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

<?php
require('../connection/connection.php');

   if( $conn === false ) {
      die( print_r( sqlsrv_errors(), true));
   }
	
   $sql = "SELECT * FROM group_tb WHERE group_name LIKE '%".$strKeyword."%' ";
   $query = sqlsrv_query($conn, $sql);

?>
<table width="600" border="1">
  <tr>
    <th width="98"> <div align="center">Name </div></th>
  </tr>
<?php
while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
{
?>
  <tr>
    <td><?php echo $result["group_name"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
sqlsrv_close($conn);
?>
</body>
</html>