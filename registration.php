<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="image/title_logo.png">
    <title>Ragistetion</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reg.css">
<style>
    #ragistetion_table
    {
        border-collapse: separate;
        border-spacing: 10px; /* Apply cell spacing */
        padding: 5px; /* Apply cell padding */
    }
    p{color: white; text-shadow: 2px 2px black;}
</style>
</head>
<body>    
    <?php include('menu.php');?><!--menu bar header -->
    <br>
<div class="reg" style="border: 2px solid;  margin-left: 32%; margin-right: 32%; height: 500px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  ">
            <h1 align="center">Registration</h1>
            <form name="reg" action="registration_operation.php" onSubmit="return Register()" method="post">
            
            <center>
            
            <table id="ragistetion_table" border="0">
                <tr>
                    <td><p>Name </p></td><td><input type="text" name="c_name" placeholder="Enter your name" class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td><p>Email </p></td><td><input type="text" name="c_email" placeholder="Enter your Email"  class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td><p>Password </p></td><td><input type="Password" name="c_pass" placeholder="Enter password" class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td><p>Contact </p></td><td><input type="text" name="c_contact" placeholder="Contact" class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td><p>Address </p></td><td><input type="text" name="c_add" placeholder="Address" class="form-control mr-sm-2"></td>
                </tr>
                <tr>
                    <td><p>Gender </p></td>
                    <td>
                        <p>
                              Male :<input type="radio" name="c_gender" value="male"   class="radio-inline">
                            Female :<input type="radio" name="c_gender" value="female" class="radio-inline">
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><p>Age :</p></td><td> <select name="c_age" class="form-control mr-sm-2">
                                            <option  value="" disabled="disabled" selected="selected" >Select Age</option>
                                            <option value="10 to 20 year">10 to 20 year</option>
                                            <option value="21 to 30 year">21 to 30 year</option>
                                            <option value="31 to 40 year">31 to 40 year</option>
                                            <option value="41 to 50 year">41 to 50 year</option>
                                            <option value="51 to 60 year">51 to 60 year</option>
                                            <option value="61 to 70 year">61 to 70 year</option>
                                            <option value="71 to 80 year">71 to 80 year</option>
                                            <option value="81 to 90 year">81 to 90 year</option>
                                            <option value="91 to 100 year">91 to 100 year</option>
                                        </select>
                                  </td>
                </tr>

            </table>    
            <br>
            <input type="submit" value="Submit" name="submit" class="btn btn-light" > &nbsp;&nbsp;&nbsp;
            <input type="reset" name="" value="Reset" class="btn btn-light" >
            </center>
            </form>
          
            <script type="text/javascript" src="js/validation_for_ragistetion.js"></script>
        </div>
</body>
</html>