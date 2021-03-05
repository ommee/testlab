<?php session_start();?>
<?php include('connect.php'); ?>

<style type="text/css">
#btn{
width:100%;
}
</style>
<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#D6EAF8">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>

      <?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบภาพยนต์</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
        
       
        
</body>
</html>
        <div class="header">
        <h3>Login</h3>
        </div>


        <form action="table.php">
                <div class="input-group">
                <label for="mv_cname">Username</label>
                <input type="text" name="mv_cname" id="mv_cname">
                </div>

                <div class="input-group">      
                <label for="mv_pin">Password</label>
                <input type="text" name="mv_pin" id="mv_pin">
                </div>


                <div class="form-group">
                <div class="col-sm-12">
                <button type="submit"  name="login" class="btn btn-success">
                <span class="glyphicon glyphicon-log-in"> </span>
                 Login </button>
                 </div>
                 </div>
                 <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
                
        </form>
       
        
</body>
</html>
