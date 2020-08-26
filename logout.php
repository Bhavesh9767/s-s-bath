<?php
error_reporting(0);
session_start();

   session_destroy();
	echo '<script>  document.location.href="index.php" </script>';
?>