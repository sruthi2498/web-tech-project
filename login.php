<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="styleTheme.css">

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
   // $_SESSION["email"]=$_POST["email"];
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
                  //  echo "correct password";
                    $i=1;

                }
                else{
                  //  echo "incorrect password";
                    $i=0;
                }
            }
            else{
                $i=0;
            }
        }
    }
    if($i==0){
        echo "<div id='wrong' style='top:100px'>"."<br>"."<a href='login.html'>"."Retry"."</a>"."</div>";
       
    }
    else{
        echo "<div id='correct' style='top:100px'>"."<br/>"."Login successful"."<br>"."<a href='userpage.php'>"."Your page-"."</a>"."</div>";
    }

    //$conn->close();
?>


</body>
</html>