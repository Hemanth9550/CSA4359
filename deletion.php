<!DOCTYPE html>
<html>
    <head>
        <title>CONNECTIVITY</title>
</head>
<body>
    

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $servername="localhost";
        $username="root";
        $password="";
        $database="hemanth";
	$
        

        $con=mysqli_connect($servername,$username,$password,$database);
        $sql="DELETE FROM 'table' WHERE Character_Name='$cname'";
        $result= mysqli_query($con,$sql);

        if($result)
            echo "SUCCESSFULLY DELETED";
        else
            echo "NOT DELETED";
    }
    ?>

    <form action="/hem/deletion.php" method="POST"">
        USER NAME : <input type="text" id="user" name="cname" /><br></br>
        PASSWORD  : <input type="text" id="pass" name="pass" /><br><br>
                    <input type="submit" id="submit" name="submit" /><br><br>
    </form>
</body>
</html>