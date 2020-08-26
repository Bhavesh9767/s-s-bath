<?php
error_reporting(0); 
session_start();
if(isset($_POST['submit']))
{ 
	error_reporting(0);
	$conn=mysqli_connect('localhost','root','');

	if(!$conn)
	{
		echo "not connected..!!!";
	}
	if(!mysqli_select_db($conn,'ss_bath'))
	{
		echo 'database not selected...!!'; 
	}

	//$link=mysql_connect("localhost","root","") or die("no connection_aborted");
	//mysql_select_db("ss_bath") or die("database not selected");

	$name = $_POST["c_name"];
	$eml = $_POST["c_email"];
 	$gndr = $_POST["c_gender"];
 	$age = $_POST['c_age'];
 	$cnt = $_POST["c_contact"];
 	$ill = $_POST["c_ill"];
 	$app_date = $_POST["c_app_date"];
 	$app_time = $_POST["c_app_time"];
 	$req_date = $_POST["c_req_date"];
 	$req_time = $_POST["c_req_time"];


	if($_SESSION['app_temp_no']=="1")
 	{
	 		//fatch meximum id
			$sql = "SELECT MAX(app_no) AS max FROM `appointment`;";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				// output data of each row
				$row = mysqli_fetch_assoc($result);
				$app_number = $row['max'] + 1;
				//echo $app_number;
				$_SESSION['app_temp_no']="2" ; 
			} 
			else
			{
				echo "0 results";
			}
		
			$conn2=mysqli_connect('localhost','root','');

				if(!$conn2)
				{
					echo "not connected 2..!!!";
				}
				if(!mysqli_select_db($conn2,'ss_bath'))
				{
					echo 'database not selected 2...!!'; 
				}

	$qry="INSERT INTO  `appointment` (  `app_no` ,  `name` ,  `eml` ,  `gndr` ,  `age` ,  `cnt` ,  `ill` ,  `app_date` ,  `app_time` ,  `req_date` ,  `req_time` , `app_status` ) VALUES ( '".$app_number."',  '".$name."',  '".$eml."',  '".$gndr."',  '".$age."',  '".$cnt."',  '".$ill."',  '".$app_date."',  '".$app_time."',  '".$req_date."',  '".$req_time."',  'Appointment Book'); ";
	//echo $qry;
		mysqli_query($conn2,$qry);
		if(mysqli_affected_rows($conn2)==1)
		{
			echo "<script>alert('Appointment Book successfully Appointment No:- ".$app_number." '); window.location.replace('appoyment_info.php'); </script>";
		}
		else
		{
		   	echo "<script>alert('Somting Wrong');</script>";
		}
			}
	else
	{
		echo "<script>alert('Somting Wrong...'); window.location.replace('appoyment_pre_process.php'); </script>";
	}
}
?>