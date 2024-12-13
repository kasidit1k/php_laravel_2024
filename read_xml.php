<?php

// อ่านข้อมูล XML จากไฟล์ 'product.xml' และเก็บไว้ในตัวแปร $xml
$xml = simplexml_load_file('product.xml');

?>

<h1>Product List</h1>

<!-- สร้างตารางเพื่อแสดงข้อมูลสินค้า -->
<table border="1">
    <tr>
        <th>Name</th> <!-- คอลัมน์สำหรับชื่อสินค้า -->
        <th>Price</th> <!-- คอลัมน์สำหรับราคาสินค้า -->
    </tr>

    <?php
    // ใช้ foreach เพื่อวนลูปผ่านแต่ละรายการสินค้าจาก XML
    /* ตัวอย่าง: <products?><product><name>...</name><price>...</price></product></products> */
    foreach ($xml->products->product as $product) { ?>
        <tr>
            <!-- แสดงชื่อสินค้า -->
            <td><?php echo $product->name; ?></td>
            <!-- แสดงราคาสินค้า -->
            <td><?php echo $product->price; ?></td>
        </tr>
    <?php }
    ?>
</table>