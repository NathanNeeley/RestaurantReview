<!DOCTYPE HTML>
<html>

<head>
<title>Login</title>

<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Graduate|Mr+Dafoe|Permanent+Marker" rel="stylesheet">
        
<link href="https://fonts.googleapis.com/css?family=Raleway:00" rel="stylesheet">
        
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
    
<style>
    #login {
        margin-left: 26%;
    }
</style>

<script>
    function validate(){
        var validation = true;
        
        if (document.getElementById("email_id").value == ""){
            validation = false;
        }
        if (document.getElementById("email2_id").value == ""){
            validation = false;
        }
        if (document.getElementById("old_password_id").value == ""){
            validation = false;
        }
        if (document.getElementById("old_password2_id").value == ""){
            validation = false;
        }
        if (document.getElementById("password_id").value == ""){
            validation = false;
        }
        if (document.getElementById("password2_id").value == ""){
            validation = false;
        }
        if ((document.getElementById("email_id").value) != (document.getElementById("email2_id").value)){
            alert("Email addresses don't match. Try again.");
            validation = false;
            return validation;
        }
        if ((document.getElementById("old_password_id").value) != (document.getElementById("old_password2_id").value)){
            alert("Old passwords don't match. Try again.");
            validation = false;
            return validation;
        }
        if ((document.getElementById("password_id").value) != (document.getElementById("password2_id").value)){
            alert("New passwords don't match. Try again.");
            validation = false;
            return validation;
        }
        if (validation == false){
            alert("Complete All Fields");
        }
        return validation;
    }
</script>

</head>

<body>

    <h1 id="websiteTitle">Taste of Tallahassee</h1>
    <div class="title-wrapper">
        <div id="website-header" style="margin-top: 7%">
            Change Password
        </div>
        <p style="margin: 0; margin-left: 47%;"><a href=Login.php style="text-decoration: none">(login)</a></p>
        <br>
        <br>
        
    </div>
    
    <div id="login">
        <form id="myform_id" name="myform" onsubmit="return validate()" method="POST" action="Login.php">
                <h3><label for="email">Email: &emsp;</label>
                <input type="text" name="email" id="email_id"><span id="email_error"></span><br>
                <label for="email2">Confirm Email: &emsp;</label>
                <input type="text" name="email2" id="email2_id"><span id="email2_error"></span><br>
                <label for="old_password">Old Password: &emsp;</label>
                <input type="password" name="old_password" id="old_password_id"><span id="old_password_error"></span><br>
                <label for="old_password2">Confirm Old Password: &emsp;</label>
                <input type="password" name="old_password2" id="old_password2_id"><span id="old_password2_error"></span><br>
                <label for="password">New Password: &emsp;</label>
                <input type="password" name="password" id="password_id"><span id="password_error"></span><br>
                <label for="password2">Confirm New Password: &emsp;</label>
                <input type="password" name="password2" id="password2_id"><span id="password2_error"></span><br><br>
            </h3>
                <input type="submit" name="change" value="Submit">
        </form>
	</div>
    
</body>
</html>