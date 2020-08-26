        function Register()
        {
            var name = document.forms["reg"]["c_name"].value;
            var eml = document.forms["reg"]["c_email"].value;
            var pass = document.forms["reg"]["c_pass"].value;
            var cnt = document.forms["reg"]["c_contact"].value;
            var add = document.forms["reg"]["c_add"].value;
            var gen = document.forms["reg"]["c_gender"].value;
            var age = document.forms["reg"]["c_age"].value;


    var letters = /^[A-Za-z ]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var spassword = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
    var mo_number = /^[0-9]+$/;
        

            if(name == "")
            {
                alert ("Name can not blank..!!!");
                return false;
            }
            else if (name.length>30)
            {
                alert("longer frist name is not allowed only allow 30 charactera.");    
                return false;
            }
            else if (letters.test(name) == false)
            {
                alert("frist name is allowed only charactera and not allowed spece.only allowed A to Z");   
                return false;
            }

            if(eml == "")
            {
                alert ("Email can not blank..!!");
                return false;
            }
            else if (mailformat.test(eml) == false)
            {
                alert("Enter valid email"); 
                return false;
            }

            if(pass == "")
            {
                alert ("password can not blank...!!");
                return false;
            }
            else if (spassword.test(pass) == false)
            {
                alert("Enter valid password" + "\n" + "Formet" + "\n" + "One Capital (uppercase) = A-Z" + "\n" + "One Lowercase = a-z"+ "\n" + "One Number = 0-9"+ "\n" + " Minimum, 6 characters" );
                return false;
            }

            if(cnt == "")
            {
                alert ("Contact can not blank...!!");
                return false;
            }
            else if (mo_number.test(cnt) == false)
            {
                alert("mobile number is allowed only number value");    
                return false;
            }
            else if (cnt.length != 10 )
            {
                alert("Invalid mobile number.");    
                return false;
            }
            
            if(add == "")
            {
                alert ("Address can not blank...!!!");
                return false;
            }
            if(gen == "")
            {
                alert ("Gender can not blank...!!!");
                return false;
            }
            if(age == "")
            {
                alert ("Age can not blank...!!!");
                return false;
            }                      
        }
