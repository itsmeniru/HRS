<?php
  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin();
  $contact_no=$_GET['contact_no'];
  $sql ="SELECT * FROM contact WHERE contact_no='$contact_no'";
  $res= mysqli_query($con,$sql);
  $row=mysqli_fetch_array($res);

?>





<!DOCTYPE html>
 <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-contact update</title>  
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    
}


.content .row{
    min-height: 40vh;
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
               <h3><u>Contact</u></h3>
               <form action="#" method="POST">
               <div class="row"><br>
                     <label for="contact_no" >Contact No :</label>   
                      <input value="<?php echo $row ['contact_no']?>" type="number" name="contact_no" placeholder="Your Contact Id..">  <br><br>
                      <label for="full_name" >Full Name :</label>   
                      <input type="text" value="<?php echo $row ['full_name']?>" name="full_name" placeholder="Your Full Name..">  <br><br>
                      <label for="email"> Email :</label>   
                      <input type="text" value="<?php echo $row ['email']?>" name="email" placeholder="Your Email..">  <br><br>

                      <label for="subject">Subject :</label>   
                      <input type="text" value="<?php echo $row ['subject']?>" name="subject" placeholder="Your Subject..">  <br><br>
                      <label for="message">message :</label>   
                      <input type="int" value="<?php echo $row ['message']?>" name="message" placeholder="Your Message..">  <br><br>  
                         
                      
                        
                       <input type="submit" class="btn btn-dark shadow-none text-center" name="update_btn" value="UPDATE"></input><br><br>

                   </div>

             </form>
           </center>
       </div>
       <?php
       if (isset($_POST['update_btn'])){
         $contact_no =$_POST['contact_no'];
         $full_name =$_POST['full_name'];
         $email =$_POST['email'];
         $subject =$_POST['subject'];
         $message =$_POST['message'];
         

         $update =" UPDATE contact SET contact_no='$contact_no'
         ,full_name='$full_name',email='$email',
         subject='$subject',message='$message'WHERE contact_no='$contact_no'";
         
         $res=mysqli_query($con,$update);
         if($res){
           ?>
           <script type="text/javascript">
             alert ("Data updated successfully!!");
             window.open("http://localhost/HRS/admin/message.php","_self");
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