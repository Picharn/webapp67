<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function testStr($str)
    {
        $s = substr($str, strlen($str)-1);
        return $s.$str.$s;
    }
    echo testStr("Red")."\n";
    echo testStr("Green")."\n";
    echo testStr("1")."\n";
    ?>
</body>
</html>