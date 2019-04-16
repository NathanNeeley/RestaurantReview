<!DOCTYPE HTML>
<html>

<head>
<title>Survey</title>

<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Graduate|Mr+Dafoe|Permanent+Marker" rel="stylesheet">
        
<link href="https://fonts.googleapis.com/css?family=Raleway:00" rel="stylesheet">
        
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
    
<style>
    .textBoxAlign {
        vertical-align: middle;
        font-size: 200%;
        text-align: center;
    }
    #positives_id, #improvements_id {
        vertical-align: middle;
    }
    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
    }
    .rating > span {
        display: inline-block;
        position: relative;
        width: 1.1em;
    }
    .rating > span:hover:before,
    .rating > span:hover ~ span:before {
        content: "\2605";
        position: absolute;
    }
    #starText {
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


    function validate(){
        var validation = true;
        var pvalue = document.myform.positives.value;
        var ivalue = document.myform.improvements.value;
        var star_id = document.getElementById("starText").innerHTML;
        var name_pattern = /^[a-zA-Z][a-zA-Z\s]+$/;

if (name_pattern.test(pvalue)==false){
    validation = false;
}
if (name_pattern.test(ivalue)==false){
    validation = false;
}
if (star_id == ""){
    validation = false;
}
if (validation == false){
    alert("All Fields Must Be Complete");
}
return validation;
}

</script>



<script>
$(document).ready(function(){
    $("#star1").click(function(){
        document.getElementById("starText").innerHTML = "1 Star";
    })
    $("#star2").click(function(){
        document.getElementById("starText").innerHTML = "2 Stars";
    })
    $("#star3").click(function(){
        document.getElementById("starText").innerHTML = "3 Stars";
    })
    $("#star4").click(function(){
        document.getElementById("starText").innerHTML = "4 Stars";
    })
    $("#star5").click(function(){
        document.getElementById("starText").innerHTML = "5 Stars";
    })
})

</script>
</head>

<?php
    session_start();
    $_SESSION['email'];
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
                    Website Survey
                </div>
                
             </div>
<br>
<br>
<br>
        
        <form id="myform_id" name="myform" onsubmit="return validate()" method="POST" action="Profile.php">
        <h3 class="textBoxAlign">What are positives of our website?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span style="font-weight: normal"></span>
        <textarea id="positives_id" name="positives" cols="30" rows="8"></textarea><br><br><br>
        </h3>
        
        <h3 class="textBoxAlign">What improvements should be made?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span style="font-weight: normal"></span>
        <textarea id="improvements_id" name="improvements" cols="30" rows="8"></textarea><br><br><br>
        </h3>
        
        <h3 class="textBoxAlign">Rating (5 stars):&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span style="font-weight: normal"></span>
            <div class="rating" style="display: inline; margin: 0;">
                <span id="star5">&#9734;</span><span id="star4">&#9734;</span><span id="star3">&#9734;</span><span id="star2">&#9734;</span><span id="star1">&#9734;</span><br>
        </div>

        <div id="starText" name="starText"></div>
        <br><br><br>
        </h3>
        
        <center><input type="submit" name="sub3" value="Submit"><center>
<br>
<br>
        </form>

</body>
</html>
