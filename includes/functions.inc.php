<?php
    function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
        $result;
        if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){ //empty built in function
            $result = true;
        }
        else{
            $result =false;
        }
        return $result;
    }


    function invalidUid($username){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){ //check if string match up with the search parameter
            $result = true;
        }
        else{
            $result =false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //check if string match up with the search parameter
            $result = true;
        }
        else{
            $result =false;
        }
        return $result;
    }

    function pwdMatch($pwd,$pwdRepeat){
        $result;
        if($pwd !== $pwdRepeat){ //check if string match up with the search parameter
            $result = true;
        }
        else{
            $result =false;
        }
        return $result;
    }

    
    function uidExists($conn,$username, $email){
      $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;"; // we use ? to use prepared statements
       //prepared statement
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
       }
       
       mysqli_stmt_bind_param($stmt,"ss", $username, $email);
       mysqli_stmt_execute($stmt);

       $resultData = mysqli_stmt_get_result($stmt);
       
       if($row = mysqli_fetch_assoc($resultData)){
           return $row;
       }
       else{
           $result = false;
           return $result;
       }

       mysqli_stmt_close($stmt);
    }


    
    function createUser($conn, $name, $email, $username, $pwd){
        $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?,?,?,?);"; // we use ? to use prepared statements
         //prepared statement
         $stmt = mysqli_stmt_init($conn);

         if(!mysqli_stmt_prepare($stmt, $sql)){
          header("location: ../signup.php?error=stmtfailed");
          exit();
         }

         $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
         
         mysqli_stmt_bind_param($stmt,"ssss", $name, $email, $username, $hashedPwd);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_close($stmt);
         header("location: ../signup.php?error=none");
         exit();
      }


      function emptyInputLogin($username,$pwd){
        $result;
        if(empty($username) || empty($pwd)){ //empty built in function
            $result = true;
        }
        else{
            $result =false;
        }
        return $result;
    }
  

    function loginUser($conn, $username, $pwd){
        $uidExists = uidExists($conn, $username, $username);

        if($uidExists === false){
            header("location: ../login.php?error=wronglogin");
            exit();
        }

        $pwdHashed = $uidExists["usersPwd"];// associative arrays using names in database
        $checkPwd = password_verify($pwd, $pwdHashed);

        if($checkPwd === false){
            header("location: ../login.php?error=wronglogin");
            exit();
        }
        else if($checkPwd === true){
            //sessions - information that we can grab onto
            session_start();
            //session variables super global
            $_SESSION["userid"] = $uidExists["usersId"];
            $_SESSION["useruid"] = $uidExists["usersUid"];
            header("location: ../index.php");
            exit();
        }
    }



    

    