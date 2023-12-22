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
    <title>Admin Panel-Contact Form </title>  
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
        <h3><u>Message From Customers</u></h3><br><br>

        
        <table  border=1px cellpadding="9px" cellspacing="2">
      
    
      <tr>
        <th >Contact Number</th>
        <th >Full Name</th>
        <th>Email</th>                  
        <th >Subject</th>
        <th >Message</th>
        <th colspan="2">Action</th>

      </tr>
  
    
      <?php

        $sql = "SELECT * FROM `contact`";
        $res = mysqli_query($con, $sql);
        $result =mysqli_num_rows($res);
        if($result){
          
            
            while( $row = mysqli_fetch_array($res)){
              ?>
              <tr>
                <td><?php echo $row['contact_no'];?></td>
                <td><?php echo $row['full_name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['subject'];?></td>
                <td><?php echo $row['message'];?></td>
                <td><a onclick="return confirm('Are you sure, you want to delete?')" href="contactdelete.php?contact_no=<?php echo $row['contact_no'];?>"><i class='bx bxs-message-alt-x'></i>Delete</a></td>
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
