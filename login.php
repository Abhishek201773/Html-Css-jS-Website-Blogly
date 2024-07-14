<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.html");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <title>Document</title>
<title>Login</title>
</head>
<body>
    <header class="header">
<nav class="navbar">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Service</a>
    <a href="#">Contact</a>
</nav>
<form action="#" class="search-bar">
<input type="text"placeholder="Search">
<button class="sumbit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
  </svg></button>
</form>
    </header>
<div class="background">
</div>
    <div class="container">
<div class="content">
    <h2><i class='bx bxl-blogger'></i>Blogly</h2>
<div class="text-sci">
<h2 class="logo">Welcome!<br><span>to Our Website</span></h2>
<p>Start your Journey of writing just within few effort </p>
</div>
<div class="social-icons">
    <a href="#"><i class='bx bxl-linkedin-square'></i></a>
    <a href="#"><i class='bx bxl-instagram'></i></a>
    <a href="#"><i class='bx bxl-whatsapp'></i></a>
    <a href="#"><i class='bx bxl-google'></i></a>
</div>
<div class="logreg-box">
<div class="form-box login">
<form class="" action="" method="post" autocomplete="off">
<h2>Sign In</h2>
    
<div class="input-box">
    <span class="icon"><i class='bx bxs-envelope'></i></span>
    <input type="email" name="email" id="email" required value="" >
    <label for="email">Email</label>
   </div> 
  
   <div class="input-box">
   <span class="icon"><i class='bx bx-key'></i></span>
   <input type="password" name="password" id="password" pattern=".{6,}" title="Password length 6 or more" required value="" >
    <label for="password">Password</label>
   </div>
      <div class="remember-forgot">
    <label>
        <input type ="checkbox">Remember Me
    </label>
    <a href="forgot.php">Forgot Password</a>
    <a href="login.php"></a>
  </div>
  </br>
      <button type="submit" name="submit"> 
     Sign Up</button>
     <div class="login-register">
    <p>Create new Account ?   <a href="registration.php"class="register-link">Sign Up</a></p>
</div>
    </form>
</div>
</div>
</body>
</html>



