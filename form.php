<h1>Form</h1>
<form action="form.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="Submit">
</form>

<?php 
if (isset($_POST["name"])) { //ถ้ามี POST ส่งเข้ามาที่ชื่อว่า name  isset = ถ้ามีสิ่งนี้ ก็ให้นำสิ่งนี้ไปโชว์
    echo "Name : " . $_POST["name"]; //นำค่า name มาโชว์
}
?>