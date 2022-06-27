<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="des.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>
  <body>

    <div class="wrapper">
      <div class="title-text">
         <div class="title login">
            Log in to your account
         </div>
         
      </div>
      <div class="form-container">
         

         <div class="form-inner">
    <form class="login" action="" method="post" autocomplete="off">
      <form action="#" class="login">

      <div class="field">
      <input type="text" name="usernameemail" id = "usernameemail" placeholder="Username or Email" required value=""> <br>
      </div>

      <div class="field">
      <input type="password" name="password" id = "password" placeholder="Password" required value=""> <br>
      <span class="eyelog" onclick="myFunction()">
        <i id="hide1" class="fa fa-eye"></i>
        <i id="hide2" class="fa fa-eye-slash"></i>
        </span>
      </div>

      <div class="pass-link">
        <a href="#">Forgot password?</a>
     </div>

     <div class="field btn">
      <div class="btn-layer"></div>
      <input type="submit" name="submit" value="Log in"> </input> 
    </div>

    
    <div class="pass-link">
      <p>&nbsp;&nbsp;&nbsp;</p>
    <i>Not a member? &nbsp;</i> <a href="registration.php">Sign up now</a>
    </form>


    <script>
      function myFunction(){
        var x = document.getElementById("password");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if(x.type === 'password'){
          x.type = "text";
          y.style.display = "block";
          z.style.display = "none";
        }
          else{
          x.type = "password";
          y.style.display = "none";
          z.style.display = "block";
          }
      }
    </script>
    
  </body>
</html>
