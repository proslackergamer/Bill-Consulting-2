<?php
  include 'processLogin.php';
  // THIS PAGE GOES WITH processLogin.php PAGE FOR LOGIN
  
         
  // display custom message
  echo "Welcome, " . $_SESSION['sName'] . '!';
                
  // redirect to home page
  header("Location: ../pages/home.html"); 
  exit();

?>
