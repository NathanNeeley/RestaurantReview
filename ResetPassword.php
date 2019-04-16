<!DOCTYPE HTML>
<html>

<head>
<title>Reset Password</title>

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
        
        if (document.getElementById("password_id").value == ""){
            validation = false;
        }
        if (document.getElementById("password2_id").value == ""){
            validation = false;
        }
        if ((document.getElementById("password_id").value) != (document.getElementById("password2_id").value)){
            alert("Passwords don't match. Try again.");
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

<?php
    
    session_start();
    $_SESSION['emailChange'] = $_GET['random'];
    
?>

<body>

    <h1 id="websiteTitle">Taste of Tallahassee</h1>
    <div class="title-wrapper">
        <div id="website-header" style="margin-top: 7%">
            Reset Password
        </div>
        <br>
        <br>
        
    </div>
    
    <div id="login">
        <form id="myform_id" name="myform" onsubmit="return validate()" method="POST" action="Login.php">
                <h3>
                <label for="password">New Password: &emsp;</label>
                <input type="password" name="password" id="password_id"><span id="password_error"></span><br>
                <label for="password2">Confirm Password: &emsp;</label>
                <input type="password" name="password2" id="password2_id"><span id="password2_error"></span><br><br>
            </h3>
                <input type="submit" name="reset" value="Submit">
        </form>
	</div>
    
</body>
</html>