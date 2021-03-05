<?php
    require_once("connect.php");
    

    if(isset($_GET['delete'])) {
        $sql = "DELETE FROM movie WHERE id = '{$_GET['id']}' ";
        if(mysqli_query($conn, $sql)) {
            
        } else {
          echo "Error deleting record: " . mysqli_connect_error($conn);
        }
    }

    $sql = "SELECT * FROM movie";
    if(isset($_GET['search_click'])) {
        $sql = "SELECT * FROM movie WHERE  mname LIKE '%{$_GET['search']}%'";
        echo  "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
    }
?>


<style type="text/css">
#btn{g
width:100%;
}
.simply{
 font:14px Trebuchet MS, Tahoma;
 margin: 100px ;
 width: 1200px;
 border-collapse: collapse;
 text-align: center;
 }
 .simply th{
 font:normal 16px Trebuchet MS, Tahoma;
 color: #222;
 background:#cbeffd;
 padding: 10px 8px;
 border-bottom: 2px solid #ccc;
 }
 .simply td{
 border-bottom: 1px solid #ccc;
 color: #666;
 background: #fff;
 padding: 5px;
 }
 .simply tbody tr:hover td{
 color: #222;
 background: #eee;
 }  
</style>
<a href="form_insert.php">เพิ่มข้อมูล</a>
<form action="table.php" method="get">
    <label for="search">ช่องค้นหา</label>
    <input type="text" name="search" id="search" placeholder="ค้นหา...">
    <button type="submit" name="search_click">ค้นหา</button>
</form>

<table width="700" height="30" border="0" align="center"  class="simply">

  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลาที่เริ่มฉาย</th>
    <th>เครื่องมือ</th>
  </tr>
 

  <?php
  $result = $conn->query($sql); 
 
        while($row = $result->fetch_assoc()){
?>
<tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['mname'];?></td>
    <td><?php echo $row['tdate'];?></td>
    

    <td align="center">
        
        <a href="formupdate.php?id=<?php echo $row['id']; ?>">แก้ไข</a>
        <a href="?delete=1&id=<?php echo $row['id']; ?>">ลบ</a>
    
    </td>
  </tr>
  

<?php
   
  }
$conn->close();

?>
</table>




