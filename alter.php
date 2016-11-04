<!DOCTYPE html>
<html>
<head>
<body>

<?php
     session_start();
    extract ($_SESSION);
    $servername = "localhost";
    $username = "root";
    $password = "charu1706";
    $conn = mysqli_connect($servername, $username, $password);
    //$sql = "CREATE DATABASE myDB";
    $sql12=mysqli_select_db($conn,'myDB');
    $i=1;
    //echo $_SESSION["username"]." ".$_SESSION["pswd"];
    $n=$_SESSION["username"];
    $p=$_SESSION["pswd"];

    $a=$_POST["change"];
    $new=$_POST["new"];
    $i=1;
    if ($a == "1") {  
        $sql = "SELECT username,email FROM userinfo";
        $result = mysqli_query($conn, $sql);  
        if (mysqli_num_rows($result) > 1) {
            while($row = mysqli_fetch_assoc($result)) {
                //echo "usr: " . $row["username"]. " - pswd: " . $row["password"]. "email- " . $row["email"]. "<br>";
                if($a==$row["username"]){
                    echo $row["username"]." username taken <br>";
                    $i=0;
                }
            
            }
        }
        if($i==1){        
        $sql="UPDATE userinfo SET username='$new' WHERE username='$n'";}
        else{
             echo "<a href='alter1.php'>go back to retry</a> <br>";
        }
    }
    if($a=="2"){
        $sql="UPDATE userinfo SET password='$new' WHERE username='$n'";
    }
     if ($a == "3") {          
        $sql="UPDATE userinfo SET email='$new' WHERE username='$n'";
     
    }


    $result = mysqli_query($conn, $sql);

    
    
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
    } 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>" ;
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
    
?>

</form> 
</body>
</html>