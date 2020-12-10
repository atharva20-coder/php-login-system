<?php

  function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
      $result;
      if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
          $result = true;                       //their is a mistake
      }else{
          $result= false;
      }
      return $result;
  }


  function invalidUid($username) {
      $result;
      if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
          $result = true;   //their is a mistake
      }else{
          $result= false;
      }
      return $result;
  }


  function invalidEmail($email) {
      $result;
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $result = true;   //their is a mistake
      }else{
          $result= false;
      }
      return $result;
  }


  function pwdMatch($pwd, $pwdRepeat) {
      $result;
      if($pwd !== $pwdRepeat){
          $result = true;   //their is a mistake
      }else{
          $result= false;
      }
      return $result;
  }


  function uidExists($conn, $username, $email) {
      $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ? ;";         //? is a placeholder bcoz we are going to use prepared statement
      //preaparing prepared statement
      $stmt = mysqli_stmt_init($conn);           //initialising connection to database
      if(!mysqli_stmt_prepare($stmt, $sql)){
         header("Location: ../signup.php?error=stmtfailed");
        exit();                                           //in this if statement we are going to check that our prepared stmt is coorect or wrong
      }
      
      //passing data from users table
      
      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
      mysqli_stmt_execute($stmt);
      
      $resultsData = mysqli_stmt_get_result($stmt);
      
      if($row = mysqli_fetch_assoc($resultsData)){
          return $row;
      }else{
          $result = false;
          return $result;
      }
      
      mysqli_stmt_close($stmt);      
      
  }

//signing up yhe user inside website
  function createUser($conn, $name,$email, $username, $pwd) {
      $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?) ;";         
      $stmt = mysqli_stmt_init($conn);           
      if(!mysqli_stmt_prepare($stmt, $sql)){
         header("Location: ../signup.php?error=stmtfailed");
        exit();                                           
      }
      
      //passing data from users table
      
      
      //#ing password
      
      
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
      
      mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);      
      header("Location: ../signup.php?error=none");
        exit();
      
  }

  function emptyInputLogin($username, $pwd){
      $result;
      if(empty($username) || empty($pwd)){
          $result = true;                       //their is a mistake
      }else{
          $result= false;
      }
      return $result;
  }

   function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    
    if($uidExists === false){
        header("Location: ../login.php?error=wronglogin");
        exit();
     }
       
       //checking #ed password
       $pwdHashed = $uidExists["usersPwd"];
       $checkPwd = password_verify($pwd, $pwdHashed);
       
       if($checkPwd === false){
           header("Location: ../login.php?error=inncorrectpwd");
           exit();
       }
       else if ($checkPwd === true){
           session_start();
           $_SESSION["userid"] = $uidExists["usersId"];
           $_SESSION["useruid"] = $uidExists["usersUid"];
           header("Location: ../index.php");
           exit();           
       }
       
   }












