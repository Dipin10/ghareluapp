<?php
ob_start();
session_start();
if(isset($_SESSION['adminname']))
{
  $_SESSION['adminname']=null;
}

header("location:adminlogin.php");

?>
