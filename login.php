<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color:blue;
            color:black;
            font-size:30;
            font-family:courier new;
        }
    </style>
</head>
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
    $_SESSION["username"]=$_POST["username"];
    $_SESSION["pswd"]=$_POST["pswd"];
    //echo $_SESSION["username"]." ".$_SESSION["pswd"];
    $n=$_SESSION["username"];
    $p=$_SESSION["pswd"];

    $sql = "SELECT username,password FROM userinfo";
    $result = mysqli_query($conn, $sql);  
    if (mysqli_num_rows($result) > 1) {
        while($row = mysqli_fetch_assoc($result)) {
            //echo "usr: " . $row["username"]. " - pswd: " . $row["password"]. "email- " . $row["email"]. "<br>";
            if($n==$row["username"]){
                if($p==$row["password"]){
                    echo "<h3 style = 'color:green'><b>"."Correct !"."</b></h3>";
                    $i=1;

                }
                else{
                    echo "<h3 style = 'color:red'><b>"."Incorrect password !"."</b></h3>";
                    $i=0;
                }
            }
        }
    }
    if($i==0){
        echo "<br><a href='login.html'>Retry...</a>";
       
    }
    else{
        echo "<br/>Login successful !!! <br><a href='yourpage.php'>Your page-</a>";
    }

    $conn->close();
?>


</body>
</html>
