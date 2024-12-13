<h1>List File</h1>


<?php 
    
    $array = scandir('.'); // หรือสแกน dir(directory) ('.') อ่าน file ทั้งหมด

?>

<ul>
    <?php
    // เริ่มต้นการวนลูปด้วยคำสั่ง foreach
    // foreach จะวนซ้ำตามจำนวนค่าที่อยู่ใน $array
    // ในแต่ละรอบของลูป ค่าแต่ละตัวใน $array จะถูกเก็บไว้ในตัวแปร $item
    foreach($array as $item){
        // ใช้คำสั่ง echo เพื่อแสดงผลข้อมูล
        // ข้อมูลจะถูกสร้างในรูปแบบของ HTML <li>...</li>
        // <li>...</li> เป็นแท็กของ HTML ที่ใช้แสดงรายการ (list item) ภายใน <ul>
        // $item คือค่าปัจจุบันในลูป เช่น หาก $array มีค่า ["Apple", "Banana"], $item จะเป็น "Apple" และ "Banana" ตามลำดับ
        echo "<li>$item</li>";
        // ผลลัพธ์ของ echo ในแต่ละรอบจะเป็น:
        // รอบแรก: <li>Apple</li>
        // รอบสอง: <li>Banana</li>
    }
    // สิ้นสุดการวนลูป foreach
    ?>
</ul>
