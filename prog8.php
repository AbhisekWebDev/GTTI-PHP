<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="prog8.php" method="post">
        Enter first Value : <input type="text" name="v1"><br>
        Enter second Value : <input type="text" name="v2"><br>
        <input type="submit" Value="submit">
    </form>
    <?php
        $v1=$_POST['v1'];
        $v2=$_POST['v2'];
        if($v1 < $v2)
        echo $v1 . "is smaller";
        else
        echo $v2 . "is smaller";
    ?>
</body>
</html>