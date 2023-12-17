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
<center><h2 align = center>MANAGE CUTOFF MARKS</h2></center>
<form method = post >
<table align = center>
<tr>
<td>
Enter ID</td><td><input type = text name = id></td>
<tr>

<td>Enter College Name</td> <td><input type = text name = college></td>
</tr>

<td>
Stream</td><td>
<select name = stream>
<option value = "computer science">Computer science</option>
<option value = "civil engineering">Civil Engineering</option>
<option value = "mechanical engineering">Mechanical Engineering</option>
<option value = "electrical engineering">Electrical Engineering</option>
<option value = "chemical engineering">Chemical Engineering</option>
</select>
</td>
<tr>
<tr>
<td>Year</td><td><input type = text name = year></td>
</tr>

<tr>
<td>CutOff Marks</td><td><input type = text name = cutoff></td>
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
$id = $_POST['id'];
$college = $_POST['college'];			
$stream = $_POST['stream'];
$year = $_POST['year'];
$cutoff = $_POST['cutoff'];


$query = "insert into cutoff values('','$college','$stream','$year','$cutoff')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$id = $_POST['id'];
$college = $_POST['college'];			
$stream = $_POST['stream'];
$year = $_POST['year'];
$cutoff = $_POST['cutoff'];

$query = "update cutoff set college='$college',stream='$stream',year='$year',cutoff='$cutoff' where id='$id'";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$id = $_POST['id'];

$query = "delete from cutoff where id=$id";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{


$query = "select * from cutoff";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>College Name</td>";
echo "<td>Stream</td>";
echo "<td>Year</td>";
echo "<td>CutOff Marks</td>";

echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";

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