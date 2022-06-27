<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Home</title>

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="home.css">
</head>


    
<div class="container">

<header>
    <img src="pictures/logo4.png" width="150" height="150" class="center">
   

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="subjects.html">Subjects</a>
        <a href="assessment.html">Assessment</a>
        <a href="about.html">About</a>
        <a href="inquiries.html">Contact Us</a>
        <a href="logout.php">Sign Out</a>
    </nav>

</header>

<!-- home section  -->

<section class="home">

    <div class="content">
        <h3>E-learning is a better way of learning</h3><p>
        <p>Work hard in silence let success make the noise</p>
        
    </div>

    <div class="image">
        <img src="pictures/learning.png" alt="">
    </div>
  
    
    
</section>




<!-- footer section  -->

<section class="footer">

    <div class="box-container">

       
       
  

        <div class="box">
            <h3></h3>
        
    
    

  

</section>

</div>







<!-- custom js file link -->
<script src="home.js"></script>

</body>
</html>





