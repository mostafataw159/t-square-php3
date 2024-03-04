<?php
session_start();
if(isset($_SESSION["mostafa"]) && isset($_SESSION["tawfik"])){

if($_SESSION["mostafa"]=="mostafatawfik@gmail.com"&& $_SESSION["tawfik"]==13456789 ){


echo $_SESSION["mostafa"].'<br>';
echo $_SESSION["tawfik"].'<br>';
echo "<a href='logout.php'>log out</a>";
}else{
 $_SESSION["alert"]="you don't have account you must sign in first.";
    header("Location:index.php");
}

}
else{
header("Location:index.php");
}

?> 
