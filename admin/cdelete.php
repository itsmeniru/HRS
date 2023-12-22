<?php

  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin(); 
$room_no =$_GET['room_no'];
$sql = "DELETE  FROM customers WHERE room_no = '$room_no'";
$res = mysqli_query($con,$sql);
if($res){
  ?>
  <script type="text/javascript">
     alert("Data deleted successfully!!");
          window.open("http://localhost/HRS/admin/cview.php","_self");
  </script>
  <?php
}else{
  ?>
  <script type="text/javascript">
      alert("Please try again!!");
  </script>
  <?php
}
?>