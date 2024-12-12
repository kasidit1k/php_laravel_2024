<?php 
    $name = "Doctype";
?>


<h3>String Functions</h3>

<div>Count : <?php echo strlen($name); ?></div> <!-- strlen = นับจำนวน ว่ามีกี่ตัว --> 
<div>Index Of : <?php echo strpos($name, "c"); ?></div> <!-- strpos = ดูตำแหน่งตัวอักษร --> 
<div>Upper Case : <?php echo strtoupper($name); ?></div> <!-- strtoupper แปลงเป็นตัวอักษรพิมพ์ใหญ่ -->
<div>Lower Case : <?php echo strtolower($name); ?></div> <!-- strtolower ตัวอักษรพิมพ์เล็ก -->
<div>Replace : <?php echo str_replace("Doctype", "Aline" ,$name) ?></div> <!-- การแทนที่ชื่อ -->
<div>Substring : <?php echo substr($name, 0, 3); ?></div> <!-- ตัดข้อความออกตั้งแต่ 0-3  -->
