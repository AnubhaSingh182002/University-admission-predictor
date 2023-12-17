<html>
<head>
<?php include "header.php" ?>
</head>


<body>
<?php include "top.php";  ?>
<?php
session_start();
$u = @$_SESSION['sun'];
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
<a href = student_home.php><img src = goback.png></a>
<div>
<br/>
<br/>
<center><h2 align = center>VIEW COLLEGES</h2>
<p>Registered Candidate can view list of Colleges in which they are eligible</p></center>
<form method = post enctype='multipart/form-data'>
<table align = center>




<tr>
<td>City</td><td><input type = text name = city></td>
</tr>


<tr>
<td>Stream</td><td><select name = stream>
<option value = "computer science">Computer science</option>
<option value = "civil engineering">Civil Engineering</option>
<option value = "mechanical engineering">Mechanical Engineering</option>
<option value = "electrical engineering">Electrical Engineering</option>
<option value = "chemical engineering">Chemical Engineering</option>
</select>
</td>
</tr>

<tr>
<td colspan = 2>
<input type = submit name = search1 value = "Search By CutOff">
<input type = submit name = search2 value = "Search By City And CutOff">
<input type = submit name = search3 value = "Search By Stream And CutOff">
</td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";
$rs1 = my_select("select marks from info where username='$u'");
$column1=mysql_fetch_array($rs1);
$marks = $column1[0];

if(isset($_POST['search1']))
{


$query = "select * from college inner join cutoff on cutoff.college=college.cname AND cutoff.cutoff<='$marks'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>College Name</td>";
echo "<td>Address</td>";
echo "<td>City</td>";
echo "<td>Zip Code</td>";
echo "<td>Contact</td>";
echo "<th>Stream</th>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "</tr>";
}
echo "</table>";
}



if(isset($_POST['search2']))
{

$city = $_POST['city'];
$query = "select * from college inner join cutoff on cutoff.college=college.cname AND cutoff.cutoff<='$marks' AND city='$city'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>College Name</td>";
echo "<td>Address</td>";
echo "<td>City</td>";
echo "<td>Zip Code</td>";
echo "<td>Contact</td>";
echo "<th>Stream</th>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "</tr>";
}
echo "</table>";
}




if(isset($_POST['search3']))
{

$stream = $_POST['stream'];
$query = "select * from college inner join cutoff on cutoff.college=college.cname AND cutoff.cutoff<='$marks' AND college.stream='$stream'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>College Name</td>";
echo "<td>Address</td>";
echo "<td>City</td>";
echo "<td>Zip Code</td>";
echo "<td>Contact</td>";
echo "<th>Stream</th>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "</tr>";
}
echo "</table>";
}
?>


</div>
<!-- Bottom section -->
<?php include "bottom.php" ?>
</body>
</html>