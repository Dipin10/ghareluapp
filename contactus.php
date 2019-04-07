<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title></title>
	</head>
	<body>

		<?php include('header.php');
		//global $errors;
		//global $username;
		//global $email;
		?>
    <div class="header">
      <h2>CONTACT US</h2>
    </div>
		<form   id="contact" action="contactserver.php" method="post" onsubmit="return validation()">
      <!-- <?php include('errors.php'); ?> -->
      <div class="input-group">
        <label>Name</label>
        <input type="text" id="username" name="username" value=" " required>
        <span id="usernameError"></span>
      </div>

      <div class="input-group">
        <label>Phone No</label>
        <input type="number" id ="phone-number" name="Phoneno" value="" required>
        <span id="phoneError"></span>
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="text" id="email" name="email" value="" required>
        <span id="emailerror"></span>
      </div>
      </div>
			<div class="input-group">
        <label>Message</label>
        <textarea name="message" rows="6" cols="50" value=""></textarea>
        <span id="messageerror"></span>
      </div>
      </div>


      <div class="input-group">
        <input type="submit" class="btn" value="submit" name="contact"></button>

      </div>

  </form>
  <script type="text/javascript">
    function validation(e){
          var checker = true;
          var user = document.getElementById('username').value;
          //var address = document.getElementById('address').value;
          var phnNo=document.getElementById('phone-number').value;
          va//r pswrd=document.getElementById('password').value;
          //var confirmpassword=document.getElementById('confirmpassword').value;
          var email=document.getElementById('email').value;
          if((user.length<=4) || (user.length>20)){
              checker=false;
              document.getElementById('usernameError').innerHTML="Please fill it between 2 and 20 alphabets";
          }
          if(/^\d+$/.test(user)){
              checker=false;
              document.getElementById('usernameError').innerHTML="Please dont enter only number";
          }
          //if((address.trim().length<5) || (address.trim().length>30)){
            //  checker=false;
              //document.getElementById('addressError').innerHTML="please enter your Address between 5 and  30 alphabets";
          }
          if(phnNo.length!=10){
              checker=false;
              document.getElementById('phoneError').innerHTML="Phone Number must be of 10 digits";
          }
          if(!/^\d+$/.test(phnNo)) {
              checker=false;
              document.getElementById('phoneAError').innerHTML="Phone Number Should Contain Only Digits";
          }

          //if((pswrd.length<5) || (pswrd.length>20)){
              //checker=false;
            //  document.getElementById('passwordError').innerHTML="Password must be more than 5 digits";
          //}


          //if(pswrd!=confirmpassword){
            //  checker=false;
              //document.getElementById('confirmpasswordError').innerHTML="Your password and confirmation passsword donot match";
          //}
          var reg = /^[A-Za-z0-9][A-Za-z0-9_\-]+@[A-Za-z0-9_\-]+?\.[A-Za-z]{2,3}$/;
          if(!reg.test(email)){
              checker=false;
              document.getElementById('emailerror').innerHTML="Invalid Email";
          }
          // console.log(/^[A-Za-z0-9_-.]+@[A-Za-z0-9_-.]+.[A-Za-z]{2,4}$/.test(email));
          /*if(email.indexOf('@')<=0){
              checker=false;
              document.getElementById('emailError').innerHTML="Invalid @ position";
          }
          return checker;
          if((email.chartAt(email.length-4)!='.') && (email.chartAt(email.length-3)!='.')){
              checker=false;
              document.getElementById('emailError').innerHTML="Invalid . position";
          }*/
          return checker;
    }
        </script>
	</body>
</html>
