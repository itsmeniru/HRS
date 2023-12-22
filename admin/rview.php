<?php
  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin();
  
?>

<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Room</title>
   
    <?php require('inc/links.php') ?>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php');?>
    <br><br><br>
    <center>
    <button type="button" class="btn btn-dark shadow-none text-center"><a href="rooms.php">ROOM TYPES</a></button>

    </center>
   
    <div class="content">
         <center>
            
            
            <br>
            <h3><u>Room Types</u></h3><br>
            <table border="1px" cellpadding="10px" cellspacing="3">
            <tr>
              <th>Room Number</th>
              <th>Name</th>
              <th>Short Code</th>
              <th colspan="2">Action</th>
            </tr>
            <?php
            $sql ="SELECT * FROM rooms";
            $res= mysqli_query($con,$sql);
            $result=mysqli_num_rows($res);
            if($result){
      
              while($row = mysqli_fetch_array($res)){
                ?>
               <tr>
                 <td><?php echo $row['room_no'];?></td>
                 <td><?php echo $row['r_type'];?></td>
                 <td><?php echo $row['s_code'];?></td>
                
                 <td><a href="rupdate.php?room_no=<?php echo $row['room_no'];?>"><i class='bx bxs-edit'></i>Edit</a></td>
                 <td><a onclick="return confirm('Are you sure, you want to delete?')" href="rdelete.php?room_no=<?php echo $row['room_no'];?>"><i class='bx bxs-message-alt-x'></i>Delete</a></td>
                </tr>
               <?php
              }
              }
              else{
               ?>
               <tr>
                 <td>
                    no record found
                  </td>
                </tr>
                <?php
              }
              ?>
           </table>
            <br><br>
    
          </center>
    </div>
  </body>
</html>