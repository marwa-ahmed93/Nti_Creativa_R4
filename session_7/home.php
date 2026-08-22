<?php
session_start();

echo "welcome ". $_SESSION['user_name'] ."<br>";
echo "User email" . $_SESSION['email'];




include('layout/header.php');
?>  


  <a class="btn btn-info" 
  href="logout.php">Logout</a>



  <?php 


include('layout/footer.php');
?>  