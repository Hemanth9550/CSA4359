<!DOCTYPE html>
<html>
<head>
<title>Display DAta from Data Base</title>
<style>
	table{
}
</style>
</head>
<body>
<h1><center>To Fetch data from table</center></h1><br><br><hr>
<form action="/hellofetch.php" method="post">
Click to fetch : <input type= "submit" name="submit" value="click me"/>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="hemanth";

$user=$_POST['user'];
$pass=$_POST['pass'];

$con=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT Fname,lname FROM login";
$result=my_sqli_query($conn,$sql);
if($result)
{
echo "<table>
<tr>
<th>FNAME</th>
<th>LNAME</th>
</tr>";
while($row=$result->fetch_assoc())
{
echo"<tr>
<td>".$row["Fname"]."</td>
<td>".$row["lname"]."</td>
</tr>";
}
echo "</table>";
}
else
echo "0 results";
}
mysqli_close($conn);

