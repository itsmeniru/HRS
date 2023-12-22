<?php require ('connection.php');
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatile" content="IE=edge">
      <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
      <title> NIKA Hotel</title>
      <link rel="stylesheet" href="i.css">
      <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet"> 
      <style>
           body{
           margin:0;
           padding:0;
           font-family: sans-serif;         
         }
         section{
             padding: 0 10px;
             background: url(image/hey.jpg);
           
             height: 100vh;
             width: 100%;
             display: flex;
             align-items: center;
             flex-direction: row-reverse;
         }
         .box{
             position: relative;
             max-width: 600px;
             padding:50px;
             background: rgba(255,255,255,.2);
             box-shadow: 0 5px 15px rgba(0,0,0,.5);
         }
         .box h2{
             margin: 0 0 10px;
             padding: 0;
             font-size: 20px;
             text-transform: uppercase;
             color: #044463;
         }
         .h1{
             color: darkslateblue;
         }
         .box p{
             margin: 0 ;
             padding: 0;
             
         }
      </style>
   </head>
   <body>
   <?php require ('inc/header.php');?>
   <section>
       <div class="box">
           <h2>“Sometimes you will never know the value of a moment, until it becomes a memory.”</h2>

           <p> “To live a fulfilled life, we need to keep creating the ‘what is next’, of our lives. Without dreams and goals
                there is no living, only merely existing, and that is not why we are here.” </p>
       </div>
   </section>
      <div class="popup-container" id="login-popup">
          <div class="popup">
              <form method="POST" action="login_register.php">
                  <h2>
                      <span>USER LOGIN</span>
                      <button type="reset" onclick="popup('login-popup')">X</button>
                  </h2>
                  <input  type="text"  placeholder="Email or Username" name="email_username">         
                  <input  type="password" placeholder="Password" name="password">       
                  <button class="login-btn"  type="submit" name="login">LOGIN</button>
              </form>
           </div>
          
       </div>

       <div class="popup-container" id="register-popup">
          <div class="register popup">
              <form method="POST" action="login_register.php">
                  <h2>
                      <span>USER REGISTER</span>
                      <button type="reset" onclick="popup('register-popup')">X</button>
                  </h2>
                  <input  type="text"  placeholder="Full Name" name="fullname">        
                 <input  type="text" placeholder="Username" name="username">  
                 <input  type="e-mail" placeholder="E-mail" name="email"> 
                 <input  type="password" placeholder="Password" name="password">                     
                  <button class="register-btn"  type="submit" name="register">REGISTER</button>
              </form>
           </div>
          
       </div>



       <?php 
       
       if(isset($_SESSION['logged_in']) &&  $_SESSION['logged_in']==true)
       {
          echo "<h1 style='text-align:center; margin-top:200px;' > ThANK YOU FOR VISIT US - $_SESSION[username]</h1>";
       }
       ?>

      <script>
          function popup(popup_name)
          {
            get_popup = document.getElementById(popup_name);
            if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }else{
                get_popup.style.display="flex";
            }
          }
      </script>
   

          <?php require('inc/footer.php');?>
          

    </body>
</html>