<!DOCTYPE html>
<html>
<body style = ''>

<?php
    extract ($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "charu1706";
    $conn = mysqli_connect($servername, $username, $password);
    //$sql = "CREATE DATABASE myDB";
    $sql12=mysqli_select_db($conn,'myDB');
    /*if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    //$sql = "CREATE DATABASE myDB";
    /*if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }*/
    /*$sql1 = "CREATE TABLE book(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    author VARCHAR(100) NOT NULL,
    genre VARCHAR(100) NOT NULL,
    descr VARCHAR(150)
    )";

    $a="010";
    $b="Court of Fives";
    $c="Kate Elliott";
    $d="Fantasy";
    $e="Enter the royal city of Saryenia. You will see such wonders here as you never knew existed";

    $sql1="INSERT INTO booksdb
            (id,name,author,genre,descr)
            VALUES('$a','$b','$c','$d','$e')";  
*/
   //$sql1="ALTER TABLE book ADD link VARCHAR(100) NULL";
   /*$sql1= "UPDATE book SET link='https://en.wikipedia.org/wiki/Washington:_A_Life' WHERE id='001'";
     //$sql1="ALTER TABLE book DROP link";
    if (mysqli_query($conn, $sql1)) {
    echo "New record created successfully<br>";
    } 
    else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn). "<br>" ;
    }
*/
    
   // $sql = "SELECT id,name,author,genre,descr,link FROM booksdb";
     $sql = "SELECT id,name,author,genre,descr,link,img,quantity FROM Books";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"]." | ".$row["name"]." | ".
        $row["author"]." | ".$row["genre"]." | ".
        $row["descr"]." | ".$row["link"]." | ".
        $row["img"]." | ".$row["quantity"]."<br>";
       // echo $row["descr"]."<br>";
    }
} 
else {
    echo "0 results";
}



?>
</body>
</html>
