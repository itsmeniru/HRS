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
    <title>Admin Panel-Services</title>
   
    <?php require('inc/links.php') ?>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php');?>
    <br><br><br>
    <center>
    <button type="button" class="btn btn-dark shadow-none text-center"><a href="services.php">SERVICE TYPES</a></button>

    </center>
   
    <div class="content">
         <center>
            
            
            <br>
            <h3><u>Service Types</u></h3><br>
            <table border="1px" cellpadding="10px" cellspacing="3">
            <tr>
              <th>Employee Id</th>
              <th>Service Types</th>
              <th>Assign To</th>
              <th colspan="2">Action</th>
            </tr>
            <?php
            $sql ="SELECT * FROM services";
            $res= mysqli_query($con,$sql);
            $result=mysqli_num_rows($res);
            if($result){
      
              while($row = mysqli_fetch_array($res)){
                ?>
               <tr>
                 <td><?php echo $row['e_id'];?></td>
                 <td><?php echo $row['services'];?></td>
                 <td><?php echo $row['assignto'];?></td>
                
                 <td><a href="supdate.php?e_id=<?php echo $row['e_id'];?>"><i class='bx bxs-edit'></i>Edit</a></td>
                 <td><a onclick="return confirm('Are you sure, you want to delete?')" href="sdelete.php?e_id=<?php echo $row['e_id'];?>"><i class='bx bxs-message-alt-x'></i>Delete</a></td>
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