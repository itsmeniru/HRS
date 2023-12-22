<?php 
       
       if(isset($_SESSION['logged_in']) &&  $_SESSION['logged_in']==true)
       {
          echo "<h1 style='text-align:center; margin-top:200px;' > WELCOME TO NIKA HOTEL - $_SESSION[username]</h1>";
       }
 ?>
