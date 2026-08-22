<?php

session_start();

if(isset($_SESSION['errors'] )){

  foreach($_SESSION['errors']  as $error){
    ?>
    <div class="alert alert-danger w-75 m-auto my-2"><?php    echo $error; ?> </div>
    <?php
     
  }
  unset($_SESSION['errors'] );
}