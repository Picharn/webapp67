<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="styleformenu.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if(!isset($_GET['sid'])){
            header("refresh: 0; url=mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM studentbio WHERE sid='$_GET[sid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="editsuccess.php">
        <p>
            <label>รหัสนักศึกษา</label>
            <br>
            <input type="text" name="sid" id="sid" value="<?=$row['sid'];?>">
            <br>
        </p>
        <p>
            <label>ชื่อ</label>
            <br>
            <input type="text" name="sname" id="sname" value="<?=$row['sname'];?>" />
            <br>
        </p>
        <p>
            <label>นามสกุล</label>
            <br>
            <input type="text" name="slastname" id="slastname" value="<?=$row['slastname'];?>" />
            <br>
        </p>
        <p>
            <label>ที่อยู่</label>
            <br>
            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />
            <br>
        </p>
        <p>
            <label>เบอร์โทร</label>
            <br>
            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />
            <br>
        </p>
        <input type="submit" value="บันทึก">
        <a href='mainmenu.php'><button> Home</button></a>
    </form>


</body>
</html>