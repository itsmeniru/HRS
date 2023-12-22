<?php  require ('connection.php');?>


<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>NIKA Hotel-Home</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="i.css">
    <style>
       body{
           font-family: sans-serif;
           background-image: url(image/wa.jpg);
           background-repeat: no-repeat;
           background-size: cover;
       }
      .container{
          
          width: 380px;
          margin: auto;
          border-radius: 20px;
          background-color: rgba(0,0,0,0.3);
      }
      .header{
          text-align:center;
          padding-top: 0px;
      }
      .header h1{
          color: black;
          font-size: 25px;
          margin-bottom: 40px;
      }
      .main{
          text-align:center;
      }
     
      .main input,select,button{
          width: 300px;
          height: 40px;
          border: none;
          outline: none;
          padding-left: 20px;
          box-sizing: border-box;
          font-size: 15px;
          color: #333;
          margin-bottom: 20px

      }
      .main button{
          padding: 0;
          background-color: #83acf1;
          letter-spacing: 1px;
          font-weight: bold

      }
      .main button:hover{
          box-shadow: 2px 2px 5px #555;
          background-color: #7799d4;
      }
      .main input:hover{
          box-shadow: 2px 2px 5px #555;
          background-color: #ddd;
      }
      .main span{
          position: relative;
      }

    </style>
    
   </head>
   <body>

       <div class="container">
           <div class="header">
               <h1>Booking Form</h1>
           </div>
           <div class="main">
               <form action="" method="POST">
                      <span>
                      <label for="b_id" >Booking No :</label>   
                      <input type="number" name="b_id" placeholder="Your Booking Id..">  <br><br>
                      </span>
                      <span>
                      <label for="c_name" >Customer Name :</label>   
                      <input type="text" required name="c_name" placeholder="Your Full Name..">  <br><br>
                      </span>
                      <span>
                      <label for="r_type">Room Types :</label>   
                      <select name="r_type" placeholder="Your Room Types...">                 
                              <option value="standard">Standard</option>
                              <option value="douple">Douple</option>
                              <option value="single">Single</option>
                              <option value="suite">Suite</option>                         
                        </select><br><br>  
                      </span>
                        <span>
                        <label for="b_status">Booking Status :</label>   
                        <select name="b_status" placeholder="Your Booking Staus...">                 
                              <option value="standard">Reserved</option>
                              <option value="douple">Free</option>
                              <option value="single">Accupied</option>
                        </select><br><br>   
                        </span>
                        <span>
                        <label for="address">Address Please:</label>   
                        <input type="text" required name="address" placeholder="Your Address..">  <br><br>
                        </span>   
                        <span>
                        <label for="phone">Phone Number:</label>   
                        <input type="number" required name="phone" placeholder="Your Phone..">  <br><br>                       
                        </span>
                      <span>
                      <label for="booking_in_date">Booking In Date :</label>   
                      <input type="date" required name="booking_in_date">  <br><br> 
                      </span>
                             
                      <span>
                      <label for="check_out_date">Check Out Date :</label>   
                      <input type="date" required name="check_out_date">  <br><br>  
                      </span>   
                      
                      <button type="submit"  name="save_btn">SUBMIT</button><br><br>
                     
                      <button  name="back"><a href="index.php">BACK</a></button><br><br>
               </form>
           </div>
       </div>
               
               
                      
                     
 <?php
 if(isset($_POST['save_btn'])){
     $b_id =$_POST['b_id'];
     $c_name =$_POST['c_name'];
     $r_type =$_POST['r_type'];
     $b_status =$_POST['b_status'];
     $address =$_POST['address'];
     $phone =$_POST['phone'];
     $booking_in_date =$_POST['booking_in_date'];
     $check_out_date =$_POST['check_out_date'];

     $sql = "INSERT INTO bookings (b_id,c_name,r_type,
     b_status,address,phone,booking_in_date,check_out_date)
     VALUES ('$b_id','$c_name',' $r_type',' $b_status',
     '  $address','$phone','$booking_in_date',' $check_out_date')";
     $res =mysqli_query($con,$sql);
     if($res){
        ?>
         <script type="text/javascript">
             alert("Data Submit Successfully!!");
         </script>
         <?php
     }else{
         ?>
         <script type="text/javascript">
             alert("please try again!!");
         </script>
         <?php
     }
 }

   
   ?>  
    
    

   </body>
</html>