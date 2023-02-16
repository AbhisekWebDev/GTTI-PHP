<html>
<body>
<form method="POSt" action="abhi.php">
enter 1st no : <input type="text" name="v1">
<br>
enter 2nd no : <input type="text" name="v2">
<br>
<input type="submit" value="submit">
</form>
<?php
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
echo "before swapping " . $v1 . " " . $v2 . "<br>";
$x = $v1;
$v1 = $v2;
$v2 = $x;
echo "after swapping " . $v1 . " " . $v2 . "<br>";
?>
</body>
</html>