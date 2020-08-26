<?php

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

if(isset($_POST['submit']))
{ 

 	$eml = $_POST["c_email"];
 	$pass2 = $_POST["c_pass"];
 	$pass=md5($pass2);
 	session_start();
			
	if($eml == "doctor@gmail.com" && $pass2=="Doctor@1234")
	{
		$_SESSION['user_email']="doctor@gmail.com";
		$_SESSION['login_status']="login";
		echo '<script type="text/javascript"> alert("Login Successfully...!!!");  window.location.replace("index.php");</script>';
	} 	
	else
	{

	 	$sql = "select * from registration WHERE eml='".$eml."' AND pass='".$pass."';";
		$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 1) 
			{
				$_SESSION['user_email']="$eml";
				$_SESSION['login_status']="login";

				echo '<script type="text/javascript"> alert("Login Successfully...!!!");  window.location.replace("index.php");</script>';
			}
			else
			{
				echo '<script type="text/javascript"> alert("Wrong UserID Password...");  window.location.replace("login.php");</script>';
			}
	}
}
?>