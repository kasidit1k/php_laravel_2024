<h3>Try Catch</h3>

<?php
try {
    // โค้ดที่อาจก่อให้เกิดข้อผิดพลาด
    $x = 10 / 0; // ตัวอย่าง: การหารด้วยศูนย์
} catch (DivisionByZeroError $e) {
    // ดักจับข้อผิดพลาดที่เกิดจากการหารด้วยศูนย์
    echo "เกิดข้อผิดพลาด ไม่สามารถหารด้วยศูนย์ได้";
    // หรือแสดงข้อความ Error ที่แท้จริง
    // echo $e->getMessage();
} catch (TypeError $e) {
    // ดักจับข้อผิดพลาดที่เกิดจากการใช้ตัวแปรที่มีชนิดข้อมูลผิดพลาด
    echo "เกิดข้อผิดพลาด ไม่สามารถหารด้วยตัวอักษรได้";
} catch (Throwable $e) {
    // ดักจับข้อผิดพลาดอื่นๆ ที่ไม่เข้ากับประเภทข้างต้น
    echo "เกิดข้อผิดพลาดอื่นๆ: " . $e->getMessage();
}
?>


<br />
<?php

try {
    $x = 10 / 0;
} catch (Throwable $e) {
    echo 'เกิดข้อผิดพลาด ไม่สามารถดำเนินการได้ ' . $e->getMessage();
}

?>