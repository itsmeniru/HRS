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
    <title>Admin Panel-SERVICES</title> 
     <style>
     *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    
}


 .content .row{
    min-height: 30vh;
    width: 30%;
    flex: 5;
    background: white;
    margin: 10 25px 25px 25px;
    box-shadow: 0 2px 2px 0 rgba(0 , 0 ,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: block;
    flex-direction: column;
}


     </style>
    <?php require('inc/links.php') ?>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php');?>
  
      <div class="content">
        
        <center>
        
        <h3><u>Service Tpyes</u> </h3><br>
      
       <form action="" method="post">
        <div class="row"><br>
                
        <label for="e_id">Employee Id:</label>   
        <input type="number" required  name="e_id" placeholder="Your Employee Id..">  <br><br>        
        <label for="services">Services :</label>   
        <select name="services" required placeholder="Your Services...">                 
          <option value="car">Car Rental</option>
          <option value="catering">Catering</option>
          <option value="courier">Courier</option>
          <option value="Loundry">Loundry </option>
          <option value="Ironing">Ironing</option>
          <option value="House">Housekeeping</option>
          <option value="room">Room Service</option>
          </select><br><br>
                     
          <label for="assignto">Assign To:</label>   
        <input type="text" required  name="assignto" placeholder="Your Name..">  <br><br>        
         <input type="submit" class="btn btn-dark shadow-none text-center" name="save_btn" value="SAVE"></input>  <br><br> <br> 
     </div>

   </form>
   </center>

        </div>
        <?php
      if (isset($_POST['save_btn'])){
        $e_id = $_POST['e_id'];
        $services =$_POST['services'];
        $assignto =$_POST['assignto'];
        

        $sql = "INSERT INTO services (
           e_id,services,assignto) VALUES('$e_id',
           '$services','$assignto')";
        $res= mysqli_query($con,$sql);
        if($res){
          ?>
          <script type="text/javascript">
            alert ("Data save successfully!!");
            window.open("http://localhost/HRS/admin/sview.php","_self");
          </script>
          <?php
        }
        else{
          ?>
          <script type="text/javascript">
            alert ("Please try again!!");
          </script>
          <?php
        
        }
      }
     ?>


   
   
   
       
   </body>
 </html>
