
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatile" content="IE=edge">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Rooms</title>
<link rel="stylesheet" href="i.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<style>
@import url('https://fonts.googleapis.com/css2?family=Koulen&family=Merienda:wght@400;700&family=Nunito:wght@200;300;400;600;700&family=Poppins:ital,wght@0,400;0,500;1,400;1,600&display=swap');
*{
 font-family: 'Nunito', sans-serif;
  margin: 0; padding: 0;
  box-sizing:border-box ;
  outline: none; border: none;
  text-decoration : none;
  transition:all .2s linear;
  text-transform: capitalize;
}

body{
 background : #eee;
}
.container{
 max-width: 1100px;
 margin: 0 auto;
 padding: 3rem 2rem;
 
}
.container .title{
 font-size: 2.5rem;
 color:#444;
 margin-bottom: 3rem;
 text-transform: uppercase;
 text-align:center;
}
.container .room-container{
 display: grid;
 grid-template-columns: repeat(auto-fit,minmax(30rem,1fr));
 gap: 2rem;

}
.container .room-container .room{
 text-align:center;
 padding: 1rem 1rem;
 background: #fff;
 box-shadow: 0.5rem 1rem rgba(0,0,0..1); 
 outline: .1rem solid #ccc;  
 outline-offset:0;
 cursor:pointer;    
}
.container .room-container .room:hover{
 outline: .2rem solid #222;  
 outline-offset: -1.5rem;

}
.container .room-container .room img{
 height: 15rem;
}
.container .room-container .room:hover img{
 transform: scale: (.9);
}
.container .room-container .room h3{
 padding: 1rem 0;
 font-size: 2rem;
 color: #444;
}
.container .room-container .room:hover h3{
 color:#27ae60;
}
.container .room-container .room .price{

 font-size: 2rem;
 color: #444;
}
.container .room-container h3{
 color: #444;
 padding: .5rem 0;
 font-size: 1.2rem;
}
.container .room-container .stars i{
 
 color: #27ae60;
}
.container .room-container .stars span{
 color: #999;
}
.container .room-container p{
 line-height: 1.5;
 padding: 1rem 0;
 font-size: 1.2rem;
 color: #777;

}
.container .room-container .price{
 padding:1rem 0;
 font-size: 1.5rem;
 color: #27ae60;
}
.container .room-container .buttons{
  display:flex;
  gap: .5rem;
  flex-wrap:wrap;
  margin-top: 1rem;

}
.container .room-container .buttons a{
  flex: 1 1 10rem;
  padding: 1rem;
 font-size: 1.1rem;
 color:#444;
 border: .1rem solid #444;
 }
 .container .room-container  .buttons a.card
 {
   background: #444;
   color: #fff;
 }
 .container .room-container  .buttons a.card:hover
 {
   background: #111;
  
 }
 .container .room-container  .buttons a.book:hover
 {
   background: #444;
   color: #fff;
 }
  .button{
  display:flex;
  gap: 0rem;
  flex-wrap:wrap;
  margin-top: 1rem;

}
 .button{
      margin:20px 0px 30px 0px;
      background: #222;
      padding: 15px 40px;
      border-radius: 5px;
    }
    .button a{
     color: white;
     font-size: 1.2em;
     text-decoration: none;
     font-weight: bolder;
     letter-spacing: 3px;
    }
  .button a.more:hover
 {
   background: #444;
   color: #fff;
 }
@media (max-width:991px){
html{
  font-size:55%;
}
}



</style> 
</head>
<body>
<?php require ('inc/header.php');?>
<div class="container">
 <h3 class="title">OUR ROOMS</h3>
 <div class="room-container">

     <div class="room" data-name="r-1">
       <img src="image/img3.jpg" alt="">
       <h3>Single Bed</h3>
       <div class="price">₹1500 per night</div>
       <div class="stars">
         <i class='bx bxs-star' ></i>
         <i class='bx bxs-star'></i>
         <i class='bx bxs-star'></i>
         <i class='bx bxs-star'></i>
         <i class='bx bxs-star-half'></i>
         <span>(250)</span>
       </div>
       <p>Hotel is so beautiful!!</p>
       <div class="buttons">
         <a href="bookings.php" class="book">Book Now</a>
         <a href="#" class="card">Add to card</a>
       </div>
     </div>

      <div class="room" data-name="r-2">
        <img src="image/img2.jpg" alt="">
        <h3>Double Bed</h3>
        <div class="price">₹3000 per night</div>
        <div class="stars">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star-half'></i>
          <span>(285)</span>
         </div>
         <p>Hotel is so cute!!</p>
          <div class="buttons">
          <a href="bookings.php" class="book">Book Now</a>
          <a href="#" class="card">Add to card</a>
         </div>
      </div>

      <div class="room" data-name="r-3">
        <img src="image/img4.jpg" alt="">
        <h3>Standard</h3>
        <div class="price">₹3500 per night</div>
        <div class="stars">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star'></i>
           <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star-half'></i>
          <span>(275)</span>
        </div>
        <p>Hotel is so good!!</p>
         <div class="buttons">
           <a href="bookings.php" class="book">Book Now</a>
           <a href="#" class="card">Add to card</a>
         </div>
      </div>

      <div class="room" data-name="r-4">
        <img src="image/img9.jpg" alt="">
        <h3>Suite</h3>
        <div class="price">₹2500 per night</div>

        <div class="stars">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star-half'></i>
          <span>(300)</span>
        </div>
        <p> So beautiful background!!</p>
        <div class="buttons">
           <a href="bookings.php" class="book">Book Now</a>
           <a href="#" class="card">Add to card</a>
         </div>
      </div>

      <div class="room" data-name="r-5">
        <img src="image/img5.jpg" alt="">
        <h3>Single Bed</h3>
        <div class="price">₹1500 per night</div>
        <div class="stars">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star-half'></i>
           <span>(350)</span>
         </div>
        <p>Services are very well!!</p>
         <div class="buttons">
           <a href="bookings.php" class="book">Book Now</a>
          <a href="#" class="card">Add to card</a>
         </div>
      </div>

      <div class="room" data-name="r-6">              
        <img src="image/img8.jpg" alt="">
        <h3>Double</h3>
        <div class="price">₹2500 per night</div>
        <div class="stars">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star'></i>
           <i class='bx bxs-star'></i>
           <i class='bx bxs-star'></i>
           <i class='bx bxs-star-half'></i>
           <span>(200)</span>
        </div>
        <p>Very  Good!!</p>
        <div class="buttons">
          <a href="bookings.php" class="book">Book Now</a>
         <a href="#" class="card">Add to card</a>
       </div>
     </div>
     
 </div>
</div>
    <!-- <div class="button">
      <a href="bookings.php" class="more">More</a>
           
    </div> -->



 
 

<!-- <?php require ('inc/footer.php');?> -->
</body>
</html>