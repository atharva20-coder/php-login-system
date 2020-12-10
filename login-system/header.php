<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>CodePen - navbar responsive</title>
  
    <style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");
* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
html {
  scroll-behavior: smooth;
}
body {
    font-family: 'Montserrat', sans-serif;
    background-color : #006699;
}
.navbar {
    font-size: 18px;
    background-color : yellow;
    padding-bottom: 10px;
    border-radius: 35px;
}
/*nav bar*/
.nav-links,
.logo {
    text-decoration: none;
    color: black;
}
.main-nav li {
    text-align: center;
    margin: 12px auto;
}
.logo {
    display: inline-block;
    font-size: 22px;
    margin-top: 10px;
    margin-left: 20px;
}

.navbar-toggle {
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer; 
}

/*hide nav menue*/
.main-nav {
    list-style-type: none;
    display: none;
}
.active {
  display: block;
}
/* for desktop*/
@media screen and (min-width: 550px) {
  .navbar-toggle {
       display: none;
    }
  .navbar {
        display: flex;
        justify-content: space-between;
        padding-bottom: 0;
        height: 70px;
        align-items: center;
    }
  .main-nav {
        display: flex;
        margin-right: 30px;
        flex-direction: row;
        justify-content: flex-end;
    }
    .nav-links {
        margin-left: 40px;
    }
  .logo:hover,
   .nav-links:hover {
      color: white;
    }
  .logo {
      margin-top: 0;
            } 
}

p{
  text-align : center;
  padding : 100px;
  margin-top :100px;
  color : orange;
  font-size: 30px;
}
        
.center {
  margin: 80px;
    margin-left: 10%;
  padding: 10px;
}   
        
input[type=text], input[type=password] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #fff;
  color: black;
}
        

        
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
        
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #FFFF00;
}

.button2:hover {
  background-color: yellow;
  color: white;
}        
        
</style>
   <script>
  window.console = window.console || function(t) {};
</script>
   <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>

<body translate="no" >
    
  <nav class="navbar">
      
  <span class="navbar-toggle" id="js-navbar-toggle">
      
  <svg width="24" height="24" viewBox="0 0 24 24">
      
  <path d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z"></path>
    </svg>
      
    </span>
      
  <a href="#" class="logo">logo</a>
  <ul class="main-nav" id="js-menu">
    <li><a href="index.php" class="nav-links">Home</a></li>
    <li><a href="#" class="nav-links">About Us</a></li>
    <li><a href="#" class="nav-links">Blog</a></li>
      <?php
        if(isset($_SESSION["useruid"])){
            echo "<li><a href='profile.php' class='nav-links'>Profile</a></li>";
            echo "<li><a href='includes/logout.inc.php' class='nav-links'>Log-Out</a></li>";
        }else{                                                                    //changing links
            echo "<li><a href='signup.php' class='nav-links'>Sign up</a></li>";
            echo "<li><a href='login.php' class='nav-links'>Log-In</a></li>";
        }
      ?>
  </ul>
</nav>