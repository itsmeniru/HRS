<div class="sidebar">
  <div class="sidebar-brand">
    <div class="brand-flex">
      <img src="inc/logo.jpg" width="30px" alt="">
        
      
      <div class="brand-icons">
        <span class="bx bxs-bell-ring"></span>
        <i class='bx bxs-bookmarks' ></i>
      </div>
    </div>
  </div>

  <div class="sidebar-main">
    <div class="sidebar-user">
      <img src="inc/user.jpg" alt="">
      <div>
        <h3>Enwebdev</h3>
        <span>enwebdev@gmail.com</span>
      </div>
    </div>


    <div class="sidebar-menu">
      <div class="menu-head">
        <span>Welcome Have a Good Day !!</span>
      </div>
        <ul>
          <li><a href="dashboard.php"><span class="bx bxs-dashboard">Dashboard</span> </a></li>
          <li><a href="bookingdetails.php"> <span class="bx bx-bookmarks">Bookings</span></a></li>
          <li><a href="rview.php"><span class="bx bxs-home-alt-2">Rooms</span></a></li>
          <li><a href="cview.php"><span class="bx bxs-user-circle">Customers</span></a></li>
          <li><a href="eview.php"><span class="bx bxs-user-detail">Empolyees</span></a></li>
          <li><a href="sview.php"><span class="bx bx-window">Services</span></a></li>
          <li><a href="gview.php"><span class="bx bxs-photo-album">Gallery</span></a></li>
          <li><a href="contact.php"><span class="bx bxs-contact">Contact</span></a></li>  
          <li><a href="logout.php"><span class="bx bxs-file-export">Sign Up</a></li>          
        </ul>        
        </div>
      </div>
    </div>

   
</div>

<section class="section1">
            <nav>
              <div class="sidebar-button">
                <i class='bx bxs-dashboard' ></i>
                <span class="dashboard"><b>Dashboard</b></span>
              </div>
              <div class="search-box">
                <input type="text" placeholder="Search.......">
                <i class='bx bx-search'></i>
              </div>
             
            </nav>
            <br><br><br>
           <section class="home">
            <div class="values">
                <div class="val-box">
                    <i class='bx bx-user'></i>
                    <div>
                        <h3>120</h3>
                        <span>Customers</span>
                    </div> 
                </div>

                    <div class="val-box">
                        <i class='bx bxs-user-rectangle'></i>
                        <div>
                            <h3>50</h3>
                            <span>Employee</span>
                        </div> 
                    </div>
            
                        <div class="val-box">
                          <i class='bx bxs-home-smile'></i>
                            <div>
                                <h3>20</h3>
                                <span>Rooms</span>
                            </div> 
                        </div>
                            <div class="val-box">
                               <i class='bx bxs-bookmarks' ></i>
                                <div>
                                    <h3>6</h3>
                                    <span>New Bookings</span>
                                </div> 
                            </div>
            </div>
            </section>
            <script>
                $('#menu-btn').click(function(){
                    $('#menu').toggleClass("active");
                })
            </script>
    