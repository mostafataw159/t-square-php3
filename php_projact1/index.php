<?php
session_start();
if(isset($_SESSION["mostafa"]) && isset($_SESSION["tawfik"])){
    if($_SESSION["mostafa"]=="mostafatawfik@gmail.com"&& $_SESSION["tawfik"]==13456789 ){
header("Location:data.php");
}}
$userErr = $passErr = $user ="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

$user = $_POST['user'];
$password = $_POST['pass'];

if(empty($user)){
   $userErr = "enter email.";
}
else if(empty($password)){
$passErr ="enter password.";
}
else {
    $_SESSION["mostafa"]= $user;
    $_SESSION["tawfik"]= $password;
    header("Location:data.php");
}
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
        <h1 class="mb-5 mt-5" >Log In Your Data</h1>
        <form action="" method="post">
  
        <input type="text"name="user" placeholder=" enter your email" class="form-control mb-4 mt-4" value =<?php echo $user; ?>>
         <h3 class="text center alert-warning"><?php echo $userErr; ?></h3>
        <input type="password" name="pass" placeholder=" enter your password" class="form-control mb-4 mt-4" >
        <h3 class="text center alert-warning"><?php echo $passErr; ?></h3>
       <input type="submit" name="login" value="enter your data" class="form-control mb-3 mt-3 btn btn-danger">
        </form>
        <?php 
         if(isset($_SESSION["alert"])){
        echo "<h3 class='alert alert-success text-center'>".$_SESSION["alert"] ."</h3>";
          unset($_SESSION["alert"]);
          } 
          ?>
        </div>
    </div>
</div>


</body>
</html>





<!-- title section 
//echo "hello from " . "php " . "page";
//echo "<br>";
//echo "<br>";
//echo "<br>";

//get_name section
//$x =6;
//$y =8;
//function get_name(){
  //  echo $GLOBALS["x"] = $GLOBALS["x"] + $GLOBALS["y"];
    // echo "<br>";
//}
//echo $x . "<br>";
//echo $y . "<br>";
//get_name();
//get_name();
//get_name();
//get_name();

//echo $x . "<br>";

//text section
//$x = "hello+php_section";
//echo str_word_count($x);-->