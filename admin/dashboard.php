<!DOCTYPE html>
 <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel </title>  
    <?php
    require('inc/links.php'); 
    ?>
  </head>
  <body>
  
   <?php require('inc/header.php'); ?>
         
  


   <br><br><br><br>

   <div class="container">
   <div class="content-2">
     <div class="customer-details">
       <div class="title">
         <h2>Customer Details</h2>
         <a href="#" class="btn">View All</a>
       </div>
       <table>
         <tr>
           <th>Room Number</th>
           <th>Customer Name</th>
           <th>Address</th>
           <th>Phone</th>
           <th>Option</th>
         </tr>
         <tr>
           <td>101</td>
           <td>Ashok Thapa</td>
           <td>Palpa</td>
           <td>9810452763</td>
           <td><a href="#" class="btn">View</a></td>
         </tr>
         <tr>
           <td>102</td>
           <td>Rama Limbu</td>
           <td>Dharan</td>
           <td>9815452763</td>
           <td><a href="#" class="btn">View</a></td>
         </tr>
         <tr>
           <td>103</td>
           <td>Aashish Shah</td>
           <td>Pokhara</td>
           <td>9819562763</td>
           <td><a href="#" class="btn">View</a></td>
         </tr>
         <tr>
           <td>104</td>
           <td>Sita Magar</td>
           <td>Morang</td>
           <td>9810454549</td>
           <td><a href="#" class="btn">View</a></td>
         </tr>
       </table>
     </div>
     <div class="new-booking">
       <div class="title">
         <h2>New Booking</h2>
       </div>
       <table>
         <tr>
           <th>Room Number</th>
           <th>Name</th>
           <th>Option</th>
         </tr>
         <tr>
           <td>105</td>
           <td>Saroj Mehta</td>
           <td><i class='bx bxs-info-square'></i></td>
         </tr>
         <tr>
           <td>106</td>
           <td>Raksha Dhakal</td>
           <td><i class='bx bxs-info-square'></i></td>
         </tr>
         <tr>
           <td>107</td>
           <td>Ishika Baidhya</td>
           <td><i class='bx bxs-info-square'></i></td>
         </tr>
       </table>

     </div>
   </div>
    
   </div>
   
   </body>
 </html>