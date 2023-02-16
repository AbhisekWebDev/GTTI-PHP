<html>
<body>
<form method = "POST" action = "prime.php">
Enter a number to check if it is prime : <input type = "text" name = "v1">
<br>
<input type = "button" value = "Submit">
</form>
<?php
$v1 = $_POST['v1'];
for($i=2 ; $i<=$v1-1 ; $i++)
{
if($v1 % $i == 0)
{
echo $v1 . "is not prime";
break;
}
}
if($v1 == $i)
{
echo $v1 . "is prime";
}
?>
</body>
</html>
