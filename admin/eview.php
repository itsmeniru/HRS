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
    <title>Admin Panel-EMPLOYEE</title>
    <style>
      div.button{
        margin: left;
      }
    </style> 
    <?php
    require('inc/links.php') 
    ?>
  </head>
  <body>
  <?php require('inc/header.php');?>

  
   <br><br><br>
    <center>
    <button type="button" class="btn btn-dark shadow-none text-center"><a href="employee.php">ADD EMPLOYEE</a></button>

    </center>
   
    <div >
      <center>
        <br>
        <br>
        <br>
        <h3><u>Add New Empolyees Details</u></h3><br><br>



        <table border="1px" cellpadding="10px" cellspacing="3">
          <tr>
            <th>E_Id</th>
            <th>FName</th>
            <th>Add</th>
            <th>Email</th>
           <th>Position</th>
           <th>Salary</th>
            <th colspan="2">Action</th>
         </tr>
         <?php
         $sql ="SELECT * FROM  staffs";
         $res= mysqli_query($con,$sql);
         $result = mysqli_num_rows($res);
         if($result){
      
          while($row = mysqli_fetch_array($res)){
            ?>
           <tr>
             <td><?php echo $row['e_Id'];?></td>
             <td><?php echo $row['full_name'];?></td>
             <td><?php echo $row['address'];?></td>
             <td><?php echo $row['email'];?></td>
             <td><?php echo $row['position'];?></td>
             <td><?php echo $row['salary'];?></td>
             <td><a href="eupdate.php?e_Id=<?php echo $row['e_Id'];?>"><i class='bx bxs-edit'></i>Edit</a></td>
             <td><a onclick="return confirm('Are you sure, you want to delete?')" href="edelete.php?e_Id=<?php echo $row['e_Id'];?>"><i class='bx bxs-message-alt-x'></i>Delete</a></td>
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
