<!DOCTYPE html>
<html>
    
    <head>
        
        <title> Taste of Tallahassee </title>
        
        <link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Graduate|Mr+Dafoe|Permanent+Marker" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:00" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css">
         
        <script src="scripts.js"></script>


    </head>

<?php
    
    if(isset($_POST['sub1'])){
        
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
        $Rating = $_POST['Rating'];
        $Gordos = "Gordos";
        $query = mysql_query("INSERT INTO RESTAURANTRATING VALUES ('$Gordos', '$Rating')");
        mysql_close($link);
        
    }
    if(isset($_POST['sub2'])){
        
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
        $Rating = $_POST['Rating'];
        $JamineCafe = "Jasmine Cafe";
        $query = mysql_query("INSERT INTO RESTAURANTRATING VALUES ('$JasmineCafe', '$Rating')");
        mysql_close($link);
        
    }
    if(isset($_POST['sub3'])){
        
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
        $Rating = $_POST['Rating'];
        $Edison = "The Edison Restaurant";
        $query = mysql_query("INSERT INTO RESTAURANTRATING VALUES ('$Edison', '$Rating')");
        mysql_close($link);
        
    }
    if(isset($_POST['sub4'])){
        
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
        $Rating = $_POST['Rating'];
        $WaffleHouse = "Waffle House";
        $query = mysql_query("INSERT INTO RESTAURANTRATING VALUES ('$WaffleHouse', '$Rating')");
        mysql_close($link);
        
    }
    if(isset($_POST['sub5'])){
        
        include 'database.php';
        $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
        mysql_select_db($my_db) or die('Could not select db');
        $Rating = $_POST['Rating'];
        $MrRoboto = "Mr. Roboto";
        $query = mysql_query("INSERT INTO RESTAURANTRATING VALUES ('$MrRoboto', '$Rating')");
        mysql_close($link);
        
    }
    
?>

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
                    Find A Restaurant
                </div>
                
             </div>

      </div>  

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         
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

<br>
<center>
<form action="#" method="POST">
<label for="Category"><span class="error"></span> &ensp;</label>
<select id="Category_id" name="Category">
<option value="Categories">Categories</option>
<option value="Latin American">Latin American</option>
<option value="Sushi">Sushi</option>
<option value="American">American</option>
<option value="Breakfast">Breakfast</option>
<option value="Fastfood">Fast-food</option>
</select>&emsp;<span id="Category_error" style="font-weight: normal"></span><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</center>
<br><br><br>


    </body>

