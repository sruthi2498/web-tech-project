<html><head><link rel="stylesheet" type="text/css" href="styleTheme.css">
<script>
    function pay(){
        var p1=document.getElementById('cod');
        var p2=document.getElementById('card');
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
            var add4=document.createElement("button");
            add4.innerHTML="Submit";
            add4.click=function{
                var p=alert("Sure?");
                if(p==TRUE){
                    var q=alert("Do you want us to remember your details?");
                    
                }
            }
        }
    }
</script>
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
   if($quantity==0){
        echo "<div id='wrong'>Out of stock<br></div>
        <div> <a href='userpage.php'>Go back</a> </div>";
   }
   else{
        echo "<div class='buy'>Read ".$name." by ".$author.
        "<img src='$img' height='175px' width='135px' align='right'>
        <br><p style='align:left;font-size:20px'>    
                   A small description-<br><p> ".$descr."</p></p></div>";
        echo "<div class='buy' style='top:300px;text-align:center;border:0px;background-color:#3333cc;font-size:20px'>Payment option:
        <form>
        <input type='radio' value='cod' name='cod' id='cod'>Cash on Delivery<br>
        <input type='radio' value='card' name='card' id='card'>Credit Card<br>
        <input type='button' value='payment option' onclick='pay();'/><br><br><br>
        Delivery to:<br>
        <input type='text' id='name'/><br>
        address:<br>
        <input type='text' id='add'/><br>
        <div id='cardno'></div>
        </form>

        </div>";
   }

    
   

    ?></body>
</html>