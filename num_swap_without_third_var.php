<html>
<body>
<form method="POST" action="num_swap_without_third_var.php">
Enter a : <input type="text" name="a">
<br>
Enter b : <input type="text" name="b">
<br>
<input type="Submit" vvalue="Submit">
</form>
<?php
$v1=$_POST['a'];
$v2=$_POST['b'];
echo "Before swapping " . "<br>";
echo "Number a =". $v1 ." and b = ". $v2;
echo "<br>";
$v1 = $v1 + $v2;
$v2 = $v1 - $v2;
$v1 = $v1 - $v2;
echo "<br>";
echo "After Swapping " . "<br>";
echo "Number a =". $v1 ." and b = ". $v2;
?>
</body>
</html>