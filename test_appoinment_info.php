<?php
error_reporting(0); 
session_start();

$c_email_id = $_SESSION['user_email'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ss_bath";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from appointment WHERE eml='".$c_email_id."';";
echo $sql;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
  $row = mysqli_fetch_assoc($result); 
    echo "id: " . $row["app_no"]. " - Name: " . $row[app_date]. " " . $row[app_time]. "<br>";
  echo mysqli_affected_rows($conn);
} 
else 
{
  echo "0 results";
}

mysqli_close($conn);
?>