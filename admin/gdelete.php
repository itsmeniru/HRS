<?php
  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin();

  $image_id=$_GET['image_id'];

  $sql="DELETE FROM gallery WHERE image_id='$image_id'";
  $res= mysqli_query($con,$sql);
  if($res){
      ?>
      <script type="text/javascript">
          alert("Data deleted successfully!!");
          window.open("http://localhost/HRS/admin/gview.php","_self");

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