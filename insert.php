<?php
   require_once("connect.php");
?>

<?php
  $sql = "INSERT INTO movie (id, mname,tdate)
  VALUES ('{$_POST['id']}' ,'{$_POST['mname']}', '{$_POST['tdate']}')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<p>Add Movie</p>";
    echo '<a href="table.php">Add Movie</a>';
    }else {
      echo "Not Add";
      echo mysqli_error($conn);
}


?>