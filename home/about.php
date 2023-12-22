<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>NIKA Hotel-About</title>
    <?php require('inc/links.php');?>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
      }
      .section{
        width: 100%;
        min-height: 100vh;
        background-color: #ddd;
       
      }
      .h1{
        color: black;
      }
      .container{
        width: 80%;
        display: block;
        margin: auto;
        padding-top: 100px;
      }
      .content-section{
        float: left;
        width: 55%;
      }
      .image-section{
        float: right;
        width: 40%;
      }
      .image-section img{
        width: 100%;
        height: auto;
      }
      .content-section .title{
        text-transform: uppercase;
        font-size: 28px;
      }
      .content-section .content h3{
        margin-top: 20px;
        color: #5d5d5d;
        font-size: 21px;
      }
      .content-section .content p{
        margin-top: 10px;
        font-family: sans-serif;
        font-size: 18px;
        line-height: 1.5;
      }
      .content-section .content .button{
        margin-top: 30px;
      }
      .content-section .content .button a{
        background-color: #3d3d3d;
        padding: 12px 40px;
        text-decoration: none;
        color: #fff;
        font-size: 25px;
        letter-spacing: 1.25px;
      }
      .content-section .content .button a:hover{
        background-color: #a52a2a;
        color: #fff;
      }
      .content-section .social{
        margin: 40px 40px;
      }
      .content-section .social i{
        color:#a52a2a ;
        font-size: 30px;
        padding: 0px 10px;
      }
      .content-section .social i:hover{
        color: #3d3d3d;
      }
      @media screen and (max-width:768px) {

        .container{
        width: 80%;
        display: block;
        margin: auto;
        padding-top: 50px;
      }
      .content-section{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
      }
      .image-section{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
      }
       .content-section .title{
         align-items: center;
         font-size: 19px;
       }
       .content-section .content .button{
       text-align: center;
      }
      .content-section .content .button a{
        
        padding: 9px 30px;
      }
      .content-section .social{
       text-align: center;
      }
      }
    </style>
  </head>

 <body>
    <?php require ('inc/header.php');?>
    <div class="section">
      <div class="container">
        <div class="content-section">
         <div class="title">
            <h1>About Us</h1>
         </div>
         <div class="content">
            <h3> Nothing makes you feel better than when you get into a hotel NIKA, and the sheets feel so good.</h3>
           <p> Our hotel is great for those of you who can’t decide whether you want to stay by the land. With our hotel, you get the best of both worlds. In each of the 15 guest rooms and suites, you
              can look at the beautiful view of Biratnagar city one window and the land out the other. 
            </p>
            <div class="button">
              <a href="">Read More</a>
            </div>
         </div>
         <div class="social">
           <a href="#" ><i class='bx bxl-twitter' ></i></a>
           <a href="#"><i class='bx bxl-facebook-circle'></i></a>
           <a href="#"><i class='bx bxl-instagram' ></i></a>        
         </div>
        </div>  
        <div class="image-section">
          <img src="image/hey.jpg">
        </div>     
      </div>
    </div>
    <?php require('inc/footer.php');?>
  </body>
</html>