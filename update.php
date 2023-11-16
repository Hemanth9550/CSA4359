
<!DOCTYPE html>
<html>
<head>
<title>Connectivity</title>
</head>
<body>
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

$sql="UPDATE `login` SET `user`='[pani]',`pass`='[hem]' WHERE 1";

 $result = mysqli_query($con,$sql);
 
 if($result)
  echo "successfully updated";
  else
   echo "not inserted"; 
}

?>

<form action="/hem/update.php" method="POST">
USER NAME : <input type="text" id="user" name="user" /><br><br>
PASSWORD : <input type="text" id="pass" name="pass" /><br><br>  
	   <input type="submit" id="submit" name="submit"/><br><hr>
</form>
</body>
</html> 