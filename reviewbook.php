<html><head><link rel="stylesheet" type="text/css" href="styleTheme.css">
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
    $n=$_SESSION["username"];
    $p=$_SESSION["pswd"];

   $name=$_SESSION["name"];
    $author=$_SESSION["author"];
   $genre= $_SESSION["genre"];
    $descr=$_SESSION["descr"];
    $img=$_SESSION["img"];
   $quantity= $_SESSION["quantity"];

    $sql="SELECT id,name,author,genre,descr,link,img,quantity  from Books";
     $result = mysqli_query($conn, $sql);
    echo "<div class='book' style='background-color: #333; left:150px; right:200px;font-size:40px'>

    Add a review on <br>".$name." by ".$author."<img src='$img' height='175px' width='135px' align='right'>";


    ?>
    <br>
    <br>
    <div style='position:absolute; top:300px;background-color: #333; left:100px; right:100px'>
    <form method ="post" action="reviewbook2.php">
        <input type="text" name="review" id="1"/>
        <input type="submit" value="write review">
    </form>
</div>
</div>
     <div class="home"><a href="home.html">HOME</a></div>
     <div class="logout"><a href="login.html">LOGOUT</a></div>
     <div class="userpage"><a href="userpage.php">YOUR PAGE</a></div>


</body>
</html>