<?php

if(isset($_POST['submit']))
{ 
	$con=mysqli_connect('localhost','root','');

	if(!$con)
	{
		echo "not connected..!!!";
	}
	if(!mysqli_select_db($con,'ss_bath'))
	{
		echo 'database not selected...!!'; 
	}

	$name = $_POST["c_name"];
	$eml = $_POST["c_email"];
 	$pass2 = $_POST["c_pass"];
 	$pass=md5($pass2);
 	$cnt = $_POST["c_contact"];
 	$add = $_POST["c_add"];
 	$gndr = $_POST["c_gender"];
 	$age = $_POST['c_age'];


	$qry="INSERT INTO `registration` ( `id` , `name` , `eml` , `pass` , `cnt` , `add` , `gndr` , `agr` )
							  VALUES (NULL , '".$name."', '".$eml."', '".$pass."', '".$cnt."', '".$add."', '".$gndr."', '".$age."');";
	//echo $qry;

		if(!mysqli_query($con,$qry))
	{
		echo '<script type="text/javascript"> alert("Data not inserted...!!!"); window.location.replace("registration.php"); </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Data inserted successfully..."); window.location.replace("login.php");</script>';
	}
}
?>