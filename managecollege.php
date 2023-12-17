<html>
<head>
<?php include "header.php" ?>
</head>


<body>
<?php include "top.php";  ?>
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
<br/>
<br/>
<center><h2 align = center>MANAGE COLLEGES</h2></center>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>
Enter College ID</td><td><input type = text name = cid></td>
<tr>

<td>Enter College Name</td> <td><input type = text name = cname></td>
</tr>

<td>
Address</td><td><input type = text name = address></td>
<tr>
<tr>
<td>City</td><td><input type = text name = city></td>
</tr>

<tr>
<td>Zip Code</td><td><input type = text name = zipcode></td>
</tr>

<tr>
<td>Contact</td><td><input type = text name = contact></td>
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
<input type = submit name = save value = Save>
<input type = submit name = modify value = Modify>
<input type = submit name = remove value = Remove>
<input type = submit name = search value = Search>
</td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$cid = $_POST['cid'];
$cname = $_POST['cname'];			
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$contact = $_POST['contact'];
$stream = $_POST['stream'];



$query = "insert into college values('','$cname','$address','$city','$zipcode','$contact','$stream')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$cid = $_POST['cid'];
$cname = $_POST['cname'];			
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$contact = $_POST['contact'];
$stream = $_POST['stream'];

$query = "update college set cname='$cname',address='$address',city='$city',zipcode='$zipcode',contact='$contact' where cid='$cid'";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$cid = $_POST['cid'];

$query = "delete from college where cid=$cid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{


$query = "select * from college";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>College ID</td>";
echo "<td>College Name</td>";
echo "<td>Address</td>";
echo "<td>City</td>";
echo "<td>Zip Code</td>";
echo "<td>Contact</td>";
echo "<td>Stream</td>";
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