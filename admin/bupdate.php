<?php
  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin();
  $b_id=$_GET['b_id'];
  $sql ="SELECT * FROM bookings WHERE b_id='$b_id'";
  $res= mysqli_query($con,$sql);
  $row=mysqli_fetch_array($res);

?>





<!DOCTYPE html>
 <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Bookings update</title>  
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    
}


.content .row{
    min-height: 60vh;
    width: 30%;
    flex: 5;
    background: white;
    margin: 10 25px 25px 25px;
    box-shadow: 0 2px 2px 0 rgba(0 , 0 ,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: block;
    flex-direction: column;
}


    </style>
    <?php
    require('inc/links.php') 
    ?>
  </head>
  <body class="bg-light">
  <?php require('inc/header.php') ?>
<div class="content">
  <br><br><br>
           <center>
               <h3><u>Booking Details</u></h3>
               <form action="#" method="POST">
               <div class="row"><br>
                     <label for="b_id" >Booking No :</label>   
                      <input value="<?php echo $row ['b_id']?>" type="number" name="b_id" placeholder="Your Booking Id..">  <br><br>
                      <label for="c_name" >Customer Name :</label>   
                      <input type="text" value="<?php echo $row ['c_name']?>" name="c_name" placeholder="Your Full Name..">  <br><br>
                      <label for="r_type">Room Types :</label>   
                      <select name="r_type" value="<?php echo $row ['r_type']?>" placeholder="Your Room Types...">                 
                              <option value="standard">Standard</option>
                              <option value="douple">Douple</option>
                              <option value="single">Single</option>
                              <option value="suite">Suite</option>                         
                        </select><br><br>  
                        <label for="b_status">Booking Staus :</label>   
                        <select name="b_status" value="<?php echo $row ['b_status']?>" placeholder="Your Booking Staus...">                 
                              <option value="standard">Reserved</option>
                              <option value="douple">Free</option>
                              <option value="single">Accupied</option>
                        </select><br><br>      
                      <label for="address">Address :</label>   
                      <input type="text" value="<?php echo $row ['address']?>" name="address" placeholder="Your Address..">  <br><br>
                      <label for="phone">Phone :</label>   
                      <input type="int" value="<?php echo $row ['phone']?>" name="phone" placeholder="Your Phone..">  <br><br>  
                      
                      <label for="booking_in_date">Booking In Date :</label>   
                      <input type="date" value="<?php echo $row ['booking_in_date']?>" name="booking_in_date">  <br><br>        
                      <label for="check_out_date">Check Out Date :</label>   
                      <input type="date" value="<?php echo $row ['check_out_date']?>" name="check_out_date">  <br><br>        
                      
                        
                       <input type="submit" class="btn btn-dark shadow-none text-center" name="update_btn" value="UPDATE"></input><br><br>

                   </div>

             </form>
           </center>
       </div>
       <?php
       if (isset($_POST['update_btn'])){
         $b_id =$_POST['b_id'];
         $c_name =$_POST['c_name'];
         $r_type =$_POST['r_type'];
         $b_status =$_POST['b_status'];
         $address =$_POST['address'];
         $phone =$_POST['phone'];
         $booking_in_date =$_POST['booking_in_date'];
         $check_out_date =$_POST['check_out_date'];

         $update =" UPDATE bookings SET b_id='$b_id'
         ,c_name='$c_name',r_type='$r_type',
         b_status='$b_status',address='$address',phone='$phone',booking_in_date='$booking_in_date',check_out_date='$check_out_date'WHERE b_id='$b_id'";
         
         $res=mysqli_query($con,$update);
         if($res){
           ?>
           <script type="text/javascript">
             alert ("Data updated successfully!!");
             window.open("http://localhost/HRS/admin/bookingdetails.php","_self");
           </script>
           <?php
         }else{
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