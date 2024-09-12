<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function testVar($temp1, $temp2)
        {
            return $temp1 < 0 && $temp2 > 100 || $temp2 < 0 && $temp1 > 100;
        }
        echo "ตรวจสอบว่า น้อยกว่า 0  เเละอีกอันมากกว่า 100 หรือไม่";
        var_dump(testVar(120,-1));
        echo "<br>";
        var_dump(testVar(-1,120));
        echo "<br>";
        var_dump(testVar(2,120));
        ?>
</body>
</html>