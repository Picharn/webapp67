<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function test($s) {
            $count = 0;
            $len = strlen($s);
        
            for ($i = 0; $i < $len - 1; $i++) {
                if (substr($s, $i, 2) === 'aa') {
                    $count++;
                    $i++;
                }
            }
        
            return $count;
        }
        
        echo test("bbaaccaag") . "\n";
        echo "<br>";
        echo test("jjkiaaasew") . "\n";
        echo "<br>";
        echo test("JSaaakoiaa") . "\n";
    ?>
</body>
</html>