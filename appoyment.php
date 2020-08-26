<?php
error_reporting(0); 
session_start();
  $conn=mysqli_connect('localhost','root','');

  if(!$conn)
  {
    echo "not connected..!!!";
  }
  if(!mysqli_select_db($conn,'ss_bath'))
  {
    echo 'database not selected...!!'; 
  }

$c_email_id = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="image/title_logo.png">
    <title>Appointment</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/appoyment.css">
<style>
    #ragistetion_table
    {
        border-collapse: separate;
        border-spacing: 10px; /* Apply cell spacing */
        padding: 5px; /* Apply cell padding */
    }
    p{ text-shadow: 2px 2px black;}
</style>
</head>
<body>    
    <?php include('menu.php');?><!--menu bar header -->
<br>
<div class="reg" style="border: 2px solid;  margin-left: 32%; margin-right: 32%; height: 525px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  ">
            <h1 style="color:white;" align="center">APPOINTMENT</h1>
            <form name="appoyment_form" action="appoyment_operation.php" onSubmit="return Appointment()" method="post">
            <center>
                <table id="ragistetion_table" border="0">
            
                <?php

                    $q1="select * from registration WHERE eml='".$c_email_id."';";
                    //echo $q;
                    $ans1=mysqli_query($conn , $q1);// or die("query is not run");
                    
                           
                    while($x=mysqli_fetch_assoc($ans1))
                    {
                        $gender_data = $x["gndr"];
                        $age_data = $x["agr"];
                        echo "<tr>
                                    <td><p style='color:white'> Name </p></td><td><input type='text' name='c_name' placeholder='Enter your name'
                                    value='".$x["name"]."' class='form-control mr-sm-2'></td>
                                </tr>
                                <tr>
                                    <td><p style='color:white'> Email </p></td><td><input type='text' name='c_email' placeholder='Enter your Email' value='".$x["eml"]."'  class='form-control mr-sm-2'></td>
                                </tr>
                                <tr>
                                    <td><p style='color:white'> Gender </p></td>
                                    <td>
                                          <p style='color:white'>    Male : <input type='radio' name='c_gender' id= 'c_gender_male' value='Male' class='radio-inline' >
                                                                     Female : <input type='radio' name='c_gender' id='c_gender_female' value='Female' class='radio-inline'>
                                            </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><p style='color:white'> Age :</p></td><td> 
                                        <select name='c_age' class='form-control mr-sm-2'>
                                            <option value='' disabled='disabled' selected='selected' >Select Age</option>
                                            <option value='10 to 20 year' id='10 to 20 year' >10 to 20 year</option>
                                            <option value='21 to 30 year' id='21 to 30 year' >21 to 30 year</option>
                                            <option value='31 to 40 year' id='31 to 40 year' >31 to 40 year</option>
                                            <option value='41 to 50 year' id='41 to 50 year' >41 to 50 year</option>
                                            <option value='51 to 60 year' id='51 to 60 year' >51 to 60 year</option>
                                            <option value='61 to 70 year' id='61 to 70 year' >61 to 70 year</option>
                                            <option value='71 to 80 year' id='71 to 80 year' >71 to 80 year</option>
                                            <option value='81 to 90 year' id='81 to 90 year' >81 to 90 year</option>
                                            <option value='91 to 100 year' id='91 to 100 year' >91 to 100 year</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><p style='color:white'> Contact </p></td><td><input type='text' name='c_contact' placeholder='Contact'  value='".$x["cnt"]."' class='form-control mr-sm-2'></td>
                                </tr>
                                <tr>
                                <td><p style='color:white'>Any Illnesses</p></td><td><input type='text' name='c_ill' placeholder='Enter Illnesses' class='form-control mr-sm-2'></td>
                                </tr>
                                <tr>
                                    <td><p style='color:white'> Date </p></td><td><input type='date' name='c_app_date'  class='form-control mr-sm-2'>
                                    </td>
                                </tr>
                                <tr>
                                    <td><p style='color:white'> Time :</p></td><td> 
                                        <select name='c_app_time' class='form-control mr-sm-2'>
                                            <option  value='' disabled='disabled' selected='selected' >Select Your Suitable Time</option>
                                            <option value='9 to 10 am'>9 to 10 AM</option>
                                            <option value='10 to 11 am'>10 to 11 AM</option>
                                            <option value='11 to 12 am'>11 to 12 AM</option>
                                            <option value='2 to 3 pm'>2 to 3 PM</option>
                                            <option value='3 to 4 pm'>3 to 4 PM</option>
                                            <option value='4 to 5 pm'>4 to 5 PM</option>
                                        </select>
                                    </td>
                                </tr>";

                        $i = $i + 1 ;
                    }  
                    $_SESSION['app_temp_no']="1";
                ?>
                
                </table>
                <input type="hidden" name="c_req_date" id="c_req_date">
                <input type="hidden" name="c_req_time" id="c_req_time">
                <input type="hidden" name="temp_no" id="temp_no" value="1">                   
                <input type="submit" value="submit" name="submit" class="btn btn-light" > &nbsp;&nbsp;&nbsp;
                <input type="reset" name="" value="Reset" class="btn btn-light" >
            </center>
            </form>

            <script type="text/javascript" src="js/validation_for_appoyment.js"></script>
            <script type="text/javascript">
                var dt = new Date();
                var c_req_date_var =dt.getFullYear() + "-" + ("0"+(dt.getMonth()+1)).slice(-2) + "-" + ("0" + dt.getDate()).slice(-2);//("0" + dt.getDate()).slice(-2) + "-" + ("0"+(dt.getMonth()+1)).slice(-2) + "-" + dt.getFullYear() ;
                var c_req_time_var = ("0" + dt.getHours()).slice(-2) + ":" + ("0" + dt.getMinutes()).slice(-2)+ ":" + ("0" + dt.getSeconds()).slice(-2);
                
                document.getElementById("c_req_date").value = c_req_date_var;
                document.getElementById("c_req_time").value = c_req_time_var; 
            </script>
            <?php 
                if($gender_data == "male")
                {
                    echo "<script> document.getElementById('c_gender_male').checked = true; </script>";
                }
                else if($gender_data == "female")
                {
                    echo "<script> document.getElementById('c_gender_female').checked = true; </script>";                   
                }

                if($age_data == "10 to 20 year")
                {
                    echo "<script> document.getElementById('10 to 20 year').selected = 'true';</script>";                   
                }
                else if($age_data == "21 to 30 year")
                        {
                            echo "<script> document.getElementById('21 to 30 year').selected ='true';</script>";                
                        }
                else if($age_data == "31 to 40 year")
                        {
                            echo "<script> document.getElementById('31 to 40 year').selected ='true';</script>";                
                        }
                else if($age_data == "41 to 50 year")
                        {
                            echo "<script> document.getElementById('41 to 50 year').selected ='true';</script>";            
                        }
                else if($age_data == "51 to 60 year")
                        {
                            echo "<script> document.getElementById('51 to 60 year').selected ='true';</script>";                
                        }
                else if($age_data == "61 to 70 year")
                        {
                            echo "<script> document.getElementById('61 to 70 year').selected ='true';</script>";                
                        }
                else if($age_data == "71 to 80 year")
                        {
                            echo "<script> document.getElementById('71 to 80 year').selected ='true';</script>";            
                        }
                else if($age_data == "81 to 90 year")
                        {
                            echo "<script> document.getElementById('81 to 90 year').selected ='true';</script>";            
                        }
                else if($age_data == "91 to 100 year")
                        {
                            echo "<script> document.getElementById('91 to 100 year').selected ='true';</script>";            
                        }
            ?>
        </div>
</body>
</html>