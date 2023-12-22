<?php

  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin(); 
$b_id =$_GET['b_id'];
$sql = "DELETE  FROM bookings WHERE b_id = '$b_id'";
$res = mysqli_query($con,$sql);
if($res){
  ?>
  <script type="text/javascript">
     alert("Data deleted successfully!!");
          window.open("http://localhost/HRS/admin/bookingdetails.php","_self");
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