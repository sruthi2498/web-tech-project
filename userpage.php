<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styleTheme.css">

<script>
function choice(){
 // alert("in choice");
  var select1=document.getElementById("by1");
  var select2=document.getElementById("by2");
  if(select2.checked){
    var add=document.createElement("button");
    var divc=document.getElementById('choose');

    var add2=document.createElement("p");
    add2.innerHTML="Click to submit:";
    add.innerHTML='submit';
    divc.appendChild(add2);
    divc.appendChild(add);
  }
  if(select1.checked){
    alert("display all books");
    var add=document.createElement("button");
    var add2=document.createElement("p");
    add2.innerHTML="Click to submit:";
    var divc=document.getElementById('choose2');
    add.innerHTML='submit';
     divc.appendChild(add2);
    divc.appendChild(add);

  }
  }

</script>
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
    echo "<div class='left' style='text-align:center'>"."<br>
        <p style='font-size:20px'>READ NOW<br>Choose by: 
       <form action='all.php' method='post'>
        <input type='radio' id='by1' name='all' value='all'/>Browse all<br>
        <input type='radio' id='by2' name='gen' value='genre'/>Genre<br>
        <input type='button' onclick='choice();' value='choose'>
        </p><div id='choose2'></div></form>
        <p style='font-size:20px'>select genre:</p> 
        <form action='read.php' method='post'>
     <select id='genre' name='genre'>
      <option value='Fiction'>Fiction</option>
      <option value='Nonfiction'>Nonfiction</option>
      <option value='Romance'>Romance</option>
      <option value='Comedy'>Comedy</option>
      </select>".
      "<div id='choose'></div></form></div>";
    echo "<div class='right' align='center' style='text-align:center'>"."WELCOME $n<br></div>".
        "<div class='button'><a href='alter1.php' style='color:white'>"."SETTINGS"."</a>"."</div>".
    "<div class='button' style='top:60px'><a href='login.html' style='color:white'>"."LOGOUT"."</a>"."</div>".
    "<div class='button' style='top:110px'><a href='home.html' style='color:white'>"."HOME"."</a>"."</div>";
    
   
?>




</body>
</html>