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
    <title>Admin Panel-Employee</title>
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
    <?php
    require('inc/links.php') 
    ?>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php');?>
   
      <div class="content">
        <center>
          <br>
          <br><br>
          <h3><u>Add New Empolyees</u></h3><br>
          
          <form action="" method="post">
            <div class="row"><br>
              <label for="e_Id">Empolyee Id:</label>        
             <input type="number" required name="e_Id" placeholder="Your Empolyee Id.."><br>  <br>     
             <label for="full_name">Full Name:</label>   
             <input type="text"  name="full_name" placeholder="Your Full name.."><br> <br>     
             <label for="address">Address:</label>
             <input type="text" required name="address" placeholder="Your Address.."><br><br>
             <label for="email">Email:</label>       
             <input type="text" required name="email" placeholder="Your email.."><br>  <br>   
             <label for="position">Position :</label>   
                        <select name="position" placeholder="Your Position...">                 
                              <option value="chef">Chef</option>
                              <option value="house">Housekeeping</option>
                              <option value="front">Front Office</option>
                              <option value="manager"> Hotel Manager</option>
                              <option value="security">Security</option>
                              <option value="driver">Van Driver</option>
                              <option value="receptionist">Receptionist</option>
                              <option value="sales_manager">Sales Manager</option>
                              <option value="security">Customer Servie</option>
                              <option value="tech">Technician</option>
                              <option value="host">Host/Hostess</option>
                              <option value="waiter">Waiter</option>
                        </select><br><br>      
             <label for="salary">Salary:</label>  
             <input type="salary" required name="salary" placeholder="Your Salary.." ><br><br>   
             <input type="submit" class="btn btn-dark shadow-none text-center" name="save_btn" value="SAVE"></input>  <br><br> <br> 

            </div>
          </form>

        </center>

          
      </div>
     <?php
      
      if(isset($_POST['save_btn'])){
          $e_Id =$_POST['e_Id'];
          $full_name =$_POST['full_name'];
          $address =$_POST['address'];
          $email =$_POST['email'];
          $position =$_POST['position'];
          $salary=$_POST['salary'];
          
     
          $sql = "INSERT INTO staffs (e_Id,full_name,address,
          email,position,salary)
          VALUES ('$e_Id','$full_name',' $address',' $email',
          '$position','$salary')";
          $res =mysqli_query($con,$sql);
          if($res){
             ?>
              <script type="text/javascript">
                  alert("Data Submit Successfully!!");
                  window.open("http://localhost/HRS/admin/eview.php","_self");
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
