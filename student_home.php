<html>
<head>
<?php
include "header.php"; ?>
</head>
<body>
<?php    include "top.php"; ?>
<div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
	<br/>	
<?php
/*
on authentic page, only valid users of website can visit
strangers(anonymous) are not allowed
*/
@session_start();
include_once "dbconfigure.php";
$msg="";
if(verifyuser())
{
if(fetchrole()=='student')
	{
	$un=fetchusername();
	$msg="Welcome $un , <br /><a 	href='signout.php'>Signout</a>";
	}
	else
	{
header("Location:loginerror.php");
	}
}
else
{
header("Location:loginerror.php");
}
?>



<html >
<head>

</head>
<body>
<br/>
<br/>
<br/>
<?php
echo $msg;

?>
	<br/>
<br/>
<br/>
<br/>
			
				<center><h2 align = center>Student Home Page</h2></center>
				
				
					<p style = "font-size : 30pt">Services
<ul style = "color : red">
<li><a href = info.php>Update Info</a></li>
<li><a href = college.php>View College</a></li>
<li><a href = siteuser2.php>View Profile</a></li>
<li><a href = feedback.php>Feedback</a></li>

<ul>
</p>
				
			
			</body>
</html>


</div>
<?php  include "bottom.php"; ?>
</body>
</html>