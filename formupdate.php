
<?php
    require_once("connect.php");
    date_default_timezone_set("Asia/Bangkok");
    $sql = "SELECT * FROM movie WHERE id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $datetime = date("Y-m-d", strtotime($row['tdate'])) . "T" . date("H:i", strtotime($row['tdate']));
 ?>
<style type="text/css">
#btn{
width:100%;
}
.simply{
 font:14px Trebuchet MS, Tahoma;
}
.simply th{
 font:normal 16px Trebuchet MS, Tahoma;
 color: #222;
 
</style>

<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>

      <div class="header">
        <h3>แก้ไขข้อมูลภาพยนต์</h3>

<form action="update.php" method="post">

<div class="input-group">
<label for="mv_name">ชื่อภาพยนต์</label>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="text" name="mname" id="mname" value="<?php echo $row['mname']; ?>">
</div>

<div class="input-group">
<label for="tdate">เวลาที่เริ่มฉาย</label>
<input type="datetime-local" name="tdate" id="tdate" value="<?php echo $datetime; ?>">
</div>
<br><br>
<button type="submit">ยืนยัน</button>
<span class="glyphicon glyphicon-log-in"> </span>
<br><br>
<small> <a href="table.php">Back</a></small>

</form>



