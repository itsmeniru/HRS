<?php
  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin();

  $e_Id=$_GET['e_Id'];

  $sql="DELETE FROM staffs WHERE e_Id='$e_Id'";
  $res= mysqli_query($con,$sql);
  if($res){
      ?>
      <script type="text/javascript">
          alert("Data deleted successfully!!");
          window.open("http://localhost/HRS/admin/eview.php","_self");

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