function Appointment()
{
    var name = document.forms["appoyment_form"]["c_name"].value;
    var eml = document.forms["appoyment_form"]["c_email"].value;
    var gen = document.forms["appoyment_form"]["c_gender"].value;
    var age = document.forms["appoyment_form"]["c_age"].value;
    var cnt = document.forms["appoyment_form"]["c_contact"].value;
    var ill = document.forms["appoyment_form"]["c_ill"].value;
    var date = document.forms["appoyment_form"]["c_app_date"].value;
    var time = document.forms["appoyment_form"]["c_app_time"].value;


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

            /*
            if(ill == "")
            {
                alert ("Illnesses can not blank...!!!");
                return false;
            }
            */

            if(date == "")
            {
                alert ("Date can not blank...!!!");
                return false;
            }
            
            if(time == "")
            {
                alert ("Time can not blank...!!!");
                return false;
            }                   
        }
