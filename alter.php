<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="styleTheme.css">
     <style>
          div{
               background-color:#333;
              font-family: "Andalus", Times, serif;
              width:auto;
              text-align:center;
              color:white;
          }
     </style>
</head>
<body style = 'font-family: "Andalus", Times, serif;font-size:20;'>
<div>
    <br><br>

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
    echo "<h1>CHANGE IMPLEMENTED!</h1><br>";
    } 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>" ;
    }
 /*   $sql = "SELECT username, password, email FROM userinfo";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "usr: " . $row["username"]. " - pswd: " . $row["password"]. "email- " . $row["email"]. "<br>";
    }
} 
else {
    echo "0 results";
}*/

    
    
?>
</div>
<!--</form> -->
<div class="home"><a href="home.html">HOME</a></div>
     <div class="logout"><a href="login.html">LOGOUT</a></div>
     <div class="userpage"><a href="userpage.php">YOUR PAGE</a></div>
</body>
</html>