<?php
    $price = $_POST['price'];
    $number = $_POST['number'];
    $sum = $price * $number;
    $vat = $sum * 0.07;
    $total = $sum + $vat;

    echo "ราคาสินค้าต่อชิ้น $price บาท";
    echo "<br>";
    echo "จำนวนของที่ซื้อ  $number บาท";
    echo "<br>";
    echo "ราคารวม $sum บาท";
    echo "<br>";
    echo "ภาษีมุูลค่าเพิ่ม $vat บาท";
    echo "<br>";
    echo "ราคาสุทธิ $total บาท";
    
?>
