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
    <title>Appointment Information</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/appoyment.css">
</head>
<body>    
    <?php include('menu.php');?><!--menu bar header -->
 <?php
                    $sql = "select * from appointment WHERE eml='".$c_email_id."';";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) 
                    {
                      // output data of each row
                      $y = mysqli_fetch_assoc($result); 
                      $affected_rows = mysqli_affected_rows($conn);
                    }
                    else 
                    {
                      echo "0 results";
                    }  
                      
                    if($affected_rows != 0 )
                    { 
                    
                    ?>
                    <br>
                    <table class="table table-info">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Age</th>
                          <th scope="col">Contact</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                        
                            echo "<tr><td> " . $y["name"]. "</td>
                                      <td> " . $y["eml"] . "</td>
                                      <td> " . $y["gndr"]. "</td>
                                      <td> " . $y["age"] . "</td>
                                      <td> " . $y["cnt"] . "</td>
                                  </tr>";
                        
                    ?>
                      <tbody>
                    </table>

                        <table class="table table-info">
                        <thead>
                            <tr>
                              <th scope="col">S NO</th>
                              <th scope="col">Appointment No</th>
                              <th scope="col">Illnesses</th>
                              <th scope="col">Date</th>
                              <th scope="col">Time</th>
                              <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                    <?php 

                    $q1="select * from appointment WHERE eml='".$c_email_id."';";
                    //echo $q;
                    $ans1=mysqli_query($conn , $q1);// or die("query is not run");
                    
                    $i=1;       
                    while($x=mysqli_fetch_assoc($ans1))
                    {
                        echo "<tr>
                                  <th scope='row'>" . $i    . "</th>
                                  <td> " . $x["app_no"]     . "</td>
                                  <td> " . $x["ill"]        . "</td>
                                  <td> " . $x["app_date"]   . "</td>
                                  <td> " . $x["app_time"]   . "</td>
                                  <td> " . $x["app_status"] . "</td>
                              </tr>";

                    $i = $i + 1 ;
                    }
                    ?>  
                        </tbody>
                    </table>

                    <?php 

                        }
                        else
                        {
                            echo "<br><h1 align='center' style='color: white; text-shadow: 2px 2px black;' > No Appointment</h1>";
                        }
                    ?>



</body>
</html>