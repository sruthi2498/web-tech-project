<html>
<head>
<link rel="stylesheet" type="text/css" href="styleTheme2.css">
<br><br><br>
<div class="heading">REVIEWS</div>
</head>
<body style="background-color:black">
<form method="post" action="reviews.php" style="position:relative; top:100px;">
<input type="text" id="comment" placeholder="Type here" onfocus="f(this)" onblur="b(this)" style="width:700px;height:100px">
<br><br>
<input type="button" value= "Add Review" onclick="add()">
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
$file=fopen("review.txt","a");





?>

</body>
</html>