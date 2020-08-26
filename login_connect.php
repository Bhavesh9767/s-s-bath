<?php

	error_reporting(0);
	$link=mysql_connect("localhost","root","") or die("no connection_aborted");
	mysql_select_db("ss_bath") or die("database not selected");


if(isset($_POST['submit']))
{ 

 	$eml = $_POST["c_email"];
 	$pass = $_POST["c_pass"];


 	$qry="select * from registration WHERE eml='".$eml."' AND pass=".$pass.";";
	//echo "$qry";

			$result=mysql_query("$qry");
			//echo mysql_error($link);
		session_start();
		if(mysql_num_rows($result)==1)
		{
			echo '<script type="text/javascript"> alert("Data Valid...!!!")</script>';
			echo "welcome";
		}
		else
		{
			echo '<script type="text/javascript"> alert("Data  not Valid...")</script>';
			echo "not welcome";
		}
}
?>