<?php
     require_once("connect.php");
?> 

<?php
$sql = "UPDATE movie SET 
        mname = '{$_POST['mname']}', tdate = '{$_POST['tdate']}' WHERE id = '{$_POST['id']}'";


if ($conn->query($sql) === TRUE) {
    echo "<p>Update Movie</p>";
    echo '<a href="table.php">Update Movie</a>';
    }else {
      echo "Not Update";
      echo mysqli_error($conn);
}

?>