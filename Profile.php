<!DOCTYPE HTML>
<html>

<head>
<title>Profile</title>

<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Graduate|Mr+Dafoe|Permanent+Marker" rel="stylesheet">
        
<link href="https://fonts.googleapis.com/css?family=Raleway:00" rel="stylesheet">
        
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
    
<style>
    #profile {
        margin-left: 26%;
    }
</style>

<script src="scripts.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="jquery-3.1.1.min.js"></script>

<script>

var click = 0;
function myFunction(x) {
    
    click++;
    
    
    if(click % 2 != 0){
        document.getElementById("letscheck").style.width = "300px";
        document.getElementById("main-info").style.marginLeft = "250px";
        document.getElementById("toggleNav").style.marginLeft = "250px";
        
        x.classList.toggle("change");
    }
    else{
        document.getElementById("letscheck").style.width = "";
        document.getElementById("main-info").style.marginLeft = "";
        document.getElementById("toggleNav").style.marginLeft = "";
        
        x.classList.toggle("change");
    }
    
    
}
</script>
</head>

<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(isset($_POST['sub1'])){
            $email = $_POST['email'];
            $confirm_email = $_POST['confirm_email'];
            $acc_type = $_POST['acc_type'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pn = $_POST['pn'];
            $address = $_POST['address'];
            $password1 = $_POST['password'];
            $confirm_password1 = $_POST['confirm_password'];
            $query = "INSERT INTO PROJECT (EMAIL, ACCOUNT, FIRSTNAME, LASTNAME, PHONE, ADDRESS, PASSWORD) VALUES ('$email', '$acc_type', '$fname', '$lname', '$pn', '$address', '$password1')";
            $email_check = "SELECT EMAIL FROM PROJECT WHERE EMAIL = '$email'";
            
            if(empty($email)){
                echo "<script>
                alert('Complete All Fields');
                window.location.href='Membership.php';
                </script>";
            }
            else if(empty($acc_type)){
                echo "<script>
                alert('Complete All Fields');
                window.location.href='Membership.php';
                </script>";
            }
            else if(empty($fname)){
                echo "<script>
                alert('Complete All Fields');
                window.location.href='Membership.php';
                </script>";
            }
            else if(empty($lname)){
                echo "<script>
                alert('Complete All Fields');
                window.location.href='Membership.php';
                </script>";
            }
            else if(empty($pn)){
                echo "<script>
                alert('Complete All Fields');
                window.location.href='Membership.php';
                </script>";
            }
            else if(empty($address)){
                echo "<script>
                alert('Complete All Fields');
                window.location.href='Membership.php';
                </script>";
            }
            else if(empty($password1)){
                echo "<script>
                alert('Complete All Fields');
                window.location.href='Membership.php';
                </script>";
            }
            else if($email != $confirm_email){
                echo "<script>
                alert('Email addresses do not match. Try again.');
                window.location.href='Membership.php';
                </script>";
            }
            else if($password1 != $confirm_password1){
                echo "<script>
                alert('Passwords do not match. Try again.');
                window.location.href='Membership.php';
                </script>";
            }
            
            else {
                
                include 'database.php';
                $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
                mysql_select_db($my_db) or die('Could not select db');
            
                $result_username = mysql_query($email_check);
                $result_username_array = mysql_fetch_array($result_username);
            
                if ($email == $result_username_array[0]){
                    echo "<script>
                    alert('Email address already registered. Try again.');
                    window.location.href='Membership.php';
                    </script>";
                }
            
                else {
                    $result = mysql_query($query);
                }
        
                mysql_close($link);
            }
        }
        if(isset($_POST['sub2'])){
            $email = $_POST['username'];
            $email_check = "SELECT EMAIL FROM PROJECT WHERE EMAIL = '$email'";
            $password2 = $_POST['password'];
            $password2_check = "SELECT PASSWORD FROM PROJECT WHERE EMAIL = '$email'";
            
            include 'database.php';
            $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
            mysql_select_db($my_db) or die('Could not select db');
            
            $result_username = mysql_query($email_check);
            $result_username_array = mysql_fetch_array($result_username);
            $result_password = mysql_query($password2_check);
            $result_password_array = mysql_fetch_array($result_password);
            
            if (($email != $result_username_array[0]) || ($password2 != $result_password_array[0])){
                echo "<script>
                alert('Incorrect Email or Password.');
                window.location.href='Login.php';
                </script>";
            }
            
            mysql_close($link);
        }
        if(isset($_POST['sub3'])){
            $positives = $_POST['positives'];
            $improvements = $_POST['improvements'];
            $starText = "Stars";
            include 'database.php';
            $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
            mysql_select_db($my_db) or die('Could not select db');
            $query = "INSERT INTO SURVEY VALUES ('$positives', '$improvements', '$starText')";
            $result = mysql_query($query);
            echo "<script> alert('Thank you for submitting the survey') </script>";
            mysql_close($link);
        }
    }
    
    session_start();
    if($_SERVER['HTTP_REFERER'] == 'http://ww2.cs.fsu.edu/~neeley/NewProject/Membership.php'){
        
        $_SESSION['email'] = $email;
        $_SESSION['acc_type'] = $acc_type;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['pn'] = $pn;
        $_SESSION['address'] = $address;
    }
    if($_SERVER['HTTP_REFERER'] == 'http://ww2.cs.fsu.edu/~neeley/NewProject/Login.php'){
        
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
        
        $_SESSION['email'] = $email;
        
        $acc_type = mysql_query("SELECT ACCOUNT FROM PROJECT WHERE EMAIL = '$email'");
        $acc_type_array = mysql_fetch_array($acc_type);
        $_SESSION['acc_type'] = $acc_type_array[0];
        
        $fname = mysql_query("SELECT FIRSTNAME FROM PROJECT WHERE EMAIL = '$email'");
        $fname_array = mysql_fetch_array($fname);
        $_SESSION['fname'] = $fname_array[0];
        
        $lname = mysql_query("SELECT LASTNAME FROM PROJECT WHERE EMAIL = '$email'");
        $lname_array = mysql_fetch_array($lname);
        $_SESSION['lname'] = $lname_array[0];
        
        $pn = mysql_query("SELECT PHONE FROM PROJECT WHERE EMAIL = '$email'");
        $pn_array = mysql_fetch_array($pn);
        $_SESSION['pn'] = $pn_array[0];
        
        $address = mysql_query("SELECT ADDRESS FROM PROJECT WHERE EMAIL = '$email'");
        $address_array = mysql_fetch_array($address);
        $_SESSION['address'] = $address_array[0];
        
        mysql_close($link);
    }
