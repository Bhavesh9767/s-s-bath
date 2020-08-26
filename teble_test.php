
<!DOCTYPE html>
<html>
<head>
	<title>table test</title>
 	
<style>
    #ragistetion_table
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

<div class="reg" style="border: 2px solid;  margin-left: 32%; margin-right: 32%; height: 500px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  ">
            <h1 align="center">Registration</h1>
            <form name="reg" action="operation.php" onSubmit="return Register()" method="post">
            
            <center>
            
            <table id="ragistetion_table" border="0">
                <tr>
                    <td>Name </td><td><input type="text" name="c_name" placeholder="Enter your name" class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td>Email </td><td><input type="text" name="c_email" placeholder="Enter your Email"  class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td>Password </td><td><input type="Password" name="c_pass" placeholder="Enter password" class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td>Contact </td><td><input type="text" name="c_contact" placeholder="Contact" class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td>Address </td><td><input type="text" name="c_add" placeholder="Address" class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td>Gender </td>
                        <td>Male :<input type="radio" name="gender" value="Male"     class="radio-inline">
                            Female :<input type="radio" name="gender" value="Female" class="radio-inline"></td>
                </tr>
                <tr>
                    <td>Age :</td><td> <select name="age" class="form-control mr-sm-2">
                                            <option value="10 to 20 year">10 to 20 year</option>
                                            <option value="10 to 20 year">20 to 30 year</option>
                                            <option value="10 to 20 year">30 to 40 year</option>
                                            <option value="10 to 20 year">40 to 50 year</option>
                                            <option value="10 to 20 year">50 to 60 year</option>
                                            <option value="10 to 20 year">60 to 70 year</option>
                                            <option value="10 to 20 year">70 to 80 year</option>
                                            <option value="10 to 20 year">80 to 90 year</option>
                                            <option value="10 to 20 year">90 to 100 year</option>
                                        </select>
                                  </td>
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