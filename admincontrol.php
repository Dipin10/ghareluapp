
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="admincontrol.css" />
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalable=0">
<script src="scripts/jquery-1.12.3.min.js"></script>
<script >
$(document).ready(function(){
	$("a.mobile").click(function(){
		$(".sidebar").slideToggle('fast');
	});

	window.onresize = function(event) {
		if($(window).width() > 320) {
			$(".sidebar").show();
		}
	};
});
$(document).ready(function () {
    var height1 = $('.container').height()
    var height2 = $('body').height()

    if (height1 > height2) {
        $('.sidebar').height(height1)
    } else {
        $('.sidebar').height(height2)
    }
});
</script>
</head>

<body>


	<div id="header">
		<div class="logo"><a href="home.php">Gharelu</a></div>
	</div>

	<a class="mobile" href="#">MENU</a>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a href="accounts.php">Accounts</a></li>

				<li><a href="users.php">Users</a></li>

				<li><a href="employeeone.php">Employee</a></li>
				<li><a href="adminServices.php">Services</a></li>
				<li><a href="setting.php">Log Out</a></li>
				<!-- <li><a href="servicesone.php">Services</a></li> -->
			</ul>
		</div>
	</div>


</body>
</html>
