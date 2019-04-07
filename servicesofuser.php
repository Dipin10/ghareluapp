<?php

include("loginserver.php");

if(isset($_GET['from']))
{
  $serviceValue=$_GET['from'];
}
else
{
  $serviceValue=null;
}
if(!isset($_SESSION['username'])){
 $_SESSION['kickurl'] = $_SERVER['PHP_SELF'];
   header('location:login.php');
   //header("Location:login.php?r=".$_SERVER['PHP_SELF']);
   exit();
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="painting.css">
  </head>
  <body>
    <?php
    include('allservice.php'); ?>
    <?php include('header.php'); ?>
    <div class="upimage">
      <img src="images/maintainance.jpg" alt="">
    </div>
    <p style="font-size:20px; text-align:center;">Please Enter The Correct Information  About The Service Details That You Need</p>
    <div class="header">
    	<h2>DETAILS</h2>
    </div>

    <form method="post" onsubmit="return validation()">
    	<?php include('errors.php'); ?>
      <div class="input-group">
    	  <label>Place Where You Need Services</label>
        <input type="text" name="place" value="<?php echo $place; ?>" placeholder="ex:house,office">
    	</div>
      <div class="input-group">
    	  <label>No Of Workers</label>
        <input type="number"  name="workerno" value="<?php echo $workerno; ?>" placeholder="no more than 3 workers">
    	</div>
      <div class="input-group">
    	  <label>Name Of Service</label>
        <input type="text" name="services" value="<?php echo $serviceValue; ?>" placeholder="ex:painting,mechanic,electric repair">
    	</div>

      <div class="input-group">
    	  <label>Date</label>
        <input type="date" name="date" value="<?php echo $date; ?>">
    	</div>

    	<div class="input-group">
    	  <input type="submit" class="btn" name="submitted" />
    	</div>
    </span>
  </div>
</form>
<?php include('footer.php'); ?>
  </body>
</html>
