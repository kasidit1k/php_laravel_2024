<h1>Random Number</h1>

<?php
// ใช้ฟังก์ชัน rand() เพื่อสร้างเลขสุ่มระหว่าง 1 ถึง 100
echo rand(1, 100);
?>

<hr>

<h1>Random Encrypt Has Code</h1> <!-- การเข้ารหัสแบบสุ่มมีรหัส -->
<?php
// ใช้ฟังก์ชัน uniqid() เพื่อสร้าง ID ที่ไม่ซ้ำกันตามเวลาปัจจุบัน
// แล้วใช้ rand() ผสมเพื่อเพิ่มความสุ่ม จากนั้นเข้ารหัสเป็น md5 เพื่อให้ได้รหัสแฮชแบบสุ่ม
echo md5(uniqid(rand(), true));
?>