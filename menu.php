<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.css" > <!--load all styles -->   

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script defer src="js/all.js"></script> <!--load all styles -->

<style type="text/css"> body{ background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(1.jpg); background-size: cover; } </style>
<!--Start Navbar-->
<div id="top navbar">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" >
  <a class="navbar-brand" href="index.php"><img src="image\Logo_with_titel2.png" style="width: 250px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" >
  <ul class="nav mr-auto">
      <li class="nav-item active">
		<a class="nav-link btn btn-light" href="index.php" data-toggle='tooltip' title='HOME'> HOME </a>
      </li>
      &nbsp;&nbsp;&nbsp;
	  <li class="nav-item active">
      <?php
        error_reporting(0);
        session_start();
        if($_SESSION['user_email']=="doctor@gmail.com")
        {
            echo "<a class='nav-link btn btn-light' href='report.php' data-toggle='tooltip' title='APPOYMENT REPORTS'> APPOYMENT REPORTS </a>";
        }
        else
        {
          echo "<a class='nav-link btn btn-light' href='appoyment_pre_process.php' data-toggle='tooltip' title='APPOYMENT'> APPOYMENT </a>";
        }
        if(($_SESSION['user_email'])!="doctor@gmail.com" && ($_SESSION['login_status'])=="login")
        {
            echo "</li>&nbsp;&nbsp;&nbsp;<li>";
    
            echo "<a class='nav-link btn btn-light' href='appoyment_info.php' data-toggle='tooltip' title='YOUR APPOYMENT DETAIL'>YOUR APPOYMENT DETAIL</a>";
        }
        ?>

      </li>
      &nbsp;&nbsp;&nbsp;
	  <li class="nav-item">
		<a class="nav-link btn btn-light" href="galary.php" data-toggle='tooltip' title='GALARY'> GALARY </a>
      </li>
      &nbsp;&nbsp;&nbsp;
      <li class="nav-item">
		<a class="nav-link btn btn-light" href="about_us.php" data-toggle='tooltip' title='ABOUT US'> ABOUT US </a>
      </li>
  </ul> 

  <form class="form-inline">
    
     <?php
    //  error_reporting(0);
    //  session_start();
    
    if (isset($_SESSION['login_status'])=="login")
    {
      if($_SESSION['user_email']=="doctor@gmail.com")
      {
          echo "<a class='nav-link btn btn-light' href='report.php' data-toggle='tooltip' title='Report'><i class='far fa-file-alt'></i> REPORTS </a>&nbsp;&nbsp;&nbsp;";
      }
      echo "<a class='nav-link btn btn-light' href='logout.php' data-toggle='tooltip' title='".$_SESSION['user_email']."'> <i class='fas fa-user-lock'></i> LOGOUT </a> &nbsp;";
    }
    else
    {
      echo "<a class='nav-link btn btn-light' href='registration.php' data-toggle='tooltip' title='REGISTRATION'><i class='fas fa-user-plus'></i> REGISTRATION </a>&nbsp;&nbsp;&nbsp;";
      echo "<a class='nav-link btn btn-light' href='login.php' data-toggle='tooltip' title='LOGIN'> <img src='image/login-128.png'> LOGIN </a> &nbsp;";
    }
    ?>
  </form>
  
  </div>
</nav>
</div>
<br><br><br>  

<!--End Navbar-->

