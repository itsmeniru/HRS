<?php
  require('inc/db_config.php');
  require('inc/essential.php');
  adminLogin();
  $image_id=$_GET['image_id'];
  $sql ="SELECT * FROM `gallery` WHERE image_id=$image_id";
  $res = mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($res);
   
  
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
           <h3><u>Gallery</u></h3><br>
           <form action="#" method="POST">
       <div class="row"><br>
          <label for="image_id">Image Id :</label>   
          <input value="<?php echo $row ['image_id']?>" type="number"   name="image_id" placeholder="...."> <br><br>
          <label for="image_name">Image Name :</label>   
          <input type="text" value="<?php echo $row ['image_name']?>"  name="image_name" placeholder="...."><br><br> 
          
            <label for="description">Description :</label>   
            <input type="textarea" value="<?php echo $row ['description']?>"  name="description" placeholder="...."> <br><br>
            <button type="submit" class="btn btn-dark shadow-none text-center" name="update_btn">UPDATE</button>
        </div>
      </form>
         </center>    
    </div>
    <?php
      if (isset($_POST['update_btn'])){
        $image_id = $_POST['image_id'];
        $image_name =$_POST['image_name'];
       
        $description = $_POST['description'];
        
        $update = "UPDATE gallery SET 
        image_id='$image_id',image_name='$image_name',description='$description' WHERE image_id ='$image_id'";
        $res= mysqli_query($con,$update);
        if($res){
          ?>
          <script type="text/javascript">
            alert ("Data updated successfully!!");
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


   </body>
 </html>
