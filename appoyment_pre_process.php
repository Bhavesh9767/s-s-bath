<?php

error_reporting(0);
session_start();  

  if (isset($_SESSION['login_status'])=="login")
  {
    if($_SESSION['user_email']!="doctor@gmail.com")
    {
      echo '<script type="text/javascript">window.location.replace("appoyment.php");</script>';
    }
  }
  else
  {
    echo '<script type="text/javascript">alert("Login Frist"); window.location.replace("login.php");</script>';
  }

?>