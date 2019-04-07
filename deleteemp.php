<?php require 'deleteserver.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require 'errors.php'; ?>
    <div class="header">
     <h2>Delete Employee</h2>
    </div>
    <form class="" action="" method="post">
      <div class="input-group">
       <label>provide id</label>
        <input type="number"  name="idone" value="<?php echo $idone; ?>">


     </div>
     <div class="input-group">
    <input type="submit" class="btn" name="delete_emp"></button>
  </div>
    </form>
  </body>
</html>
