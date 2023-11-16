<!DOCTYPE html>
<html>
<head>
<title>digital devices</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="digital";

$name=$_POST['name'];
$ph_no=$_POST['ph_no'];
$landmark=$_POST['landmark'];
$pincode=$_POST['pincode'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `register` (`name`, `ph_no`, `landmark`, `pincode`) VALUES ('$name', '$ph_no', '$landmark', '$pincode');";

 $result = mysqli_query($con,$sql);
 
 if($result){
  echo "successfully inserted";
  header("location:online.php");
}
  else
   echo "not inserted";
}

?>

<form action="/hem/register.php" method="POST">
NAME : <input type="text" id="name" name="name" /><br><br>
mobile_no : <input type="number" id="ph_no" name="ph_no" /><br><br>  
LANDMARK :<input type="text" id="landmark" name="landmark" /><br><br> 
PINCODE : <input type="number" id="pincode" name="pincode" /><br><br>  
	   <input type="submit" id="submit" name="register"/><br><hr>
	
</form>
</body>
</html> 