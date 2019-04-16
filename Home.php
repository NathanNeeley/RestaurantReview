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
                    TASTE OF TALLAHASSEE
                </div>
                
             </div>
        
       
           
          <p>
              
             Welcome to Taste of Tallahassee, the perfect resource for finding the best restaurants all over Tallahassee.  </p>
        <p>
           Mollit tofu enim man bun, lo-fi quis id. Lo-fi eiusmod wayfarers, celiac waistcoat edison bulb mustache church-key sint exercitation direct trade shabby chic quinoa brooklyn. Meh nesciunt man braid, af skateboard yuccie beard vegan roof party freegan dolore. Gentrify anim irony, ennui eu migas ullamco et squid knausgaard mustache wolf nulla cliche. Reprehenderit distillery flannel nulla, mixtape marfa 3 wolf moon tumblr banjo. Sartorial DIY wayfarers, scenester dreamcatcher ullamco mumblecore letterpress literally selvage next level pitchfork fugiat irure. Woke echo park viral, edison bulb four dollar toast bitters consectetur chicharrones meditation unicorn. </p>
<p>
           Mollit tofu enim man bun, lo-fi quis id. Lo-fi eiusmod wayfarers, celiac waistcoat edison bulb mustache church-key sint exercitation direct trade shabby chic quinoa brooklyn. Meh nesciunt man braid, af skateboard yuccie beard vegan roof party freegan dolore. Gentrify anim irony, ennui eu migas ullamco et squid knausgaard mustache wolf nulla cliche. Reprehenderit distillery flannel nulla, mixtape marfa 3 wolf moon tumblr banjo. Sartorial DIY wayfarers, scenester dreamcatcher ullamco mumblecore letterpress literally selvage next level pitchfork fugiat irure. Woke echo park viral, edison bulb four dollar toast bitters consectetur chicharrones meditation unicorn. </p>
            
          
            
          
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
      
        
    </body>
    
    
    
</html>