?>

<body>

<div id="format_right"><h2><?php echo $_SESSION['email'] ?></h2>
<h4 style="margin-left: 40%;"><a href="Login.php">(Logout)</a></h4></div>


        <div class="nav overlay-wrapper" id="letscheck">
        <div style="clear: both;"></div>
            
            
            <ul>
                <li><a href="Profile.php" id="membership">Member Profile</a></li>
                <li><a href="Home.php" id="home">Home</a></li>
                <li><a href="Restaurant.php" id="find">Find a Restaurant</a></li>
                <li><a href="Survey.php" id="survey">Survey</a></li>
            </ul>
            
        </div>
        
        
        
        
        <div class="container" id="toggleNav" onclick="myFunction(this)">
            <div class="lineOne"></div>
            <div class="lineTwo"></div>
            <div class="lineThree"></div>
        </div>
        
        <div id="main-info">
            
            
            <div class="title-wrapper">
                <div id="website-header">
                    Member Profile
                </div>
                
            </div>
        <br><br>
        <h2 style="font-weight: normal; text-align: center;">Account Type: &emsp;<?php echo $_SESSION['acc_type'] ?></h2>
            <br><br>
        <h2 style="font-weight: normal; text-align: center;">First Name: &emsp;<?php echo $_SESSION['fname'] ?></h2>
            <br><br>
        <h2 style="font-weight: normal; text-align: center;">Last Name: &emsp;<?php echo $_SESSION['lname'] ?></h2>
            <br><br>
        <h2 style="font-weight: normal; text-align: center;">Phone No.: &emsp;<?php echo $_SESSION['pn'] ?></h2>
            <br><br>
        <h2 style="font-weight: normal; text-align: center;">Address: &emsp;<?php echo $_SESSION['address']?></h2>
            <br><br>
        <h2 style="font-weight: normal; text-align: center;">Email: &emsp;<?php echo $_SESSION['email']?></h2>
            <br>
            <br>
            <br>
    
</body>

</html>