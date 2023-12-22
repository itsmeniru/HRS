<?php
  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin();
  $room_no=$_GET['room_no'];
  $sql ="SELECT  * FROM rooms where room_no=$room_no";
  $res = mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($res);
   
   
  
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


.container .content .row{
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
    <?php
    require('inc/links.php') 
    ?>
  </head>
  <body class="bg-light">
      <?php require('inc/header.php');?>       
           <div class="content">
              <center>
                 <h3><u>Update Room Types  : </u></h3>
                 <form method="POST">                                  
                      <div class="row">
                      <label for="room_no">Room Number:</label>   
                     <input type="number" value="<?php echo $row ['room_no']?>"  name="room_no" placeholder="Your Room Number..">  <br><br>        
                   <label for="r_type">Room Types :</label>   
                     <select value="<?php echo $row ['r_type']?>" name="r_type" placeholder="Your Room Types...">                 
                   <option value="standard">Standard</option>
                  <option value="douple">Douple</option>
                  <option value="single">Single</option>
                 <option value="suite">Suite</option>                         
               </select><br><br>
                  <label for="s_code">Short Code :</label>   
                    <select value="<?php echo $row ['s_code']?>" name="s_code" placeholder="Your Short Code...">                 
                      <option value="sc">SC</option>
                      <option value="dl">DL</option>
                      <option value="s">S</option>
                      <option value="s">ST</option>                         
                      </select><br><br>           
        
                      <input type="submit" class="btn btn-dark shadow-none text-center" name="update_btn" value="UPDATE"></input>  <br><br> <br> 
                    </div>
                      </div>

                           
                                        
                  </form>
              </center>             
           </div>
           <?php
      if (isset($_POST['update_btn'])){
        $room_no = $_POST['room_no'];
        $r_type =$_POST['r_type'];
        $s_code =$_POST['s_code'];
        
        $update = "UPDATE rooms SET 
        room_no='$room_no',r_type='$r_type',s_code='$s_code' WHERE room_no ='$room_no'";
        $res= mysqli_query($con,$update);
        if($res){
          ?>
          <script type="text/javascript">
            alert ("Data updated successfully!!");
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
