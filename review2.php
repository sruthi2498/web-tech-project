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
   extract($_POST);
   $rev=$_POST["review"]."<br>";
   //$sql="INSERT INTO Books (review) VALUES $rev";
   $sql="UPDATE Books SET review='$rev' WHERE name='$name'";
   $result = mysqli_query($conn, $sql);
    
    
   /* if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
    } 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>" ;
    }

    $sql="SELECT id,name,author,genre,descr,link,img,quantity,review  from Books";
     $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"]." | ".$row["name"]." | ".
        $row["author"]." | ".$row["genre"]." | ".
        $row["descr"]." | ".$row["link"]." | ".
        $row["img"]." |review= ".$row["review"]."<br>";
       // echo $row["descr"]."<br>";
    }
} 
else {
    echo "0 results";
}*/
    echo "Review done!<div style='font-size:50px'><a href='userpage.php'>back to your page </a></div>";
?>

    
     


</body>
</html>