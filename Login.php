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
        
        if (document.getElementById("username").value == ""){
            validation = false;
        }
        if (document.getElementById("password").value == ""){
            validation = false;
        }
        if (validation == false){
            alert("Complete Both Fields");
        }
        return validation;
    }
</script>

</head>

<?php
        
    if(isset($_POST['reset'])){
        
        session_start();
        
        $random = $_SESSION['emailChange'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $password_check = "UPDATE PROJECT SET PASSWORD = '$password' WHERE EMAIL = 'email_array[0]'";
            
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
        
        $email = mysql_query("SELECT EMAIL FROM PROJECT WHERE RANDOM = '$random'");
        $email_array = mysql_fetch_array($email);
        
        $change_password = mysql_query($password_check);
        $change_password_array = mysql_fetch_array($change_password);
        echo "<script>
        alert('Your password has been updated for $email_array[0].');
        </script>";
        session_unset();
        session_destroy();
        
        mysql_close($my_db);
    }
    
    if(isset($_POST['change'])){
        session_start();
        session_unset();
        session_destroy();
        
        $email = $_POST['email'];
        $email2 = $_POST['email2'];
        $old_password = $_POST['old_password'];
        $old_password2 = $_POST['old_password2'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email_check = "SELECT EMAIL FROM PROJECT WHERE EMAIL = '$email'";
        $old_password_check = "SELECT PASSWORD FROM PROJECT WHERE EMAIL = '$email'";
        $password_check = "UPDATE PROJECT SET PASSWORD = '$password' WHERE EMAIL = '$email'";
        
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
        
        $check_email = mysql_query($email_check);
        $check_email_array = mysql_fetch_array($check_email);
        $check_old_password = mysql_query($old_password_check);
        $check_old_password_array = mysql_fetch_array($check_old_password);
        
        if ($email != $check_email_array[0]){
            echo "<script>
            alert('Email address incorrect.');
            window.location.href='ChangePassword.php';
            </script>";
        }
        if ($old_password != $check_old_password_array[0]){
            echo "<script>
            alert('Old password incorrect.');
            window.location.href='ChangePassword.php';
            </script>";
        }
        else {
            $change_password = mysql_query($password_check);
            $change_password_array = mysql_fetch_array($change_password);
            echo "<script>
            alert('Your password has been updated.');
            </script>";
        }
    }
?>

<body>

    <h1 id="websiteTitle">Taste of Tallahassee</h1>
    <div class="title-wrapper">
        <div id="website-header" style="margin-top: 7%">
            Login
        </div>
        <p style="margin: 0; margin-left: 47%;"><a href=Membership.php style="text-decoration: none">(registration)</a></p>
        <br>
        <br>
        
    </div>
    
    <div id="login">
        <form id="myform_id" name="myform" onsubmit="return validate()" method="POST" action="Profile.php">
            <h3><label for="username">Email: &emsp;</label>
                <input type="text" name="username" id="username"><span id="username_error"></span><br>
                <label for="password">Password: &emsp;</label>
                <input type="password" name="password" id="password"><span id="password_error"></span><br>
                <a href="ChangePassword.php" style="font-size: 75%; text-decoration: none;">Change Password &emsp;</a>
                <a href="ForgotPassword.php" style="font-size: 75%; text-decoration: none;">Forgot Password? &emsp;</a><br><br>
            </h3>
                <input type="submit" name="sub2" value="Submit">
        </form>
	</div>
    
</body>
</html>