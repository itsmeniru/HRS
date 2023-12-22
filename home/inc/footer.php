<!DOCTYPE html>
<html>
  <head>
    <title>Footer Design</title>
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body{
        display: grid;
        justify-content: end;
        align-content: end;
        min-height:100px;
      }
      footer{
        position: relative;
        width: 100%;
        height: auto;
        padding: 50px 100x;
        background: #3f3f3f;
      }
     footer .container{
       width: 100%;
       display: grid;
       grid-template-columns: 2fr 1fr 1fr 1fr;
       grid-gap: 20px;
      
     }
     footer .container .sec h2{
       position: relative;
       color: white;
       font-weight: 500;
       margin-bottom: 5px;
       
     }
     footer .container .sec h2::before{
       content: '';
       position: absolute;
       bottom: -5px;
       left: 0;
       width: 50px;
       height: 2px;
       background:#ffeb3b;
     }
     footer .container .sec p{
       color: wheat;
      
     }
     .sci{
       margin-top: 20px;
       display: grid;
       grid-template-columns: repeat(4,50px);
       grid-gap: 10px;
     }
     .sci li{
       list-style: none;
     }
     .sci li a{
       display: inline-block;
       width: 58px;
       height: 58px;
       background: #8a7373;
       display: grid;
       align-content: center;
       justify-content: center;
       text-decoration: none;
       border-radius: 4px;
     }
     .sci li a:hover{
       background: #b44e4e;
     }
     .sci li a .bx{
       color: white;
       font-size: 30px;
     }
     .quicklinks li{
       list-style: none;
     }
     .quicklinks li a{
       color: rgb(207, 50, 105);
       text-decoration: none;
       margin-bottom: 10px;
       font-size: 18px;
       font-weight: 20px;
       display: inline-block;
     }
     .quicklinks li a:hover{
       color: #ffeb3b;
     }
     .info{
       position: relative;
     }
     .info li{
       display: grid;
       grid-template-columns: 30px 1fr;
       margin-bottom: 16px;
     }
     .info li span:nth-child(1){
       color: white;
       font-size: 20px;
     }
     .info li span{
       color: white;
     }
     .info a{
       color: #f7f7f7;
       text-decoration: none;
     }
     .info a:hover{
       color: #ffeb3b;
     }
      .outer-footer{
        padding: 8px 40px;
        text-align: center;
        color: white;
        font-size: 18px;
        background-color: #260a0a;
      }
      /*now make it responsive */
      @media(max-width:991px){
        footer{
          padding: 40px;
        }
        footer .container{
          grid-template-columns: repeat(2,1fr);
        }
        .outer-footer{
        padding: 8px 40px;
        
      }
      }
      @media(max-width:768px){
        footer .container
        {
          grid-template-columns: repeat(1,1fr);
        }
      }
    </style>
  </head>
  <body>

  <footer >
    <div class="container">
      <div class="sec aboutus">
        <h2>NIKA Hotel</h2>
        <p>
          In tough times its harder and even more important to keep our customers happy.
           Chilling out on the bed in our hotel room watching television,
           while wearing your own pajamas, is sometimes the best part of a vacation.
        </p>
        <ul class="sci">
          <li ><a href="#"><i class='bx bxl-twitter' ></i></a></li>
          <li ><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
          <li ><a href="#"><i class='bx bxl-instagram' ></i></a></li>
          <li ><a href="#"><i class='bx bxl-whatsapp' ></i></a></li>
        </ul>
      </div>
      <div class=" sec quicklinks">
        <h2>Quick Links</h2>
        <ul>
          <li ><a href="#">Home</a></li>
          <li ><a href="#">About</a></li>
          <li ><a href="#">Rooms</a></li>
          <li ><a href="#">Customer Services</a></li>
          <li ><a href="#">Gallery</a></li>
          <li ><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class=" sec quicklinks">
        <h2>Our Facilities</h2>
        <ul>
          <li ><a href="#">Free Wi-Fi</a></li>
          <li ><a href="#">Swimming Pool</a></li>
          <li ><a href="#">Currency Exchange</a></li>
          <li ><a href="#">Parling Area</i></a></li>
          <li ><a href="#">24hrs Security</a></li>
         
        </ul>
      </div>
      <div class="sec contact">
        <h2>Contact Us</h2>
        <ul class="info">
          <li>
            <span><i class='bx bxs-map' ></i></span>
           <p>
             <a href=""> NIKA Hotel Bus Park, Biratnagar <br>(Nepal)</a>
           </p>
          </li>
          <li>
            <span><i class='bx bx-phone-call' ></i></span>
            <p><a href="tel:+9845025036">+9845025036</a><br>
              <a href="tel:+9845025036">+9812596035</a>
            </p>
          </li>
          <li>
            <span><i class='bx bxl-gmail' ></i></span>
            <p><a href="mailto:ask.enwebdev@gmail.com">ask.enwebdev@gmail.com</a>
              
            </p>
          </li>
        </ul>
      </div>
    </div>

   <div class="outer-footer">
      @NIKA Hotel Bus Park, Biratnagar (Nepal) 
   </div>

  </footer>
  </body>
</html>