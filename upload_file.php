<!-- ฟอร์มสำหรับอัปโหลดไฟล์ -->
<form action="upload_file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" require>
    <!-- เลือกไฟล์ที่จะอัปโหลด -->
    <input type="submit" value="Upload">
    <!-- ปุ่มส่งข้อมูลสำหรับอัปโหลด -->
</form>

<?php
if (isset($_FILES["file"])) { // ตรวจสอบว่ามีไฟล์ถูกส่งมาหรือไม่
    $file = $_FILES["file"]; // เก็บข้อมูลไฟล์ในตัวแปร $file
    $file_name = $file["name"]; // ชื่อไฟล์
    $file_tmp = $file["tmp_name"]; // ไฟล์ชั่วคราวที่อัปโหลด
    $file_destination = "uploads/" . $file_name; // กำหนดที่เก็บไฟล์

    move_uploaded_file($file_tmp, $file_destination); // ย้ายไฟล์จากตำแหน่งชั่วคราวไปยังตำแหน่งที่เก็บ



    echo "File uploaded successfully"; // แสดงข้อความเมื่ออัปโหลดสำเร็จ

}
?>