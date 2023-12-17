<?php ob_start();?>
<html>
<head>
<?php include "header.php"; ?>
</head>


<body>
<?php include "top.php";  ?>
<div style = "position : absolute ; top : 270px">

<table><tr><td><marquee  behavior="alternate" height="400">
					 <img src="slider-images/1.jpg" height="400px"/>
					 <img src="slider-images/2.jpg"height="400px"/>
					 <img src="slider-images/3.jpg"height="400px"/>
					 <img src="slider-images/4.jpg"height="400px"/>
					 <img src="slider-images/5.jpg"height="400px"/>
					 <img src="slider-images/6.jpg"height="400px"/>
					 </marquee></td><td width = 300><b>Existing User : <a href =signin.php>Sign IN</a></b>
					 <br/>
					 <br/>
					 <b>New User : <a href = signup.php>SIGN UP</a></b>
					 </td></tr></table></div>





<!-- Bottom section -->
<?php include "bottom.php"; ?>
</body>
</html>