<?php
  include_once 'header.php';
?>    
<div class="center">
<h2>Log-In</h2>
      <form action="includes/login.inc.php" method="post">
          <input type="text" id="fname" name="uid" placeholder="Username/Email..."><br><br>
          <input type="password" id="fname" name="pwd" placeholder="Password..."><br><br>
          
          <button type="submit" class="button button2" name="submit">Log-In</button>
      </form>
<?php
if(isset($_GET["error"])){
    if ($_GET["error"] == "emptyinput"){
        echo "fill in all fields";
    }
    else if($_GET["error"] == "wronglogin"){
        echo "Incorrect Login";
    }
        else if($_GET["error"] == "inncorrectpwd"){
        echo "Incorrect Password";
    }
}
?>
</div>
<?php
  include_once 'footer.php';
?> 
  

 
