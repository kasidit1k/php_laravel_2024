<h1>Date and Time</h1>
<!-- แสดงวันที่และเวลาในรูปแบบ "ปี-เดือน-วัน ชั่วโมง:นาที:วินาที" (ตัวอย่าง: 24-12-12 08:45:30) -->
<div>Date : <?php echo date("y-m-d h:i:s"); ?></div>

<!-- แสดงค่าของ timestamp (จำนวนวินาทีตั้งแต่วันที่ 1 มกราคม 1970 เวลา 00:00:00 UTC) -->
<div>Time : <?php echo time(); ?></div>


<!-- สร้าง timestamp สำหรับวันที่ 1 มกราคม 2024 เวลา 00:00:00 โดยใช้ mktime() -->
<div>Timestamp : <?php echo mktime(0, 0, 0, 1, 1, 2024); ?></div>

<!-- แสดงวันที่ที่สร้างจาก timestamp ของวันที่ 15 พฤษภาคม 2024 โดยใช้ mktime() -->
<div>Date : <?php echo date("Y-m-d", mktime(0, 0, 0, 5, 15, 2024)); ?> </div>

<!-- แสดงจำนวนวันในเดือนปัจจุบัน (ใช้ฟังก์ชัน date() กับตัวเลือก "t") -->
<div>Total Days In This Month : <?php echo date("t"); ?></div>

<!-- แสดงหมายเลขสัปดาห์ของปี (ใช้ฟังก์ชัน date() กับตัวเลือก "W") -->
<div>Week Number : <?php echo date("W") ?> </div>