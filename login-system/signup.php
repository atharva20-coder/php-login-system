<?php
  include_once 'header.php';
?>    
<div class="center">
<h2>Sign-Up</h2>
      <form action="includes/signup.inc.php" method="post">
          <input type="text" id="fname" name="name" placeholder="Full name..."><br><br>
          <input type="text" id="fname" name="email" placeholder="Email..."><br><br>
          <input type="text" id="fname" name="uid" placeholder="User name..."><br><br>
          <input type="password" id="fname" name="pwd" placeholder="Password..."><br><br>
          <input type="password" id="fname" name="pwdrepeat" placeholder="Repeat password..."><br><br>
          <button type="submit" class="button button2" name="submit">Signup</button>
      </form>
<?php
if(isset($_GET["error"])){
    if ($_GET["error"] == "emptyinput"){
        echo "fill in all fields";
    }
    else if($_GET["error"] == "invaliduid"){
        echo "choose a proper username";
    }
        else if($_GET["error"] == "invalidemail"){
        echo "choose a proper email";
    }
        else if($_GET["error"] == "passwordmismatch"){
        echo "Password doesn't match";
    }
        else if($_GET["error"] == "stmtfailed"){
        echo "Something went wrong";
    }
        else if($_GET["error"] == "usernametaken"){
        echo "Username not available";
    }
        else if($_GET["error"] == "none"){
        echo "Successfull";
    }
    
}
?>
</div>
<?php
  include_once 'footer.php';
?> 
  

 
