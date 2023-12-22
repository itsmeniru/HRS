<?php  require ('connection.php');?>



<!DOCTYPE html>
<html>
  <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatile" content="IE=edge">
   <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>
   <link href="contact.css" rel="stylesheet" type="text/css">
   <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
  <?php require('inc/header.php');?>
  <br><br>
  <div class="contact-wrap">
    <div class="contact-in">
      <h1>Contact Info</h1>
      <h2><i class='bx bxs-phone-call'></i>Phone</h2>
      <p>9845025036</p>
      <h2><i class='bx bxl-gmail' ></i>Email</h2>
      <p>ask.enwebdev@gmail.com</p>
      <h2><i class='bx bxs-location-plus' ></i>Address</h2>
      <p>Bus Park , Biratnagar, Nepal</p>
      <ul>
          <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
          <li ><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
          <li ><a href="#"><i class='bx bxl-instagram' ></i></a></li>
          <li ><a href="#"><i class='bx bxl-whatsapp' ></i></a></li>
      </ul>
    </div>
    <div class="contact-in">
      <h1>Send a  Message</h1>
      <form action="" method="post">
      <input name="contact_no" type="number" placeholder="Contact Number" class="contact-in-input">

        <input name="full_name" type="text" placeholder="Full Name" class="contact-in-input">
        <input name="email" type="text" placeholder="Email" class="contact-in-input">
        <input name="subject" type="text" placeholder="Subject" class="contact-in-input">
        <textarea name="message" placeholder="Message" class="contact-in-textarea"></textarea>
        <input type="submit" class="btn btn-dark shadow-none text-center" name="save_btn" value="SUBMIT"></input><br><br>
      </form>
    </div>
    <div class="contact-in">
    <iframe class="" height="600px" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114311.47785851432!2d87.20176666829995!3d26.448195378505872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef744704331cc5%3A0x6d9a85e45c54b3fc!2sBiratnagar%2056613!5e0!3m2!1sen!2snp!4v1652241132837!5m2!1sen!2snp" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
    </div>
  </div>
<br><br>

  <?php require('inc/footer.php');?>

  <?php
 if(isset($_POST['save_btn'])){
     $contact_no =$_POST['contact_no'];
     $full_name =$_POST['full_name'];
     $email =$_POST['email'];
     $subject =$_POST['subject'];
     $message =$_POST['message'];
     

     $sql = "INSERT INTO contact (contact_no,full_name,email, subject,message)
     VALUES ('$contact_no','$full_name',' $email',' $subject','$message')";
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