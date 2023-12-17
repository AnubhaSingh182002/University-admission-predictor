<html>
<head>
<?php
include "header.php";
?>
</head>
<body background = "mpimages/bns.jpg">
<?php    include "top.php" ?>
<?php
session_start();
$u = $_SESSION['sun'];
?>
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
<br/>
<a href = admin_home.php><img src = goback.png></a>
<div>

<html >
<head>

</head>
<body>
<br/>
<br/>
			
				<center><h2 align = center>ADMIN PROFILE</h2></center>
				
				
					<p>

<form method="post">
<table width="360" border="0" align = center>
<tr>
<td>
Enter your Name</td>
<td><input type="text" name="username" value = "<?php echo $u; ?>" readonly></td>
</tr>
<tr>
<td>
Enter your password</td>
<td>
<input type="password" name="pwd" ></td>
</tr>
<tr>
<td>Enter your Date of birthday</td>
<td>
<input type = date name =dob>
</td>
</tr>
<tr>
<td>
Enter your gender</td>
<td><input type="radio" name="gender"  value='male' checked>Male
&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender"  value='female'>Female
</td>
</tr>
<tr>
<td>Enter hint question</td>
<td>
<input type="text" name="hintq" ></td>
</tr>
<tr>
<td>
Enter hint answer</td>
<td><input type="text" name="hinta" ></td>
</tr>
<tr>
<td>
Enter your emailid</td>
<td><input type="text" name="emailid" ></td>
</tr>
<tr>
<td>
Enter your SMS no.</td>
<td><input type="text" name="smsno" ></td>
</tr>

<tr>
<td>
<input type="submit" name="search" value="search"/></td>

<td><input type="submit" name="modify"  value="modify"/></td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";


if(isset($_POST['modify']))
{
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$hintq = $_POST['hintq'];
$hinta = $_POST['hinta'];
$emailid = $_POST['emailid'];
$smsno = $_POST['smsno'];
// $role =  "customer";

$query = "update siteuser set pwd='$pwd',dob='$dob',gender='$gender',hintq='$hintq',hinta='$hinta',emailadd='$emailid',smsno='$smsno',role='$role' where username='$username' ";
$n = my_iud($query);
echo "$n record modified"; 
}



if(isset($_POST['search']))
{
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$hintq = $_POST['hintq'];
$hinta = $_POST['hinta'];
$emailid = $_POST['emailid'];
$smsno = $_POST['smsno'];
// $role =  "customer";

$query = "select * from siteuser where username='$u'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "$n record found"; 
echo "<table align = center border = 1>";
echo "<tr>";
echo "<th>UserName</th>";
echo "<th>Password</th>";
echo "<th>Date of Birth</th>";
echo "<th>Gender</th>";
echo "<th>HintQ</th>";
echo "<th>HintA</th>";
echo "<th>Email ID</th>";
echo "<th>Contact No.</th>";
echo "<th>Role</th>";
echo "</tr>"; 
while($row = mysql_fetch_array($rs))
{
echo "<tr>";
echo "<td>$row[0]</td>" ;
echo "<td>$row[1]</td>" ;
echo "<td>$row[2]</td>" ;
echo "<td>$row[3]</td>" ;
echo "<td>$row[4]</td>" ;
echo "<td>$row[5]</td>" ;
echo "<td>$row[6]</td>" ;
echo "<td>$row[7]</td>" ;
echo "<td>$row[8]</td>" ;
echo "</tr>";
}
echo "<table>";
}
?>

		
			</body>
</html>


</div>
<?php  include "bottom.php "?>
</body>
</html>