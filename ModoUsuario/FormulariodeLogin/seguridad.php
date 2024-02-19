<?php
session_start();

if(!$_SESSION){
  header("Location:Login.php");

  
}

?>