<?php

  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin(); 
$contact_no =$_GET['contact_no'];
$sql = "DELETE  FROM contact WHERE contact_no = '$contact_no'";
$res = mysqli_query($con,$sql);
if($res){
  ?>
  <script type="text/javascript">
     alert("Data deleted successfully!!");
          window.open("http://localhost/HRS/admin/contact.php","_self");
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