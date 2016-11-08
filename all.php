<html><head><link rel="stylesheet" type="text/css" href="styleTheme.css">
<head>
<body style='background-color:#333;
    font-family: "Andalus", Times, serif;
    font-size: 200%;
    position: absolute;
    left: 0;    
    right: 0;
    width:auto;
    text-align:center;
    color:white;'>
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
    extract($_POST);
    $genre=$_POST["genre"];
    $gen=$_POST["gen"];
    $all=$_POST["all"];
    $sql="SELECT id,name,author,genre,descr,link,img,quantity,review,price  from Books";
     $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        
        while($row = mysqli_fetch_assoc($result)) {
            $img=$row["img"];
            $_SESSION["name"]=$row["name"];
             $_SESSION["author"]=$row["author"];
             $_SESSION["genre"]=$row["genre"];
             $_SESSION["descr"]=$row["descr"];
             $_SESSION["img"]=$row["img"];
             $_SESSION["quantity"]=$row["quantity"];
             $_SESSION["review"]=$row["review"];
             $_SESSION["price"]=$row["price"];
            echo "<div class='book'>Read ".$row["name"]." by ".$row["author"]."<img src='$img' height='175px' width='135px' align='right'>".
             "<br>"."<p style='align:left;font-size:20px'>      A small description-<br><p> ".$row["descr"]."
             <br>
             <div align='center' style='border: 2px solid #00ffcc; background-color:white; color:black; height: 50px; width: 100px;
             position:absolute;
             right: 10px;'><h3> ".$row["price"]."</h3></div>
             <div align='center' style='border: 2px solid #00ffcc; background-color:white; color:black;
             position:absolute;
             right: 150px;'>Reviews by other users: ".$row["review"]."</div></p></p>";
             echo "<div class='break'><br><br>
             <div align='center' style='right:0px;background-color:white;color:black;text-align:center;width:200px;height:50px'><a href='buy.php'>Buy now</a>
             <div align='center' class='comment'>Read this book? Add your review<a href='reviewbook.php'> here</a> to help other users</div>
             </div>
             <hr style='color:white;height:5px'></div>";
        }
     } 
            else {
                echo "0 results";
            }
    
   
    ?></body>
</html>