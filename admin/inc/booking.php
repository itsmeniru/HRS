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
    <title>Admin Panel-Bookings Details </title>  
    <?php
    require('inc/links.php'); 
    ?>
  </head>
  <body>
  <?php require('inc/header.php');?>
  
    
      <center>
        <br>
        <br>
        <br>
        <h3><u>Booking Details</u></h3><br><br>

        
        <table  border=1px cellpadding="9px" cellspacing="2">
      
    
      <tr>
        <th>b_id</th>
        <th >Book In Date </th>
        <th >Check Out Date</th>
        <th colspan="2">Action</th>
      </tr>
  
    
      <?php

        $sql = "SELECT * FROM `bookings`";
        $res = mysqli_query($con, $sql);
        $result =mysqli_num_rows($res);
        if($result){
          
            
            while( $row = mysqli_fetch_array($res)){
              ?>
              <tr>
              <td><?php echo $row['b_id'];?></td>
                <td><?php echo $row['booking_in_date'];?></td>
                <td><?php echo $row['check_out_date'];?></td>
                <td><a href="bupdate.php?b_id=<?php echo $row['b_id'];?>"><i class='bx bxs-edit'></i>Edit</a></td>
                <td><a onclick="return confirm('Are you sure, you want to delete?')" href="bdelete.php?b_id=<?php echo $row['b_id'];?>"><i class='bx bxs-message-alt-x'></i>Delete</a></td>
              </tr>
                
              <?php
            }
          }else{
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
   
   
  </body>
 </html>
 <td><?php echo $row['c_name'];?></td>
                <td><?php echo $row['r_type'];?></td>
                <td><?php echo $row['b_status'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['phone'];?></td>

                <th >Customer Name</th>
        <th >Room Type</th>
        <th >Booking Status</th>
        <th>Address</th>                  
        <th >Phone</th>