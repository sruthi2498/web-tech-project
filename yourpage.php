<?php
session_start();
?>
<html>
	<head>
		
	</head>
	<body>
		<?php
        //echo "hello";
      
    $servername = "localhost";
    $username = "root";
    $password = "charu1706";
    $conn = mysqli_connect($servername, $username, $password);
    //$sql = "CREATE DATABASE myDB";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
     //session_start();
   extract ($_SESSION);
   //echo "username : ".$_SESSION["username"]." password : ".$SESSION["pswd"]."<br>";
    /*$sql12=mysqli_select_db($conn,'myDB');
    $i=1;*/
   $n=$_SESSION["username"];
    $p=$_SESSION["pswd"]; 
    echo $n." ".$p;
    ?>
	</body>
</html>