<?php
    
    include 'database.php';
    $link = mysql_connect($hostname, $username, $password) or die('Could not connect:' . mysql_error());
    mysql_select_db($my_db) or die('Could not select db');
    
    $Category = $_POST['Category'];
    
    switch ($_POST['Category']){
            
        case 'Latin American':
            $latin_american = mysql_query("SELECT NAME,ADDRESS,PRICERANGE FROM RESTAURANT WHERE CATEGORY = 'Latin American'");
            $latin_american_array = mysql_fetch_array($latin_american);

                $i = 0;
                echo "<h3 style='margin-left: 25%;'>$latin_american_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%;'>$latin_american_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%;'>$latin_american_array[$i]</h3>";
                echo "<br>";
                echo "<h3 style='margin-left: 25%;'><img src='Restaurants/Gordos.png'></h3>";
                echo "<br>";
                
                echo "<form action='#' method='POST'>";
                echo "<label for='Rating'></label>";
                echo "<select id='Rating_id' name='Rating' style='margin-left: 25%'>";
                echo "<option value='Rating'>Rating</option>";
                echo "<option value='1 Star'>1 Star</option>";
                echo "<option value='2 Stars'>2 Stars</option>";
                echo "<option value='3 Stars'>3 Stars</option>";
                echo "<option value='4 Stars'>4 Stars</option>";
                echo "<option value='5 Stars'>5 Stars</option>";
                echo "</select>";
                echo "<br><br>";
                echo "<input type='submit' name='sub1' value='Submit' style='margin-left: 25%'>";
                echo "</form>";
                echo "<br><br>";
            
            break;
        case 'Sushi':
            $sushi = mysql_query("SELECT NAME,ADDRESS,PRICERANGE FROM RESTAURANT WHERE CATEGORY = 'Sushi'");
            $sushi_array = mysql_fetch_array($sushi);
    
                $i = 0;
                echo "<h3 style='margin-left: 25%'>$sushi_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%'>$sushi_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%'>$sushi_array[$i]</h3>";
                echo "<br>";
                echo "<h3 style='margin-left: 25%'><img src='Restaurants/JasmineCafe.jpg'></h3>";
                echo "<br>";
                
                echo "<form action='#' method='POST' style='margin-left: 25%'>";
                echo "<label for='Rating'></label>";
                echo "<select id='Rating_id' name='Rating'>";
                echo "<option value='Rating'>Rating</option>";
                echo "<option value='1 Star'>1 Star</option>";
                echo "<option value='2 Stars'>2 Stars</option>";
                echo "<option value='3 Stars'>3 Stars</option>";
                echo "<option value='4 Stars'>4 Stars</option>";
                echo "<option value='5 Stars'>5 Stars</option>";
                echo "</select>";
                echo "<br><br>";
                echo "<input type='submit' name='sub2' value='Submit'>";
                echo "</form>";
                echo "<br><br>";
            
            break;
        case 'American':
            $american = mysql_query("SELECT NAME,ADDRESS,PRICERANGE FROM RESTAURANT WHERE CATEGORY = 'American'");
            $american_array = mysql_fetch_array($american);
            
                $i = 0;
                echo "<h3 style='margin-left: 25%'>$american_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%'>$american_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%'>$american_array[$i]</h3>";
                echo "<br>";
                echo "<h3 style='margin-left: 25%'><img src='Restaurants/TheEdison.png'></h3>";
                echo "<br>";
                
                echo "<form action='#' method='POST' style='margin-left: 25%'>";
                echo "<label for='Rating'></label>";
                echo "<select id='Rating_id' name='Rating'>";
                echo "<option value='Rating'>Rating</option>";
                echo "<option value='1 Star'>1 Star</option>";
                echo "<option value='2 Stars'>2 Stars</option>";
                echo "<option value='3 Stars'>3 Stars</option>";
                echo "<option value='4 Stars'>4 Stars</option>";
                echo "<option value='5 Stars'>5 Stars</option>";
                echo "</select>";
                echo "<br><br>";
                echo "<input type='submit' name='sub3' value='Submit'>";
                echo "</form>";
                echo "<br><br>";
            
            break;
        case 'Breakfast':
            $breakfast = mysql_query("SELECT NAME,ADDRESS,PRICERANGE FROM RESTAURANT WHERE CATEGORY = 'Breakfast'");
            $breakfast_array = mysql_fetch_array($breakfast);
            
                $i = 0;
                echo "<h3 style='margin-left: 25%'>$breakfast_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%'>$breakfast_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%'>$breakfast_array[$i]</h3>";
                echo "<br>";
                echo "<h3 style='margin-left: 25%'><img src='Restaurants/WaffleHouse.jpg'></h3>";
                echo "<br>";
                
                echo "<form action='#' method='POST' style='margin-left: 25%'>";
                echo "<label for='Rating'></label>";
                echo "<select id='Rating_id' name='Rating'>";
                echo "<option value='Rating'>Rating</option>";
                echo "<option value='1 Star'>1 Star</option>";
                echo "<option value='2 Stars'>2 Stars</option>";
                echo "<option value='3 Stars'>3 Stars</option>";
                echo "<option value='4 Stars'>4 Stars</option>";
                echo "<option value='5 Stars'>5 Stars</option>";
                echo "</select>";
                echo "<br><br>";
                echo "<input type='submit' name='sub4' value='Submit'>";
                echo "</form>";
                echo "<br><br>";
            
            break;
        case 'Fastfood':
            $fastfood = mysql_query("SELECT NAME,ADDRESS,PRICERANGE FROM RESTAURANT WHERE CATEGORY = 'Fast-food'");
            $fastfood_array = mysql_fetch_array($fastfood);
            
                $i = 0;
                echo "<h3 style='margin-left: 25%'>$fastfood_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%'>$fastfood_array[$i]</h3>";
                echo "<br>";
                $i++;
                echo "<h3 style='margin-left: 25%'>$fastfood_array[$i]</h3>";
                echo "<br>";
                echo "<h3 style='margin-left: 25%'><img src='Restaurants/Mr.Roboto.jpg'></h3>";
                echo "<br>";
                
                echo "<form action='#' method='POST' style='margin-left: 25%'>";
                echo "<label for='Rating'></label>";
                echo "<select id='Rating_id' name='Rating'>";
                echo "<option value='Rating'>Rating</option>";
                echo "<option value='1 Star'>1 Star</option>";
                echo "<option value='2 Stars'>2 Stars</option>";
                echo "<option value='3 Stars'>3 Stars</option>";
                echo "<option value='4 Stars'>4 Stars</option>";
                echo "<option value='5 Stars'>5 Stars</option>";
                echo "</select>";
                echo "<br><br>";
                echo "<input type='submit' name='sub5' value='Submit'>";
                echo "</form>";
                echo "<br><br>";
            
            break;
    }
    mysql_close($link);
?>





</html>