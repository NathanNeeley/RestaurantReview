<!DOCTYPE HTML>
<html>

<head>
<title>Forgot Password</title>

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
        if ((document.getElementById("email_id").value) != (document.getElementById("email2_id").value)){
            alert("Email addresses don't match. Try again.");
            validation = false;
            return validation;
        }
        if (validation == false){
            alert("Complete Both Fields");
        }
        return validation;
    }
</script>

</head>

<?php
    
    if(isset($_POST['forgot'])){
        $email = $_POST['email'];
        $email2 = $_POST['email2'];
        $random = uniqid();
        
        $subject = "Reset Password";
        $message = "Reset Password on Taste of Tallahassee: http://ww2.cs.fsu.edu/~neeley/NewProject/ResetPassword.php?random=$random";
        $email_check = "SELECT EMAIL FROM PROJECT WHERE EMAIL = '$email'";
    
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
    
        $result_email = mysql_query($email_check);
        $result_email_array = mysql_fetch_array($result_email);
        
        if ($email == $result_email_array[0]){
            $random_query = mysql_query("UPDATE PROJECT SET RANDOM = '$random' WHERE EMAIL = '$email'");
            echo "<script>
            alert('A link to reset your password has been sent to your email address.');
            </script>";
            mail($email, $subject, $message);
        }
        else {
            echo "<script>
            alert('Incorrect email address. Try again.');
            </script>";
        }
    
        mysql_close($my_db);
    }
?>

<body>

    <h1 id="websiteTitle">Taste of Tallahassee</h1>
    <div class="title-wrapper">
        <div id="website-header" style="margin-top: 7%">
            Forgot Password?
        </div>
        <p style="margin: 0; margin-left: 47%"><a href=Login.php style="text-decoration: none">(login)</a></p>
        <br>
        <br>
        
    </div>
    
    <div id="login">
        <form id="myform_id" name="myform" onsubmit="return validate()" method="POST" action="ForgotPassword.php">
            <h3><label for="email">Email: &emsp;</label>
                <input type="text" name="email" id="email_id"><span id="email_error"></span><br>
                <label for="email2">Confirm Email: &emsp;</label>
                <input type="text" name="email2" id="email2_id"><span id="email2_error"></span><br><br>
            </h3>
                <input type="submit" name="forgot" value="Submit">
        </form>
	</div>
    
</body>
</html>