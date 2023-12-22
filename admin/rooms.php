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
    <title>Admin Panel-ROOMS</title> 
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
        
        <h3><u>Room Tpyes</u> </h3><br>
      
       <form action="" method="POST">
        <div class="row"><br>
                
        <label for="room_no">Room Number:</label>   
        <input type="number" required  name="room_no" placeholder="Your Room Number..">  <br><br>        
        <label for="r_type">Room Types :</label>   
        <select name="r_type" type="text" placeholder="Your Room Types...">                 
          <option value="standard">Standard</option>
          <option value="douple">Douple</option>
          <option value="single">Single</option>
          <option value="suite">Suite</option>                         
          </select><br><br>
          <label for="s_code">Short Code :</label>   
                    <select name="s_code" type="text" placeholder="Your Short Code...">                 
                      <option value="sc">SC</option>
                      <option value="dl">DL</option>
                      <option value="s">S</option>
                      <option value="s">ST</option>                         
                      </select><br><br>           
        
                      <input type="submit" class="btn btn-dark shadow-none text-center" name="save_btn" value="SAVE"></input>  <br><br> <br> 
     </div>

   </form>
   </center>

        </div>
        <?php
      if (isset($_POST['save_btn'])){
        $room_no = $_POST['room_no'];
        $r_type =$_POST['r_type'];
        $s_code =$_POST['s_code'];
        

        $sql = "INSERT INTO rooms (room_no,r_type,s_code) VALUES('$room_no',
           '$r_type','$s_code')";
        $res= mysqli_query($con,$sql);
        if($res){
          ?>
          <script type="text/javascript">
            alert ("Data save successfully!!");
            window.open("http://localhost/HRS/admin/rview.php","_self");
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
