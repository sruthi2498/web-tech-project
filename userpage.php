
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
function play () {
  var video=document.getElementById('video');
  if(video.paused){
    video.play();
  }
  // body...
}
function pause () {
  var video=document.getElementById('video');
  if(video.play){
    video.pause();
  }
  // body...
}
 

</script>
<style>
  #right{
    left:300px;
    right:300px;
    width:700px;
    position:absolute;
    text-align:center;
    font-size:50px;
    font-family:"comic sans ms";
    color:white;
    background-color:#333;
  }
  canvas.myCanvas{
    left:0px;
    right:0px; 
     position:absolute;
     height:750px;
     width:1500px;
     border:2px solid black;
  }
</style>
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
    echo "<canvas id='myCanvas' class='myCanvas'></canvas>";
    echo "<div class='left' style='text-align:center'>"."<br>
        <p style='font-size:30px'>READ NOW OR WRITE A REVIEW<br>Choose by: 
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
     echo "<div style='position:absolute;left: 200px; right:100px; top: 200px;'>
     <h2 align='center'><input type='button' value='PLAY' onclick='play();'/>
     <input type='button' value='PAUSE' onclick='pause();'/></h2>
      <video id='video' width='1000px' height='500px'>
      <source src='ben.mp4' type='video/mp4'>
      <source src='ben.ogg' type='video/ogg'>
      Video unavailable
      </video></div>";  
    echo "<div id='right' align='center' >"."Welcome to your user-page   $n <br></div>".
        "<div class='button'><a href='alter1.php' style='color:white'>"."SETTINGS"."</a>"."</div>".
    "<div class='button' style='top:60px'><a href='login.html' style='color:white'>"."LOGOUT"."</a>"."</div>".
    "<div class='button' style='top:110px'><a href='home.html' style='color:white'>"."HOME"."</a>"."</div>";

    
    
   
?>


<script>
   var c = document.getElementById("myCanvas");
  //alert(c);
var ctx = c.getContext("2d");
//alert(ctx);
var i=10;
function can () {
  // body...
  i+=2;
    ctx.beginPath();
    ctx.arc(0,0,90-i,0,0.5*Math.PI);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(300,0,90-i,0.5*Math.PI,Math.PI,false);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(300,150,90-i,0.5*Math.PI,Math.PI,true);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(0,150,90-i,0,0.5*Math.PI,true);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(150,0,90-i,0,Math.PI,false);
    ctx.stroke(); 
    
    ctx.beginPath();
    ctx.arc(150,150,90-i,0,Math.PI,true);
    ctx.stroke();
    
    ctx.beginPath();
    ctx.arc(75,75,90-i,0,2*Math.PI,true);
    ctx.stroke(); 
    ctx.beginPath();
    ctx.arc(225,75,90-i,0,2*Math.PI,true);
    ctx.stroke(); 
    setTimeout("can()",300);

}
can();

</script>

</body>
</html>