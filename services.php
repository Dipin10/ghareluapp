<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="services.css">
  </head>
  <body>
    <?php include("header.php"); ?>
    <div class="first">
      <h1 style="text-align:center; color:#A52A2A;">OUR SERVICES</h1>
    </div>


    <?php
    ob_start();
    session_start();

    $db = mysqli_connect('localhost', 'root', '', 'registration');
    $query="SELECT * FROM `services`";
    $result=mysqli_query($db,$query);


    while($row=mysqli_fetch_assoc($result))
    {
      echo("<div class='belowheader' style='float:left; display:inline-block; max-width:100%;padding:50px' >
          <span style='float:left;width: 40%;text-align:center;'>
          <a href='servicesofuser.php?from=".$row['name']."'><img src=".$row['imgdir']." style='width:80%;'> </a>
         </span>
        <span style='float:left;width:60%'>
        <a href='servicesofuser.php?from=painting'> <h1 style='text-align:center'>".$row['name']."</h1></a>
          <p style='padding:10px;font-size:20px;'>".$row['description']."</p>
      </span>
    </div>");
    }

    ?>












<div class="clearfix"></div>
<?php include("footer.php"); ?>


  </body>
</html>
