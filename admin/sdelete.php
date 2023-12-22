<?php
  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin();

  $e_id=$_GET['e_id'];

  $sql="DELETE FROM services WHERE e_id='$e_id'";
  $res= mysqli_query($con,$sql);
  if($res){
      ?>
      <script type="text/javascript">
          alert("Data deleted successfully!!");
          window.open("http://localhost/HRS/admin/sview.php","_self");

      </script>
      <?php
  }
  else{
      ?>
  <script type="text/javascript">
      alert("Please try again!!");
  </script>
  <?php
  }
?> 