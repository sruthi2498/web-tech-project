<html>
<head>
<link rel="stylesheet" type="text/css" href="styleTheme2.css">
<br><br><br>
<div class="heading">REVIEWS</div>
</head>
<body style="background-color:black">
<form method="post" action="reviews.php" style="position:relative; top:100px;">
<input type="text" name="comment" id="comment" placeholder="Type here" onfocus="f(this)" onblur="b(this)" style="width:700px;height:100px">
<br><br>
<input type="submit" value= "Add Review">
</form>
<script>
function f(x)
{
x.placeholder="";
}
function b(x)
{
x.placeholder="Type here";
}
</script>
<?php
echo "here";
$file=fopen("review.txt","a");
extract($_POST);
$text=$_POST["comment"]."<br><br><br>";
fwrite($file,$text);
fclose($file);
$file=fopen("review.txt","r");
echo "<br><br><br><br><br><br><br>";
echo "<div style='color:white;fontStyle:italic'>";  
$line=fgets($file);
echo "$line";
fclose($file);
echo "</div>";
?>

</body>
</html>