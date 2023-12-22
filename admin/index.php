<?php 
require('inc/db_config.php');
require('inc/essential.php');
session_start();

if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true))
{
 redirect('dashboard.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatile" content="IE=edge">
      <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
      <title>Admin Login Panel</title>
      <link rel="stylesheet" href="mycss.css">
      <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet"> 
   </head>
   <body>
       <div class="container">
           <div class="login-form">
              <form method="POST">
                  <h2>ADMIN LOGIN</h2>
                  <input name="admin_name"required type="text"  placeholder="Admin Name">  <br><br>          
                 <input name="admin_pass" required type="password" placeholder="Password">  <br><br>       
                  <button  name="login" type="submit" class="btn ">Sign In</button>
              </form>
           </div>
           <div class="image">
             <img src="inc/log.jpg" width="300px">
           </div>
       </div>
     
  


  <?php
   if(isset($_POST['login']))
   { 
       $frm_data = filteration($_POST);
      
       $query = "SELECT * FROM  `admin_cred` WHERE `admin_name`=? AND   `admin_pass`=? ";
       $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
       

      $res= select($query,$values,"ss");

      if($res -> num_rows==1){
       $row = mysqli_fetch_assoc($res);
       $_SESSION['adminLogin'] = true;
       $_SESSION['adminId' ] = $row ['sr_no'];
       redirect('dashboard.php');
    }
      else{
       alert('error','Login failed - Invalid Credentials!');
      }
   }
  ?>




   </body>
</html>