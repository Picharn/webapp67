<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="styleformenu.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show inseting data</title>
</head>
<body>
    <form method="post" action="insertbiosuccess.php">
    <p>
        <label>รหัสนักศึกษา</label>
        <input type="text" name="sid" id="sid">
    </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="sname" id="sname">
        </p>
        <p>
            <label>นามสกุล</label>
            <input type="text" name="slastname" id="slastname">
        </p>
        <p>
            <label>ที่อยู่</label>
            <input type="text" name="address" id="address">
        </p>
        <p>
            <label>เบอร์โทร</label>
            <input type="text" name="telephone" id="telephone">
        </p>
        <input type="submit" value="บันทึก">
        <a href='mainmenu.php'> <button> Home </button></a>
    </form>

</body>
</html>