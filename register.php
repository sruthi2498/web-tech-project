<!DOCTYPE html>
<html>
<body>

<?php
    extract ($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "charu1706";
    $conn = mysqli_connect($servername, $username, $password);
    //$sql = "CREATE DATABASE myDB";
    $sql12=mysqli_select_db($conn,'myDB');
    $i=1;
    /*if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";*/
    //$sql = "CREATE DATABASE myDB";
    /*if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    $sql1 = "CREATE TABLE userinfo(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50)
    )";
    //$sql1="ALTER TABLE userinfo2 AUTO_INCREMENT=1001";
    if ($conn->query($sql1) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/
    $n=$_POST["username"];
    $p=$_POST["pswd"];
    $e=$_POST["email"];


$sql = "SELECT username,email FROM userinfo";
$result = mysqli_query($conn, $sql);  
if (mysqli_num_rows($result) > 1) {
    while($row = mysqli_fetch_assoc($result)) {
        //echo "usr: " . $row["username"]. " - pswd: " . $row["password"]. "email- " . $row["email"]. "<br>";
        if($n==$row["username"]){
            echo $row["username"]." username taken <br>";
            $i=0;
        }
        if($e==$row["email"]){
            echo $row["email"]." email taken <br>";
            $i=0;
        }
    }
}
if($i==1){
    $sql1="INSERT INTO userinfo
            (username,password,email)
            VALUES
            ('$n','$p','$e')";
    if (mysqli_query($conn, $sql1)) {
    echo "New record created successfully";
    } 
    else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
}
else{
    echo "<a href='register.html'>go back to retry</a> <br>";
}
    
$sql = "SELECT username, password, email FROM userinfo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "usr: " . $row["username"]. " - pswd: " . $row["password"]. "email- " . $row["email"]. "<br>";
    }
} 
else {
    echo "0 results";
}
echo "<br><br>";
$sql="UPDATE userinfo SET username='abc' WHERE username='qwerty'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "usr: " . $row["username"]. " - pswd: " . $row["password"]. "email- " . $row["email"]. "<br>";
    }
} 
else {
    echo "0 results";
}
/*$sql = "SELECT username FROM user";
$result = mysqli_query($conn, $sql);  
if (mysqli_num_rows($result) > 1) {
    while($row = mysqli_fetch_assoc($result)) {
        //echo "usr: " . $row["username"]. " - pswd: " . $row["password"]. "email- " . $row["email"]. "<br>";
        if($n==$row["username"]){
            echo $row["username"]." username taken";
        }
    }
}*/
$conn->close();

?>
</body>
</html>