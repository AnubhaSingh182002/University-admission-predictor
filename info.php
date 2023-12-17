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
<center><h2 align = center>Update Info</h2></center>
<form method = post >
<table align = center>


<tr>
<td>
Enter Name</td><td><input type = text name = username value = "<?php echo $u; ?>" readonly></td>
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
<td>Enter Marks </td><td><input type = text name = marks value = 0></td>
</tr>

<tr>
<td colspan = 2>
<input type = submit name = save value = Save>
<input type = submit name = modify value = Modify>
<input type = submit name = search value = Search>
</td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";

if(isset($_POST['save']))
{
$username = $_POST['username'];
$stream = $_POST['stream'];			
$marks = $_POST['marks'];


$query = "insert into info values('$username','$stream','$marks')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$username = $_POST['username'];
$stream = $_POST['stream'];			
$marks = $_POST['marks'];

$query = "update info set stream='$stream',marks='$marks' where username='$username'";
$n = my_iud($query);
echo "$n record modified"; 
}




if(isset($_POST['search']))
{
$query = "select * from info where username='$u'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>UserName</td>";
echo "<td>Stream</td>";
echo "<td>Marks</td>";

echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";

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