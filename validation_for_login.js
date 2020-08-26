    function login_validation()
    {
        var eml = document.forms["reg"]["c_email"].value;
        var pass = document.forms["reg"]["c_pass"].value;
    
        var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var spassword = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
	
        if(eml == "")
        {
            alert ("Email can not blank..!!");
            return false;
        }
        else if (email_format.test(eml) == false)
		{
			alert("Not valid Email");	
			return false;
		}
		if(pass == "")
        {
            alert ("password can not blank...!!");
            return false;
        }
    }
