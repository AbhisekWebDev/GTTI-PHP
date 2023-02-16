<html>
<body>
<form method="POST" action="switch.php">
Enter a No. from 1 to 3 : <input type="text" name="a">
<br>
<input type="Submit" value="Submit">
</form>
<?php
$a = $_POST['a'];
switch($a)
	{
            case 1:
                echo "num is equal to 1";
            break;
            case 2:
                echo "num is equal to 2";
            break;
            case 3:
                echo "num is equal to 3";
            break;
            default:
                echo "num is not equal to 1, 2, 3";
	}
?>
</body>
</html>