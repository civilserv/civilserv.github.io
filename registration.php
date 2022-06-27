<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="des.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>
  <body>

    <div class="wrapper">
      <div class="title-text">
    <div class="title signup">
      Create Account
   </div>
</div>

<div class="form-container">    

  <div class="form-inner">
    <form class="signup" action="" method="post" autocomplete="off">
      <form action="#" class="signup">

     <div class="field">
      <input type="text" name="name" id = "name" placeholder="Name" required value=""> 
    </div>

      <div class="field">
      <input type="text" name="username" id = "username" placeholder="Username" required value=""> <br>
      </div>

      <div class="field">
      <input type="email" name="email" id = "email" placeholder="Email" required value=""> <br>
      </div>

      <div class="field">
      <input type="password" name="password" id ="password"  placeholder="Password" required value=""> <br>
      <span class="eye" onclick="myFunction()" onchange='check_pass()'>
        <i id="hide1" class="fa fa-eye"></i>
        <i id="hide2" class="fa fa-eye-slash"></i>
        </span>
      </div>

      <div class="field">
      <input type="password" name="confirmpassword" id ="confirmpassword" placeholder="Confirm Password" required value=""> <br>
      <span class="eye2" onclick="eyes()">
        <i id="hide3" class="fa fa-eye"></i>
        <i id="hide4" class="fa fa-eye-slash"></i>
        </span>
      </div>
   
<div></div>

<p>&nbsp;&nbsp;&nbsp;</p>

      <div class="d-flex justify-content-between">
        <div class="f5">
            <input type="checkbox" class="form-check-input" id="remember" required>
            <label for="remember" class="form-check-label">By clicking Register, you agree on our <a href="privacy.html">Terms and conditions</a></label> 
        </div>

      <div class="field btn">
        <div class="btn-layer"></div>
      <input type="submit" name="submit" value="Register" onclick="checkpassword()"></input>
     </div>

     <div class="pass-link">
      <p>&nbsp;&nbsp;&nbsp;</p>
      <i>Already a member?&nbsp;</i><a href="index.php">Log in</a>
      
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

    <div>

      <script>
        function eyes(){
          var x = document.getElementById("confirmpassword");
          var y = document.getElementById("hide3");
          var z = document.getElementById("hide4");
  
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

    </div>

    

    


  </body>
</html>