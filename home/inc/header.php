<header>  
     <h2> <a href="#" class="logo"><img src="nika.jpg"> </a> </h2>        
   
        <nav>
            <a href="index.php" class="nav-link">Home</a> 
            <a href="about.php" class="nav-link">About</a>
             <a href="rooms.php" class="nav-link">Rooms</a> 
             <a href="services.php" class="nav-link">Customer Services</a>
             <a href="gallery.php" class="nav-link">Gallery</a> 
            <a href="contact.php" class="nav-link">Contact</a>
      
             
       </nav>



       <?php
           if(isset($_SESSION['logged_in']) &&  $_SESSION['logged_in']==true)
           {
               echo "
               <div class='user'>
               $_SESSION[username]- <a href='logout.php'>LOGOUT</a>
               </div>
               
               ";
           }
           else{
                echo"
                 <div class='sign-in-up'>
                      <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
                     <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
                     
                 </div>
                ";
           }
       ?>
      
      <!-- <button type='button' name="btn"><a href="admin/index.php">ADMIN</a></button> -->



 
   </header>