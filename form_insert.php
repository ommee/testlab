<h4>Insert<small><a href="table.php"> Back </a></small></h4>

<form action="insert.php" method="post">

    <label for="id">รหัสภาพยนต์</label>
    <input type="text" name="id" id="id">
    <br><br>
    <label for="mname">ชื่อภาพยนต์</label>
    <input type="text" name="mname" id="mname">
    <br><br>
    <label for="tdate">เวลาที่เริ่มฉาย</label>
    <input type="datetime-local" name="tdate" id="tdate">
    <br><br>
    
    <button type="submit">ยืนยัน</button>
    <button type="reset">ลบข้อมูล</button>

</form>
