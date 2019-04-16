<!DOCTYPE HTML>
<html>


<head>
<title>Membership Registration</title>

<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Graduate|Mr+Dafoe|Permanent+Marker" rel="stylesheet">
        
<link href="https://fonts.googleapis.com/css?family=Raleway:00" rel="stylesheet">
        
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
   
<style>
    #form_cont{
    padding: 20px;
    
    h1, h2{
    text-align: justify;
    }
    
    h1{
    text-align: center;
    font-weight: bold;
    font-size: 300%;
    padding-bottom: 10px;
    }
    
    h2{
    text-align: center;
    font-size: 80%;
    letter-spacing: 0.8em;
    padding-top: 10px;
    font-weight: normal;
    }
</style>

<script>
    function validate()
    {
        var firstname = document.myform.fname.value;
        var lastname = document.myform.lname.value;
        var email = document.myform.email.value;
        var phone_num = document.myform.pn.value;
        var name_pattern = /^[a-zA-Z][a-zA-Z\s]+$/;
        var digit_pattern = /^[0-9]+$/;
        var email_pattern = /^\w+([\._]?\w\w+)*@\w+([\._]?\w+)*(\.\w{2,3})+$/;
        
        var radios = document.getElementsByName("acc_type");
        var validation = true;
        
        if(firstname.length==0)
        { document.getElementById("fname_error").innerHTML=" First name is a required field.";
            validation = false;
        }
        else if(name_pattern.test(firstname)==false)
        { document.getElementById("fname_error").innerHTML=" First name can only be alphabetic characters.";
            validation = false;
        }
        
        if(lastname.length==0)
        { document.getElementById("lname_error").innerHTML=" Last name is a required field.";
            validation = false;
        }
        else if(name_pattern.test(lastname)==false)
        { document.getElementById("lname_error").innerHTML=" Last name can only be alphabetic characters.";
            validation = false;
        }
        
        if(email.length==0)
        { document.getElementById("email_error").innerHTML=" Email is a required field.";
            validation = false;
        }
        else if(email_pattern.test(email)==false)
        { document.getElementById("email_error").innerHTML=" Email address is not in correct form.";
            validation = false;
        }
        
        
        if((phone_num.length==0) || (isNaN(phone_num)))
        { document.getElementById("pn_error").innerHTML=" Phone number is a required field and can only be given in digits.";
            validation = false;
        }
        
        if(phone_num.length!=10)
        { document.getElementById("pn_error").innerHTML=" Length should be 10 digits.";
            validation = false;
        }
        
        if(age.length==0)
        { document.getElementById("address_error").innerHTML=" Address is a required field.";
            validation = false;
        }
        
        var selected = false;
        
        for (var i = 0; i < radios.length; i++)
        {if(radios[i].checked == true){selected = true;}};
        if(selected == false)
        {document.getElementById("selected_err").innerHTML = " Must have an account type selected.";
            validation = false;}
        }


        return validation;
        
    }
</script>

<script src="scripts.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>

        <h1 id="websiteTitle">Taste of Tallahassee</h1>

            <div class="title-wrapper">
                <div id="website-header" style="margin-top: 7%">
                    Membership Registration
                </div>
                <p style="margin: 0; margin-left: 45%;"><a href=Login.php style="text-decoration: none">(already have account)</a></p>
                
             </div>
            <form id="myform_id" name="myform" onsubmit="return validate()" method="POST" action="Profile.php">
                <div><p>
                    <label for="account_type">Account Type:</label><br/>
                    <input type="radio" name="acc_type" id="student" value="Student">Student<span id="s_err"></span><br/>
                        <input type="radio" name="acc_type" id="restaurant" value="Restaurant">Restaurant<span id="r_err"></span><br/>
                            <input type="radio" name="acc_type" id="other" value="Other">Other<span id="o_err"></span><br/>
                                <div id="selected_err"></div>
                            </p></div>
                <div><p>
                    <label for="fname">First Name:</label><br/>
                    <input type="text" name="fname" id="fname_id"><span id="fname_error"></span><br/>
                        <label for="lname">Last Name:</label><br/>
                        <input type="text" name="lname"><span id="lname_error"></span><br/>
                            <label for="phone_num">Phone No.:</label><br/>
                            <input type="text" name="pn"><span id="pn_error"></span><br/>
                                <label for="Address">Address:</label><br/>
                                <input type="text" name="address" size="15" maxlength="50/"><span id="address_error"></span><br/>
                                    <label for="email">Email:</label><br/>
                                    <input type="text" name="email"><span id="email_error"></span><br/>
                                        <label for="confirm_email">Confirm Email:</label><br/>
                                        <input type="text" name="confirm_email"><span id="email_error"></span><br/>
                                            <label for="password">Password:</label><br/>
                                            <input type="password" name="password" size="8" maxlength="30/"><span id="password_error"></span><br/>
                                                <label for="confirm_password">Confirm Password:</label><br/>
                                                <input type="password" name="confirm_password" size="8" maxlength="30/"><span id="confirm_password_error"></span><br/>
                                                </p></div>
                <center><div><input type="submit" name="sub1" value="Submit"></div><center>
            </form>
        </div>

</body>
</html>