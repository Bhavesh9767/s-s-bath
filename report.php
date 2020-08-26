<?php include('menu.php');?><!--menu bar header -->

<!DOCTYPE html>
<html>
<head>
  <title>Reports</title>
</head>
<body>
<?php
error_reporting(0);
session_start();

  if (isset($_SESSION['login_status'])=="login")
  {
    if($_SESSION['user_email']=="doctor@gmail.com")
    {
      ?>
        <h1>h</h1>

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
                    $q="select * from appointment;";
                    //echo $q;
                    $ans=mysql_query($q1);// or die("query is not run");
                    
                    $i=1;       
                    while($x=mysql_fetch_array($ans))
                    {
                        echo <<<l
                            <tr>
                              <th scope="row">$i</th>
                              <td>$x[0]</td>
                              <td>$x[6]</td>
                              <td>$x[7]</td>
                              <td>$x[8]</td>
                              <td>$x[11]</td>
                            </tr>
l;
                    $i = $i + 1 ;
                    }
                    ?>  
                        </tbody>
                    </table>


      <?php
    }  
    else
    {
      echo '<script type="text/javascript"> alert("Somting Wrong...");  window.location.replace("index.php");</script>';
    }  
  }
  else
  {
    echo '<script type="text/javascript"> alert("Somting Wrong...");  window.location.replace("index.php");</script>';
  }  
?>
</body>
</html>