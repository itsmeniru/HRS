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
    <title>Admin Pannel - Customer</title>
    <?php require('inc/links.php');?>
    <style>
       *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    
}


 .content .row{
    min-height: 50vh;
    width: 30%;
    flex: 5;
    background: white;
    margin: 10 25px 25px 25px;
    box-shadow: 0 2px 2px 0 rgba(0 , 0 ,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: block;
    flex-direction: column;
}


     </style>

    
    
   </head>
   <body>
   <?php require('inc/header.php');?>

       <div class="content">
           <center><br><br><br>
               <h3><u>Add Customer</u></h3>
               <form action="" method="POST">
                   <div class="row"><br>
                     <label for="room_no" >Room Number :</label>   
                      <input type="number" name="room_no" placeholder="Your Room Number..">  <br><br>
                      <label for="c_name" >Customer Name :</label>   
                      <input type="text" required name="c_name" placeholder="Your Customer Name..">  <br><br>
                      <label for="address">Address :</label>   
                      <input type="text" required name="address" placeholder="Your Address..">  <br><br>    
                      <label for="email">Email :</label>   
                      <input type="text" required name="email" placeholder="Your Email..">  <br><br>
                      <label for="phone">Phone :</label>   
                      <input type="number" required name="phone" placeholder="Your Phone..">  <br><br>  
                       
                      
                        
                       <input type="submit" class="btn btn-dark shadow-none text-center" name="save_btn" value="SAVE"></input><br><br>


                   </div>

             </form>
           </center>
       </div>
       <?php
      if (isset($_POST['save_btn'])){
        $room_no = $_POST['room_no'];
        $c_name =$_POST['c_name'];
        $address =$_POST['address'];
        $email =$_POST['email'];
        $phone =$_POST['phone'];
       

        $sql = "INSERT INTO customers (
           room_no,c_name,address,email,phone ) VALUES('$room_no',
           '$c_name','$address','$email','$phone')";
        $res= mysqli_query($con,$sql);
        if($res){
          ?>
          <script type="text/javascript">
            alert ("Data save successfully!!");
            window.open("http://localhost/HRS/admin/cview.php","_self");
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