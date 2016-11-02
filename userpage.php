<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styleTheme.css">


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
    $n=$_SESSION["username"];
    $p=$_SESSION["pswd"];

    echo "<div class='left' style='text-align:center'>"."recommended:<br>
        <p style='font-size:20px'>Choose by: 
       <form action='read.php' method='post'>
        <input type='radio' id='by1' name='all' value='all'/>Browse all<br>
        <input type='radio' id='by2' name='genre' value='genre'/>Genre<br>
        </p>
        <p style='font-size:20px'>select genre:</p> 
     <select id='genre' name='genre'>
      <option value='Fiction'>Fiction</option>
      <option value='Nonfiction'>Nonfiction</option>
      <option value='Romance'>Romance</option>
      <option value='Comedy'>Comedy</option>
      </select>".
      "<input type='submit' value='choose'/></form></div>";
    echo "<div class='right'>"."WELCOME $n<br>"."<a href='alter1.php' style='color:white; font-size:20px'>"."SETTINGS"."</a>"."</div>";

   
?>




</body>
</html>