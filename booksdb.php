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
    $sql1 = "CREATE TABLE book(
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
    
    $a1="050";
    $b1="The Diary of a Nobody";
    $c1="George Grossmith and Weeden Grossmith";
    $d1="comedy";
    $e1=" It was originally written for Punch. It’s also pretty wonderful social history.";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";  

    $a2="051";
    $b2="Three Men in a Boat";
    $c2="Jerome K Jerome";
    $d2="comedy";
    $e2="a work of comic delight,";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a2','$b2','$c2','$d2','$e2')";  
    
    $a3="052";
    $b3="Cold Comfort Farm";
    $c3="Stella Gibbons";
    $d3="comedy";
    $e3=" a satire that seems to have lasted better than its targets.";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";  

    $a7="053";
    $b7="Good Omens: The Nice and Accurate Prophecies of Agnes Nutter, Witch ";
    $c7="John Kennedy Toole";
    $d7="comedy";
    $e7=" The book is a comedy about the birth of the son of Satan.";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";  
    
    $a8="054";
    $b8="A Confederacy of Dunces";
    $c8=" Terry Pratchett and Neil Gaiman";
    $d8="comedy";
    $e8="Its central character,has various adventures with colorful French Quarter characters.";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";
    
    $a4="060";
    $b4="The Exorcist";
    $c4="William Peter Blatty";
    $d4="horror";
    $e4 = "Inspired by real events, Blatty’s story of demonic possession and exorcism cuts right to the quick. ";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";  

    $a5="061";
    $b5="Dracula";
    $c5="Bram Stoker";
    $d5="horror";
    $e5="The finest example of Victorian gothic horror. ";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";  

    $a6="062";
    $b6="The Shining";
    $c6=" Stephen King";
    $d6="horror";
    $e6=" centers on the life of Jack Torrance, an aspiring writer and recovering alcoholic.";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";  
    
    $a9="063";
    $b9="Frankenstein";
    $c9="Mary Shelley";
    $d9="horror";
    $e9="a young scientist who creates a grotesque but sapient creature in an unorthodox scientific experiment.";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";
    
    $a0="064";
    $b0="Strange Case of Dr Jekyll and Mr Hyde";
    $c0="Robert Louis Stevenson";
    $d0="horror";
    $e0="It is about a London lawyer who investigates strange occurrences between his old friend, Dr. Henry Jekyll and the evil Edward Hyde.";
    $sql1="INSERT INTO booksdb(id,name,author,genre,descr)VALUES('$a1','$b1','$c1','$d1','$e1')";

    if (mysqli_query($conn, $sql1)) {
    echo "New record created successfully<br>";
    } 
    else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn). "<br>" ;
    }
    
    $sql = "SELECT id,name,author,genre,descr FROM booksdb";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"]." | ".$row["name"]." | ".$row["author"]." | ".$row["genre"]." | ".$row["descr"]."<br>";
       // echo $row["descr"]."<br>";
    }
} 
else {
    echo "0 results";
}


?>
</body>
</html>
