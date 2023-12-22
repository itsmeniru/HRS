<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>NIKA Hotel-Gallery</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="i.css">

    <style>
     *{
       margin: 0;
       padding:0;
       box-sizing: border-box;
       font-family: 'Poppins',sans-serif;
     }
     .container{
       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;
       text-align: center;
       margin: 40px 20px 0px 20px;
    }
    .container .heading{
       width: 50%;
       padding-bottom: 50px;
    }
    .container .heading h3{
      font-size: 3em;
      font-weight:bolder ;
      padding-bottom: 10px;
      border-bottom: 3px solid #222;
      
    }
    .container .heading h3 span{
      font-weight:100 ;
      
    }
    .container .box{
      display: flex;
      flex-direction:row;
      justify-content: space-between;
      
    }
    .container .box .dream{
      display: flex;
      flex-direction: column ;
      width: 32.5%;
    }
    .container .box .photo{
          text-align:center;
          padding: 3rem 2rem;
          background: #fff;
          box-shadow: 0.5rem 1rem rgba(0,0,0..1); 
          outline: .1rem solid #ccc;  
          outline-offset:0;
          cursor:pointer;    
        }
        .container .box .photo:hover{
          outline: .2rem solid #222;  
          outline-offset: -1.5rem;

        }
        .container .box .photo h3{
          padding: .5rem 0;
          font-size: 2rem;
          color: #444;
        }
    .container .box .dream img{
      
      width: 100%;
      padding-bottom: 15px;
      border-radius: 5px;
    }
    .container .btn{
      margin:40px 0px 70px 0px;
      background: #222;
      padding: 15px 40px;
      border-radius: 5px;
    }
    .container .btn a{
     color: white;
     font-size: 1.2em;
     text-decoration: none;
     font-weight: bolder;
     letter-spacing: 3px;
    }

    @media only screen and (max-width :1492px){
      .container .box{
     
      flex-direction:column;
      
    }
    .container .box .dream{
      
      width: 100%;
    }
    }
    @media only screen and (max-width :1355px){
      .container .heading{
       width: 200%;
      
    }
    .container .heading h3{
      font-size: 2em;
      
      
    }
    }
    </style>
  </head>
  <body>
    <?php require ('inc/header.php');?>
    <div class="container">
      <div class="heading">
        <h3>Welcome Our <span> To Photo Gallery</span></h3>
      </div>
      <div class="box">
        <div class="dream">
          <div class="photo">
          <img src="image/3.jpg">
          <h7>img_id:101</h7>
          <h3>Our Garden</h3>
          <p>Gardens are not made by singing "Oh, how beautiful," and sitting in the shade.</p>
          </div><br>
          <div class="photo">
          <img src="image/4.jpg">
          <h7>img_id:102</h7>
          <h3>Front Garden</h3>
          <p> Trees and plants always look like the people they live with, somehow.</p>
          </div><br>
          <div class="photo">
          <img src="image/5.jpg">
          <h7>img_id:103</h7>
          <h3>Delicious Food</h3>
          <p> People who love to eat are always the best people</p>
          </div>     
        </div>
        <div class="dream">
         <div class="photo">
         <img src="image/staff.jpg">
          <h7>img_id:104</h7>
          <h3>Happy Staff</h3>
          <p>“Do good and good will come to you.” </p>
          </div><br>
          <div class="photo">
         <img src="image/home.png">
          <h7>img_id:105</h7>
          <h3>Our Building</h3>
          <p>“You can't build a great building on a weak foundation.” </p>
          </div><br>
          <div class="photo">
         <img src="image/ki.jpg">
          <h7>img_id:106</h7>
          <h3>Our Kitchen</h3>
          <p>“Everything tastes better when we're together.” </p>
          </div><br>
         
        </div>
        <div class="dream">
        <div class="photo">
         <img src="image/fo.jpg">
          <h7>img_id:107</h7>
          <h3>Food</h3>
          <p>“Made with love.” </p>
          </div><br>
          <div class="photo">
         <img src="image/customer.jpg">
          <h7>img_id:108</h7>
          <h3>Happy Customer</h3>
          <p>“Live life to the fullest and focus on the positive.” </p>
          </div><br>
          <div class="photo">
         <img src="image/hey.jpg">
          <h7>img_id:109</h7>
          <h3>Welcome</h3>
          <p>Positivity always wins… ... </p>
          </div><br>
          
        </div>
        
      </div>
      <div class="btn">
      <a href="#">More</a>
    </div>

    </div>
    
      


  </body>
</html>