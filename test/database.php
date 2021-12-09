<!-- <?php
// Database configuration 
$dbHost     = "localhost";  //  your hostname
$dbUsername = "root";       //  your table username
$dbPassword = "";          // your table password
$dbName     = "codingstatus";  // your database name
 
// Create database connection 
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
?> -->

<!-- 
<?php
$con=mysqli_connect('localhost','root','','multiple_checkbox');

if(mysqli_connect_errno())
{
	echo 'Failed to connect '.mysqli_connect_error();
}
?> -->

<?php
$serverName = "DESKTOP-R0ETL6G"; //LAPTOP-O7F4B0NM , DESKTOP-R0ETL6G
$user = "pluem";
$pass = "1234";


$connectionInfo = array( "Database"=>"Project", "UID"=>$user, "PWD"=>$pass , "characterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if( $conn ) {
     // echo "GOOD!!"; 
}else{
     echo "BAD!!"; 
     die( print_r( sqlsrv_errors(), true)); 
     }


?>