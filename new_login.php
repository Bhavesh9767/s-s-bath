
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
<style>
    #login_table
    {
        border-collapse: separate;
        border-spacing: 10px; /* Apply cell spacing */
        padding: 5px; /* Apply cell padding */
    }
</style>
 
</head>
<body >

<?php include('menu.php');?><!--menu bar header -->
    
    <br>

<div class="reg" style="border: 2px solid; margin-top: 8%;  margin-left: 32%; margin-right: 32%; height: 300px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  ">
            <h1 align="center">LOGIN</h1>
            <form name="reg" action="login_operation.php" onSubmit="return Register()" method="post">
            
            <center>
            
            <table id="login_table" border="0">
                <tr>
                    <td>Email </td><td><input type="text" name="c_email" placeholder="Enter your Email"  class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td>Password </td><td><input type="Password" name="c_pass" placeholder="Enter password" class="form-control mr-sm-2"></td>
                </tr>
            </table>    
            <br>
            <input type="submit" value="submit" name="submit" class="btn btn-light " > &nbsp;&nbsp;&nbsp;
            <input type="reset" name="" value="Reset" class="btn btn-light" >
            </center>
            </form>
          
            <script type="text/javascript" src="js/validation_for_ragistetion.js"></script>
        </div>

        </center>
    
</body>
</html>