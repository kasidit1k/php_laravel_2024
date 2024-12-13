<h1>Read JSON</h1>

<?php 
    // อ่านไฟล์ JSON และเก็บข้อมูลในตัวแปร $json
    $json = file_get_contents('product.json');
    
    // แปลงข้อมูล JSON เป็น Array แบบ Associative และเก็บในตัวแปร $data
    $data = json_decode($json, true);
?>


<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>PRICE</td>
    </tr>

    <!-- วนลูปข้อมูลใน $data เพื่อแสดงสินค้าแต่ละรายการ -->
    <?php foreach ($data as $product) { ?>
        <tr>
            <!-- แสดงข้อมูล ID ของสินค้า -->
            <td><?php echo $product['id']; ?></td>
            
            <!-- แสดงข้อมูล NAME ของสินค้า -->
            <td><?php echo $product['name']; ?></td>
            
            <!-- แสดงข้อมูล PRICE ของสินค้า -->
            <td><?php echo $product['price']; ?></td>
        </tr>
    <?php } ?>
</table>


<h1>Read JSON With Type</h1>
<?php  
    $json = file_get_contents('product_type.json');
    $data = json_decode($json, true);
?>

<table border="1">
    <?php foreach ($data['productType'] as $type) { ?>
        <tr>
            <td><?php echo $type['name']; ?></td>
            <td>
                <table border="1">
                    <?php foreach ($type['products'] as $product) { ?>
                        <tr>
                            <td><?php echo $product['name']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
    <?php } ?>
</table>