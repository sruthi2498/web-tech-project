<html><head><link rel="stylesheet" type="text/css" href="styleTheme.css">
<script>
    function pay(){
        var p1=document.getElementById('cod');
        var p2=document.getElementById('card');
        if(p1.checked){
            var add5=document.createElement("button");
                        var d=document.getElementById('cardno');

            add5.innerHTML="Submit";
            d.appendChild(add5);
        }
        if(p2.checked){
            var d=document.getElementById('cardno');
            var add1=document.createElement('p');
            add1.innerHTML="Enter card details:"

            d.appendChild(add1);
            var add2=document.createElement('p');
            add2.innerHTML="Bank:"
            d.appendChild(add2);
            var add=document.createElement("input");
            add.setAttribute("name","bank");
           // add.type=text;
            d.appendChild(add);
             var add3=document.createElement('p');
            add3.innerHTML="Card no:"
            d.appendChild(add3);
            var add4=document.createElement("input");
            add.setAttribute("name","cardno");
           // add.type=text;
            d.appendChild(add4);
            var add5=document.createElement("button");
            add5.innerHTML="Submit";
            d.appendChild(add5);
            
        }
    }
</script>
</head>
<body>
    <?php
    session_start();
    extract ($_SESSION);
    extract ($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "charu1706";
    $conn = mysqli_connect($servername, $username, $password);
    //$sql = "CREATE DATABASE myDB";
    $sql12=mysqli_select_db($conn,'myDB');
    $n=$_SESSION["username"];
    $p=$_SESSION["pswd"];
    $usrname=$_POST["name"];
    $add=$_POST["add"];
    $bank=$_POST["cardno"];
    $cardno=$_POST["name"];
   $name=$_SESSION["name"];
    $author=$_SESSION["author"];
   $genre= $_SESSION["genre"];
    $descr=$_SESSION["descr"];
    $img=$_SESSION["img"];
     $price=$_SESSION["price"];
   $quantity= $_SESSION["quantity"];
   if($quantity==0){
        echo "<div id='wrong'>Out of stock<br></div>
        <div> <a href='userpage.php'>Go back</a> </div>";
   }
   else{
        
        echo "<div class='buy'>Read ".$name." by ".$author.
        "<img src='$img' height='175px' width='135px' align='right'>
        <br><p style='align:left;font-size:20px'>    
                   A small description-<br><p> ".$descr."</p></p>
                    <div align='center' style='border: 2px solid #00ffcc; background-color:white; color:black; height: 50px; width: 100px;
             position:absolute;
             right: 10px;'><h3> ".$price."</h3></div></div>";
        echo "<div style='background-color:black;border:2px solid black;color:white;position:absolute;top:300px;text-align:center;align:center;left:20px;right:20px;font-family: 'Andalus', Times, serif;'><br><br>
        <h2>
        Will be delivered to $usrname <br>
        Address - $add <br><br><br>
        <p style='color:red'>Within 3 business days</p></h2>
        <br>
         
        </div>";
        $quantity=$quantity-1;
          $sql="UPDATE Books SET quantity='$quantity' WHERE name='$name'";
        $result = mysqli_query($conn, $sql);
         if (mysqli_query($conn, $sql)) {
   /// echo "<h1>CHANGE IMPLEMENTED!</h1><br>";
    } 
    else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>" ;
    }
}

    
   

    ?>


<div class="home"><a href="home.html">HOME</a></div>
     <div class="logout"><a href="login.html">LOGOUT</a></div>
     <div class="userpage"><a href="userpage.php">YOUR PAGE</a></div>
 </body>
</html>