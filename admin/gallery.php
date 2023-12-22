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
    <title>Admin Panel-Gallery</title>
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
 
    <?php require('inc/links.php') ?>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php');?>
     
    <div class="content">
         <center>
           <h3><u>Gallery Details</u></h3><br>
           <form action="" method="POST">
       <div class="row"><br>
          <label for="image_id">Image Id :</label>   
          <input type="number" required  name="image_id" placeholder=" "> <br><br>
          <label for="image_name">image Name :</label>   
          <input type="text" required  name="image_name" placeholder=""><br><br> 
          
            <label for="description">Description :</label> 
            <textarea type="text" required name="description" placeholder=""></textarea>  <br><br>
            <button type="submit" class="btn btn-dark shadow-none text-center" name="save_btn">SAVE</button>
        </div>
      </form>
         </center>     
         <?php
      if (isset($_POST['save_btn'])){
        $image_id = $_POST['image_id'];
        $image_name =$_POST['image_name'];
        $description =$_POST['description'];
       
        

        $sql = "INSERT INTO gallery (
           image_id,image_name,description) VALUES('$image_id',
           '$image_name','$description')";
        $res= mysqli_query($con,$sql);
        if($res){
          ?>
          <script type="text/javascript">
            alert ("Data save successfully!!");
            window.open("http://localhost/HRS/admin/gview.php","_self");
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
     
    </div>
    </body
</html>