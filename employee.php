<?php include('employeeserver.php'); ?>
<html>
<head>
  <title>Employee Verification</title>
  <link rel= "stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="header">
  	<h2>Add Employee</h2>
  </div>

  <form method="post" action="" onsubmit="return validation()">
    <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Employee Name</label>
      <input type="text" id="username" name="username" value="<?php echo $username; ?>" >
      <span id="usernameError"></span>
  	</div>
    <div class="input-group">
  	  <label>Address</label>
      <input type="text" id ="address" name="address" value="<?php echo $address; ?>">
      <span id="addressError"></span>

  	</div>
    <div class="input-group">
      <label>Employee work</label>
      <input type="text" id ="employee-work" name="employeework" value="<?php echo $employeework; ?>">
      <span id="Employee-work-Error"></span>
    </div>
      <div class="input-group">
  	  <label>Phone No</label>
      <input type="number" id ="phone-number" name="phoneno" value="<?php echo $phoneno; ?>">
      <span id="phoneError"></span>
  	</div>
    <div class="input-group">
    <label>email</label>
    <input type="text" id ="email" name="email" value="<?php echo $email; ?>">
    <span id="email-Error"></span>
  </div>
      <div class="input-group">
  	  <input type="submit" class="btn" name="reg_emp"></button>
  	</div>
</form>
<script type="text/javascript">
  function validation(e){
        var checker = true;
        var user = document.getElementById('username').value;
        var address = document.getElementById('address').value;
        var phnNo=document.getElementById('phone-number').value;
        var empwork=document.getElementById('employee-work').value;
        var email=document.getElementById('email').value;
        if((user.length<=4) || (user.length>20)){
            checker=false;
            document.getElementById('usernameError').innerHTML="Please fill it between 2 and 20 alphabets";
        }
        if(/^\d+$/.test(user)){
            checker=false;
            document.getElementById('usernameError').innerHTML="Please dont enter only number";

        }
        if((address.trim().length<5) || (address.trim().length>30)){
            checker=false;
            document.getElementById('addressError').innerHTML="please enter your Address between 5 and  30 alphabets";
        }
        if(phnNo.length!=10){
            checker=false;
            document.getElementById('phoneError').innerHTML="Phone Number must be of 10 digits";
        }
        if(!/^\d+$/.test(phnNo)) {
            checker=false;
            document.getElementById('phoneError').innerHTML="Phone Number Should Contain Only Digits";
        }
        if((empwork.length<=6) || (empwork.length>20)){
          checker=false;
          document.getElementById('Employee-work-Error').innerHTML="Employee work length must be between 6 and 20";

        }


        var reg = /^[A-Za-z0-9][A-Za-z0-9_\-]+@[A-Za-z0-9_\-]+?\.[A-Za-z]{2,3}$/;
        if(!reg.test(email)){
            checker=false;
            document.getElementById('email-Error').innerHTML="Invalid Email";
        }

        return checker;

  }
      </script>
</body>

</html>
