<?php
  include_once('parts/head.php');
?>
<body>

  <script type="text/javascript">
    function myFun(){
      var FirstName=document.getElementById('FirstName').value;
      var LastName=document.getElementById('LastName').value;
      var Email=document.getElementById('email').value;
      var MobileNo=document.getElementById('number').value;
      var pattern1="^[a-zA-Z]+$";
      var reg1= new RegExp(pattern1);
      var pattern2="^[a-zA-Z]+$";
      var reg2= new RegExp(pattern2);
      var pattern3="^[a-zA-Z@]"; 
      var reg3 = new RegExp(pattern3);
      var pattern4="^[0-9]{10}$"; 
      var reg4 = new RegExp(pattern4);

      if(reg1.test(FirstName))
      {
        document.getElementById('errFirstName').innerHTML="";
      }
      else
      {
        document.getElementById('errFirstName').innerHTML="Please Enter Valid Name.";
      }
        
      if(reg2.test(LastName))
      {
        document.getElementById('errLastName').innerHTML="";
      }
      else
      {
        document.getElementById('errLastName').innerHTML="Please Enter Valid LastName.";
      }

      if(reg3.test(Email))
      {
        document.getElementById('errEmail').innerHTML="";
      }
      else
      {
        document.getElementById('errEmail').innerHTML="Please Enter Valid Email.";
      }

      if(reg4.test(MobileNo))
      {
        document.getElementById('errMobile').innerHTML="";
      }
      else
      {
        document.getElementById('errMobile').innerHTML="Please Enter Valid Mobile No.";
      }
    }
  </script>



  

  <!-- Overly Sidebar -->
  <div class="overly-sidebar-wrapper d-none d-lg-block">
    <div class="overly-sidebar-content">
      <button id="sidebar-close" class="circle-btn primary-btn"><i class="flaticon-cancel"></i></button>
      <!-- Logo -->
      <div class="sidebar-about text-center">
        <a href="index.html"><img src="assets/img/logo-2.png" alt="Prolax" class="img-fluid"></a>
        <p class='text'>Our Mission is to Enhance your Natural Beauty because Makeup should never be used to hide yourself.She believes in Makeup magnifies the beauty that already exists.Bridal Makeup should bring out the brides best features & make them look the most beautiful version of themselves.</p>
      </div>
      <!-- Sidebar Contact Information -->
      <div class="side-menu-gallery">
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-1.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-2.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-3.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-4.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-5.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-6.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-7.jpg" alt="Instagram Feeds"></a>
        </div>
        <!-- Single Feed -->
        <div class="gallery-item">
          <a href="portfolio.html"><img src="assets/img/instagram/insta-img-8.jpg" alt="Instagram Feeds"></a>
        </div>
      </div>
      <!-- Sidebar Subscribe Form -->
      <form action="#" class="sidebar-subscribe-form text-center">
        <label for="subscribeEmail">Get Subscribed!</label>
        <input type="text" name="subscribeEmail" id="subscribeEmail" placeholder="Enter your mail here">
        <button type="submit"><i class="flaticon-right-arrow"></i></button>
      </form>
      <!-- Sidebar Social Links -->
      <ul class="sidebar-social-links">
        <li><a href="https://www.facebook.com/feelingsbeautycare" target="_blanck" class="circle-btn"><i class="flaticon-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/mengarurmi/" target="_blanck" class="circle-btn"><i class="flaticon-instagram"></i></a></li>
        <li><a href="tel:8000661578" target="_blanck" class="circle-btn"><i class="flaticon-whatsapp"></i></a></li>
        <li><a href="mailto:Info.feelingsbeautycare@gmail.com" target="_blanck" class="circle-btn"><i class="flaticon-mail"></i></a></li>
      </ul>
      <!-- CTA Btn -->
      <div class="sidebar-cta-btn">
        <a href="contact.html" class="def-btn">Contact Us<span class="flaticon-right-arrow"></span></a>
      </div>
    </div>
  </div>
  <!-- Overly Sidebar End -->





  <!-- Popup Search Box -->
  <div class="popup-search-box d-none d-lg-block">
    <!-- Close Btn -->
    <button class="searchClose"><i class="flaticon-close"></i></button>
    <form action="#">
      <input type="text" placeholder="What are you looking for">
      <button type="submit"><i class="flaticon-search"></i></button>
    </form>
  </div>
  <!-- Popup Search Box end -->





  <!-- Header Area -->
  <header class="unvisible-default" style="background: black; z-index: 10;">
    <div class="container-fluid" >
      <div class="row align-items-center" >
        <div class="col-lg-2" >
          <!-- Header Logo -->
          <div class="header-logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
          </div>
        </div>
        <div class="col-lg-8">
          <!-- Main Menu Area -->
          <nav class="main-menu">
            <ul>
              <li>
                <a href="index.html"  class="margin" style="color: #F0E68C">Home</a>
              </li>
              <li><a href="about.html"  class="margin" style="color: #F0E68C">About us</a></li>
              <li><a href="courses.html"  class="margin" style="color: #F0E68C">Courses</a></li>
              <li>
                <a href="services.html" class="margin" style="color: #F0E68C">Services</a>
              </li>
              
              <li>
                <a href="portfolio.html" class="margin" style="color: #F0E68C">Portfolio</a>
              </li>
         <li><a href="contact.html"  class="margin" style="color: #F0E68C" >Contact us</a></li>
            </ul>
          </nav>
          <!-- Main Menu Area end -->
        </div>
     


        <div class="col-lg-2 text-right ">
          <!-- Header Button Area -->
          <div class="header-btn">
            <button class="search-btn circle-btn"><i class="flaticon-search"></i></button>
            <button class="sidebarBtn circle-btn"><i class="flaticon-menu"></i></button>
          </div>
          <!-- Header Button Area -->
        </div>  
      </div>
      <!-- Mobile Menu -->
      <div class="mobile-menu-container"></div>
    </div>
  </header>
  <!-- Header Area end -->





  <!-- header Two -->
  <span>
    <div class="header-tow-wrapper">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-xl-2 col-lg-3 wow fadeInLeft" data-wow-delay="0.3s">
            <!-- Header Two Logo -->
            <div class="header-two-logo">
              <a href="index.html"><img src="assets/img/logo.png" alt="MIxlax"></a>
            </div>
            <!-- Header Two Logo end -->
          </div>
          <div class="col-lg-8 wow zoomIn" data-wow-delay="0.3s">
            <ul>
              <li >
                <a href="index.html" class="margin" style="color: #F0E68C"  >Home</a>
            
              </li>
              <li><a href="about.html" style="color: #F0E68C  " class="margin">About us</a></li>
              <li><a href="courses.html" style="color: #F0E68C  " class="margin">Courses</a></li>
              <li>
                <a href="services.html" style="color: #F0E68C" class="margin">Services</a>
              </li>
              <li><a href="portfolio.html" style="color: #F0E68C" class="margin">Portfolio</a></li>
              <li><a href="contact.html" style="color: #F0E68C" class="margin">Contact us</a></li>
            </ul>
          </div>
        
          <div class="col-lg-2 wow fadeInRight" data-wow-delay="0.3s">
            <!-- header two Btn -->
            <div class="header-two-btn text-right fadeIn">
              <button class="search-btn circle-btn"><i class="flaticon-search"></i></button>
              <button class="sidebarBtn circle-btn"><i class="flaticon-menu"></i></button>
            </div>
            <!-- header two Btn end -->
          </div>
        </div>
      </div>
    </div>
  </span>
  <!-- header Two end -->


  <!-- Hero Image PHP-1 -->
  <?php
      // include('db.php');
      // $result = mysqli_query($conn, "SELECT * FROM `main-bg-image`");
      // if($result){
      //   if (mysqli_num_rows($result) > 0) {
      //     // output data of each row
      //     while($row = mysqli_fetch_assoc($result)) {
  ?>
  <!-- Hero Image PHP-1 End-->


  <!-- Hero Area -->
  <div class="hero-sec-wrapper hero-slider-active">
    <!-- Single Hero Slide -->
    <div class="single-hero-slide">
      <div class="container-fluid">
        <!-- Slider Big Image -->
        <div class="slider-big-img" >
          <img src="assets/img/hero/XCL01.webp" class="img-fluid" alt="Hero Image">
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-5 col-xl-3 offset-md-6  offset-lg-6 offset-xl-1">
            <!-- hero content -->
            <div class="hero-content">
              <span>Beauty Salon</span>
              <h1 class="hero-title">The Home Of Care</h1>
              <a href="contact.html" class="def-btn">Contact Us<span class="flaticon-right-arrow"></span></a>
            </div>
            <!-- hero content end -->
          </div>
        </div> 

        <!-- Schedule-Box PHP-1 -->
        <?php
          include('db-form.php');
          $result = mysqli_query($conn, "SELECT * FROM `opening-hours`");
          if($result){
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              if($row = mysqli_fetch_assoc($result)) {
        ?>
        <!-- Schedule-Box PHP-1 End-->  


        <!-- hero schedule box -->
        <div class="hero-schedule-box bg-primary">
          <div class="icon">
            <img src="assets/img/icons/flower-icon.png" alt="Flower">
          </div>
          <p class="sechedule-title">Opening Hours</p>
          <ul>
            <li><?php echo $row['days1']; ?>: <a href="contact.html"><?php echo $row['hours1']; ?></a></li>
            <!-- <li>Saturday: <a href="contact.html">9 AM – 4 PM</a></li> -->
            <li><?php echo $row['days2']; ?>: <a href="contact.html"><?php echo $row['hours2']; ?></a></li>
          </ul>
        </div>
        <!-- hero schedule box End -->

        <!-- Schedule-Box PHP-2 -->
        <?php
                }
            }
            else {
                echo "0 results";
            }
        }
        else{
            echo "Result empty";
        }
        mysqli_close($conn);
        ?>
        <!-- Schedule-Box PHP-2 End-->

      </div>
    </div>
    <!-- Single Hero Slide end -->            

    <!-- Single Hero Slide -->
    <div class="single-hero-slide">
      <div class="container-fluid">
        <!-- Slider Big Image -->
        <div class="slider-big-img" >
          <span class="bg-shape"></span>
          <img src="assets/img/hero/XCL19.webp" class="img-fluid" alt="Hero Image">
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-5 col-xl-3 offset-md-6 offset-lg-6 offset-xl-1">
            <!-- hero content -->
            <div class="hero-content">
              <span>Beauty Salon</span>
              <h2 class="hero-title">The House Of Beauty</h2>
              <a href="contact.html" class="def-btn">Contact Us <span class="flaticon-right-arrow"></span></a>
            </div>
            <!-- hero content end -->
          </div>
        </div> 
        <!-- hero schedule box -->
        <div class="hero-schedule-box bg-primary">
          <div class="icon">
            <img src="assets/img/icons/flower-icon.png" alt="Flower">
          </div>
          <p class="sechedule-title">Opening Hours</p>
          <ul>
            <li>Mon-Sat: <a href="contact.html">10 AM – 1 PM | 4 PM - 8 PM</a></li>
            <!-- <li>Saturday: <a href="contact.html">9 AM – 4 PM</a></li> -->
            <li>Sunday: <a href="contact.html">10 AM - 1 PM</a></li>
          </ul>
        </div>
        <!-- hero schedule box End -->
      </div>
    </div>
    <!-- Single Hero Slide end -->
    <!-- Single Hero Slide -->
    <div class="single-hero-slide">
      <div class="container-fluid">
        <!-- Slider Big Image -->
        <div class="slider-big-img"  >
          <span class="bg-shape"></span>
          <img src="assets/img/hero/XCL027.webp" class="img-fluid" alt="Hero Image">
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-5 col-xl-3 offset-md-6 offset-xl-1">
            <!-- hero content -->
            <div class="hero-content">
              <span style="color: black">Beauty Salon</span>
              <h1 class="hero-title" style="color: black">The Essence of beauty</h1>
              <a href="contact.html" class="def-btn">Contact Us <span class="flaticon-right-arrow"></span></a>
            </div>
            <!-- hero content end -->
          </div>
        </div> 
        <!-- hero schedule box -->
        <div class="hero-schedule-box bg-primary">
          <div class="icon">
            <img src="assets/img/icons/flower-icon.png" alt="Flower">
          </div>
          <p class="sechedule-title">Opening Hours</p>
          <ul>
            <li>Mon-Sat: <a href="contact.html">10 AM – 1 PM | 4 PM - 8 PM</a></li>
            <!-- <li>Saturday: <a href="contact.html">9 AM – 4 PM</a></li> -->
            <li>Sunday: <a href="contact.html">10 AM - 1 PM</a></li>
          </ul>
        </div>
        <!-- hero schedule box End -->
      </div>
    </div>
    <!-- Single Hero Slide end -->
  </div>
  <!-- Hero Area end -->

  <!-- Hero Image PHP-2 -->
  <?php
    //     }
    //   }
    //   else {
    //     echo "0 results";
    //   }
    // }
    // else{
    //   echo "Result empty";
    // }
    // mysqli_close($conn);
  ?>
  <!-- Hero Image PHP-2 End-->



  <!-- About Us PHP-1 -->
  <?php
    include('db.php');
    $result = mysqli_query($conn, "SELECT * FROM `about-us`");
    if($result){
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        if($row = mysqli_fetch_assoc($result)) {
  ?>
  <!-- About Us PHP-1 End-->  

  <!-- About Us Section -->
  <section class="about-us-wrapper">
    <!-- Leaf Shape -->
    <div class="leaf-shape">
      <img src="assets/img/icons/leaf-1.png" alt="Leaf Shape">
    </div>
    <div class="container">
      <div class="row">
        <!-- About us image -->

        <div class="col-lg-6 col-xl-5 wow fadeInUp" data-wow-delay="0.3s">
        <br>
          <div class="about-us-img">
            <!-- Big Image -->
            <div class="about-us-big-img">
              <img src="<?php echo $row['image']; ?>" alt="About Us Big Image" class="js-tilt">
            </div>
          </div>
        </div>
        <!-- About us image end -->
        <!-- About Us Content Area -->
        <div class="col-lg-6 offset-xl-1 wow fadeInUp" data-wow-delay="0.3s">
          <div class="about-us-content fadeInUp">
            <!-- Section Title -->
            <div class="section-title">
              <span>We Have <span>11 Years</span> Of Experience</span>
              <h2 class="title">About Us </h2>
              <h3 class="small-title">Feelings Beauty Care has a wide range of products and services to cater to the varied requirements of their customers.</h3>
            </div>
            <!-- About Us quote -->
            <div class="about-us-quote">
              <p>It is known to provide top service in the following categories: Beauty Parlours For Bridal, Beauty Parlours, Women Beauty Parlours, Beauty Parlours For Hair Straightening, Tattoo Parlours, Beauty Parlour Classes, Beauty Parlours At Home, Beauty Parlours For Hair Massage.</p>
            </div>
            <!-- <p>Our Siam Thai Spa centre is run independently by a leading Thai wellness company ensuring uncompromising quality.</p> -->
            <a href="services.html" class="def-btn btn-md">Our Services <span class="flaticon-right-arrow"></span></a>
            <a href="tel:800661578" class="def-btn btn-md outline"><i class="flaticon-phone"></i>Make a call </a>
          </div>
        </div>
        <!-- About Us Content Area end -->
      </div>
    </div>
  </section>
  <!-- About Us Section end -->

  
  <!-- About Us PHP-2 -->
  <?php
            }
        }
        else {
            echo "0 results";
        }
    }
    else{
        echo "Result empty";
    }
    mysqli_close($conn);
  ?>
  <!-- About Us PHP-2 End-->




  <!-- Our Service Section -->
  <section class="our-service-wrapper bg-light section">
    <div class="container">
      <div class="row justify-content-center text-center">
        <!-- Section Title  -->
        <div class="col-md-10 col-lg-8 col-xl-6 wow jackInTheBox" data-wow-delay="0.3s">
          <div class="section-title2">
            <h2 class="title">Relax Zone <span>Our Services</span></h2>
            <p class="text">Feelings Beauty Care is wide range of services offers you the latest trends and techniques in creative styling, coloring, extensions, perming, straightening and rebounding.</p>
          </div>
        </div>
      </div>
      <div class="row service-slider-active wow fadeInUp" data-wow-delay="0.3s">
        <!-- Single Service -->
        <div class="col-xl-3 ">
          <div class="single-service">
            
            <div class="service-icon ">
              <span class="bg-icon flaticon-stones-2"></span>
              <span><i class="flaticon-spa"></i></span>
            </div>
            <div class="service-content">
              <h3 class="service-title"><a href="single-service.html">Beauty Academy</a></h3>
              
            </div>
          </div>
        </div>
        <!-- Single Service end -->
        <!-- Single Service -->
        <div class="col-xl-3">
          <div class="single-service">
             <!-- Icon -->
             <div class="service-icon ">
               <span class="bg-icon flaticon-essential"></span>
               <span><i class="flaticon-wax"></i></span>
             </div>
             <div class="service-content">
               <h3 class="service-title"><a href="single-service.html">Hair Style</a></h3>
               
             </div>
           </div>
        </div>
        <!-- Single Service end -->
        <!-- Single Service -->
        <div class="col-xl-3">
          <div class="single-service">
            <!-- Icon -->
            <div class="service-icon ">
              <span class="bg-icon flaticon-teapot"></span>
              <span><i class="flaticon-facial-treatment"></i></span>
            </div>
            <div class="service-content">
              <h3 class="service-title"><a href="single-service.html">Skin Care</a></h3>
              
            </div>
          </div>
        </div>
        <!-- Single Service end -->
        <!-- Single Service -->
        <div class="col-xl-3">
          <div class="single-service">
            <!-- Icon -->
            <div class="service-icon ">
              <span class="bg-icon flaticon-lotus-1"></span>
              <span><i class="flaticon-cosmetics"></i></span>
            </div>
            <div class="service-content">
              <h3 class="service-title"><a href="single-service.html">Makeup</a></h3>
              
            </div>
          </div>
        </div>
        <!-- Single Service end -->
        <!-- Single Service -->
        <div class="col-xl-3">
          <div class="single-service">
            <!-- Icon -->
            <div class="service-icon ">
              <span class="bg-icon flaticon-cosmetics-1"></span>
              <span><i class="flaticon-mascara"></i></span>
            </div>
            <div class="service-content">
              <h3 class="service-title"><a href="single-service.html">Hair Care</a></h3>
              
            </div>
          </div>
        </div>
        <!-- Single Service end -->
      </div>
    </div>
  </section>
  <!-- Our Service Section end -->





  <!-- CTA Area Wrapper -->
  <section class="cta-wrapper pt-120 pb-90">
    <div class="container">
      <div class="row">
        <!-- Appointment Form -->

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
         
          <form action="" method="POST" class="appointment-form bg-light">
            <!-- Form Title -->
            <div class="form-title d-flex">
              <div class="title-icon ">
                <span class="flaticon-calendar"></span>
              </div>
              <div class="content">
                <span>Get relax any day & any Time</span>
                <h2 class="title">Our Staff Will Contact You</h2>
              </div>
            </div>
            <div class="form-row">
              <!-- Single Input -->
              
              <div class="form-group col-md-6">
                <label class="sr-only" for="firstName">First Name</label>
             
                <input id="FirstName" value="" class="form-control" type="text" name="firstName" placeholder="First name">
                <h6  id="errFirstName"  style="color: red; padding-top: 10px;"></h6>
            
               
              </div>
              <!-- Single Input -->
              <div class="form-group col-md-6">
                <label class="sr-only" for="lastName">Last Name</label>
                <input id="LastName" class="form-control" type="text" name="lastName" placeholder="Last name">
                <h6  id="errLastName"  style="color: red; padding-top: 10px;"></h6>
              </div>
              <!-- Single Input -->
              <div class="form-group col-md-6">
                <label class="sr-only" for="email">Email Address</label>
                <input id="email" class="form-control" type="email" name="email" placeholder="Email address">
                <h6  id="errEmail"  style="color: red; padding-top: 10px;"></h6>
              </div>
              <!-- Single Input -->
              <div class="form-group col-md-6">
                <label class="sr-only" for="number">Phone Number</label>
                <input id="number" class="form-control" type="text" name="mobileNumber" placeholder="Phone number">
                <h6  id="errMobile"  style="color: red; padding-top: 10px;"></h6>
              </div>             
              <!-- Single Input -->
              <div class="form-group col-12 select-box-wrap">
                <label class="sr-only" for="subject">Select Subject</label>
                <select id="subject" class="form-control" name="subject">
                  <option>Select Subject</option>
                  <option>Spa and Beauty</option>
                  <option>Skin Facial</option>
                  <option>Hair Cutting</option>
                  <option>Manicure & Pedicure</option>
                  <option>Facial & Therophy</option>
                  <option>Other</option>
                </select>
              </div>
              <!-- Single Input -->
              <div class="form-group col-12">
                <label class="sr-only" for="dateAndTime">Select Date & Time</label>
                <input id="dateAndTime" class="form-control" type="text" name="dateAndTime"
                  placeholder="Select Date & Time">
                <span class="flaticon-calendar"></span>
              </div>
              <!-- Single Input -->
              <div class="form-group col-12 mb-0 text-center">
                <button class="def-btn" name="submit" type="submit">Get In Touch<span
                    class="flaticon-right-arrow"></span></button>
              </div>
            </div>
          </form>
        </div>
        <!-- Appointment Form end -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          
          
          <!-- Youtube Links PHP-1 -->
          <?php
              include('db.php');
              $result = mysqli_query($conn, "SELECT * FROM `youtube-links`");
              if($result){
              if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
          ?>
          <!-- Youtube Links PHP-1 End-->   
          
          
          <!-- CTA box -->
          <div class="iframe-container">
            <iframe width="560" height="315" src="<?php echo $row['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div></br>
          <!-- CTA box end -->

          <!-- Youtube Links PHP-2 -->
          <?php
                    }
                }
                else {
                    echo "0 results";
                }
            }
            else{
                echo "Result empty";
            }
            mysqli_close($conn);
          ?>
          <!-- Youtube Links PHP-2 End-->

  
        </div>
      </div>
    </div>
    <!-- Flower shapes -->
    <div class="flower-shape shape-2">
      <img src="assets/img/icons/flowers-shape.png" alt="Flowers">
    </div>
  </section>
  <!-- CTA Area Wrapper end -->




  
  <!-- Section Separator -->
  <div class="container">
    <div class="sec-separator wow jackInTheBox" data-wow-delay="0.3s">
      <span class="flaticon-lotus-flower"></span>
    </div>
  </div>

  <!-- Admin Info PHP-1 -->
  <?php
     include('db.php');
      $result = mysqli_query($conn, "SELECT * FROM `admin-info` WHERE id=1");
      if($result){
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          if($row = mysqli_fetch_assoc($result)) {
  ?>
  <!-- Admin Info PHP-1 End-->
  
  <!-- About Funfact -->
  <section class="about-funfact-wrapper section">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <!-- Funfact Image -->
          <div class="funfact-img js-tilt">
            <img src="<?php echo $row['image']; ?>" alt="Fun Fact">
          </div>
          <!-- Funfact Image end -->
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <!-- Funfact content -->
          <div class="funfact-content">
            <!-- Section Title --> <!--"Love of beauty is taste. The creation of beauty is art."-->
            <div class="section-title"> 
              <span>The ‘Soul’ of <span>Feelings Beauty Care</span></span>
              <h2 class="title">Urmila Mengar</h2>
              <h3 class="small-title">She had already learnt Facial & Make-up at the age of 20. She is now 30 & she has achieved expertise in Hair Style, Saree-Style & Bridal Make-up.Love of beauty is taste. The creation of beauty is art. </h3>
            </div>

            <?php
                  }
                  }
                  else {
                      echo "0 results";
                  }
              }
              else{
                  echo "Result empty";
              }
              $result = mysqli_query($conn, "SELECT * FROM `admin-info` WHERE id=2");
              if($result){
              if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  if($row = mysqli_fetch_assoc($result)) {
            ?>

            <!-- Quote -->
            <div class="inner-quote d-md-flex align-items-center">
              <!-- Quote Image -->
              <div class="quote-img js-tilt">
                <img src="<?php echo $row['image']; ?>" alt="Fan Fact Thumb Image">
              </div>
              <div class="quote-content">
                <p>Feelings Beauty Care staff is a team of dedicated professionals & you will find all our stylists to be very professional, courteous and
                warmly smiling to serve and pamper you</p>
              </div>
            </div>
            <!-- Counter Box -->
            <div class="counter-box-wrapper d-md-flex">
              <!-- single counter box -->
              <div class="single-counter">
                <i class="flaticon-group"></i>
                <span class="counter">2000</span>
                <p>Bridal</p>
              </div>
              <!-- single counter box -->
              <div class="single-counter">
                <i class="flaticon-worldwide"></i>
                <span class="counter">6000</span>
                <p>Customers</p>
              </div>
            </div>
          </div>
          <!-- Funfact content end -->
        </div>
      </div>
    </div>
  </section>
  <!-- About Funfact end -->
  
  <!-- Admin Info PHP-2 -->
  <?php
            }
        }
        else {
            echo "0 results";
        }
    }
    else{
        echo "Result empty";
    }
    mysqli_close($conn);
  ?>
  <!-- Admin Info PHP-2 End-->



  <!-- Section Separator -->              
  <div class="container">
      <div class="sec-separator wow jackInTheBox" data-wow-delay="0.3s">
        <span class="flaticon-lotus-flower"></span>
      </div>
    </div>
  </br>





  <!-- Career Courses -->
  <section class="price-plans-wrapper pt-120 background-image"
    data-src="assets/img/bg-img/price-plans-bg.webp">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-7 offset-lg-5 offset-xl-6">
          <!-- Section Title -->
          <div class="section-title wow zoomIn" data-wow-delay="0.3s">
            <h3 style="color: #fff; font-family: Raleway,sans-serif;" >We offer high quality beauty courses focused on theory as well as practical learning.</h3>
            <h2 class="title" style="color: #fff; font-family: Raleway,sans-serif;" >Career Courses</h2>
          </div>
          <!-- Price Plans Content -->
          <div class="price-plans-content wow fadeInUp" data-wow-delay="0.4s">
            
            <!-- Career Courses PHP-1 -->
            <?php
                include('db.php');
                $result = mysqli_query($conn, "SELECT * FROM `career-courses`");
                if($result){
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
            ?>
            <!-- Career Courses PHP-1 End-->  
            
            <!-- Single Price Plan -->
            <div class="single-price-plan d-sm-flex align-items-center">
              <div class="img js-tilt">
                <a href="#"><img src="<?php echo $row['image']; ?>" alt="Price Plan"></a>
              </div>
              <div class="content" >
                <h4><?php echo $row['coursename']; ?></h4>
                <p><?php echo $row['type']; ?></p>
              </div>
            </div>
            <!-- Single Price Plan End -->
            
            <!-- Career Courses PHP-2 -->
            <?php
                      }
                  }
                  else {
                      echo "0 results";
                  }
              }
              else{
                  echo "Result empty";
              }
              mysqli_close($conn);
            ?>
            <!-- Career Courses PHP-2 End-->

          </div>
          <!-- Price Plans Content end -->
        </div>
      </div>
    </div>
  </section>
  <!-- Career Courses end -->




  <!-- Testomonial Area -->
  <section class="testomonial-sec-wrapper">
    <!-- <div class="container"> -->
      <!-- Quote icon -->
      <!-- <div class="quote-shape text-center">
        <span class="flaticon-quote"></span>
      </div>    
      <div class="row text-center justify-content-center wow zoomIn" data-wow-delay="0.3s">
        <div class="col-xl-10"> -->
          <!-- Testomonial Slider -->
          <!-- <div class="testomonial-slider-wrapper testomonial-slider-active"> -->
            <!-- Single Testomonial -->
            <!-- <div class="single-testomonial">
              <h2 class="title">The evening has been fantastic great food & good entertainment nothing short.</h2>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            </div> -->
            <!-- Single Testomonial end -->
            <!-- Single Testomonial -->
            <!-- <div class="single-testomonial">
              <h2 class="title">The night was so exicted with full of satisfication with a good service and food.</h2>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            </div> -->
            <!-- Single Testomonial end -->
            <!-- Single Testomonial -->
            <!-- <div class="single-testomonial">
              <h2 class="title">Highly recommended to take there service. High quality service with a good care.</h2>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            </div> -->
            <!-- Single Testomonial end -->
            <!-- Single Testomonial -->
            <!-- <div class="single-testomonial">
              <h2 class="title">A great start of the day with a Wonderful massage. Full day enjoyed a great freshness.</h2>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            </div>-->  
          <!-- Single Testomonial end -->
          <!-- </div> -->
          <!-- Testomonial Slider end -->
          <!-- bottom Shape -->
          <!-- <div class="bottom-shape"></div>
        </div>      
        <div class="col-md-5 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s"> -->
          <!-- Testomonial Slider Nav -->
          <!-- <div class="testomonial-slider-nav  testomonial-slider-nav-active"> -->                 
            <!-- Single Testomonial Nav -->
            <!-- <div class="single-testomonial-nav">
              <div class="testomonial-author">
                <img src="assets/img/testomonial/testomonial-author-1.png" alt="Testomonial Author">
              </div>
              <div class="testomonial-author-name">
                <h3 class="name"><a href="single-team.html">Rosalina D. William</a></h3>
                <span>Founder</span>
              </div>
            </div> -->
            <!-- Single Testomonial Nav end -->
            <!-- Single Testomonial Nav -->
            <!-- <div class="single-testomonial-nav">
              <div class="testomonial-author">
                <img src="assets/img/testomonial/testomonial-author-2.png" alt="Testomonial Author">
              </div>
              <div class="testomonial-author-name">
                <h3 class="name"><a href="single-team.html">Jen L. Marto</a></h3>
                <span>advisor</span>
              </div>
            </div> -->
            <!-- Single Testomonial Nav end -->
            <!-- Single Testomonial Nav -->
            <!-- <div class="single-testomonial-nav">
              <div class="testomonial-author">
                <img src="assets/img/testomonial/testomonial-author-3.png" alt="Testomonial Author">
              </div>
              <div class="testomonial-author-name">
                <h3 class="name"><a href="single-team.html">Lomote F. Kerla</a></h3>
                <span>CO - Founder</span>
              </div>
            </div> -->
            <!-- Single Testomonial Nav end -->
            <!-- Single Testomonial Nav -->
            <!-- <div class="single-testomonial-nav">
              <div class="testomonial-author">
                <img src="assets/img/testomonial/testomonial-author-4.png" alt="Testomonial Author">
              </div>
              <div class="testomonial-author-name">
                <h3 class="name"><a href="single-team.html">Minas Morola D.</a></h3>
                <span>CEO</span>
              </div>
            </div> -->
            <!-- Single Testomonial Nav end -->          
          <!-- </div> -->
          <!-- Testomonial Slider Nav end -->
        <!-- </div>
      </div>   -->  
    <!-- </div> -->
  </section>
  <!-- Testomonial Area end -->


  <!-- Customer Review Section -->
  <section class="blog-wrapper bg-light pt-120 pb-90">
    <div class="container">
      <div class="row justify-content-center text-center ">
        <!-- Section Title  -->
        <div class="col-md-10 col-lg-8 col-xl-6 jackInTheBox wow" data-wow-delay="0.3s">
          <div class="section-title2">
            <h2 class="title">Customer <span>Review</span></h2>
            <p class="text">We are dedicated to consistently providing high customer satisfaction by rendering excellent service, quality products, and furnishing an enjoyable atmosphere at an acceptable price/value relationship.<br></p>
          </div>
        </div>
      </div>
      <div class="row latest-blog-slider wow fadeInUp" data-wow-delay="0.3s">
        

        <!-- Customer Review PHP-1 -->
        <?php
          include('db.php');
          $result = mysqli_query($conn, "SELECT * FROM `customer-feedback`");
          if($result){
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
        ?>
        <!-- Customer Review PHP-1 End-->  
        
        
        <!-- Single Blog -->
          <div class="col-xl-4">
            <div class="single-latest-blog ">
              <!-- Blog Image -->
              <div class="img-box">
                <img src="<?php echo $row['image']; ?>" alt="Blog Image">
              </div>
              <!-- Blog Content -->
              <div class="latest-blog-content">
                <div class="blog-meta">
                  <p>
                    <span><i class="flaticon-calendar"></i> <?php echo $row['date']; ?> </span>
                  </p>
                </div>
                <h3 class="blog-title"> <?php echo $row["heading"]; ?> </h3>
                <p> <?php echo $row["description"]; ?> <br><br><br></p>
              </div>
            </div>
          </div>
        <!-- Single Blog end -->

        <!-- Customer Review PHP-2 -->
        <?php
              }
            }
            else {
              echo "0 results";
            }
          }
          else{
            echo "Result empty";
          }
          mysqli_close($conn);
        ?>
       <!-- Customer Review PHP-2 End-->


      </div>
    </div>
  </section>
  <!-- Customer Review Section end -->
  
    


  <!-- Footer -->
  <footer class="v2">
    <!-- Footer Wid Area -->
    <div class="footer-wid-area">
      <div class="container">
        <div class="row justify-content-between">
          <!-- Single Footer Wid -->
          <div class="col-md-6 col-lg-4 zoomIn wow" data-wow-delay="0.3s">
            <div class="widget footer-about">
              <div class="footer-logo">
                <a href="index.html"><img src="assets/img/logo-2.png" alt="Logo"></a>
              </div>
              <br><br>
              <p>The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base.</p>
              
            </div>
          </div>
          <!-- Single Footer Wid end -->
          <!-- Single Footer Wid -->
          <div class="col-md-6 col-lg-4 zoomIn wow" data-wow-delay="0.4s">
            <!-- Single Footer Wid -->
            <div class="widget footer-post-wrap">
              <h3>News Feeds</h3>
              <!-- Single Footer Post -->
              <div class="single-footer-post d-flex">
                <div class="img-box js-tilt">
                  <a href="news-details.html"><img src="assets/img/thumb-img/footer-post-1.jpg" alt="Footer Image"></a>
                </div>
                <div class="post-content">
                  <span><i class="flaticon-calendar"></i> 12th June 2020</span>
                  <h4 class="title">Managing Partner along with Senior Counsels.</h4>
                </div>
              </div>
              <!-- Single Footer Post -->
              <div class="single-footer-post d-flex">
                <div class="img-box js-tilt">
                  <a href="news-details.html"><img src="assets/img/thumb-img/footer-post-2.jpg" alt="Footer Image"></a>
                </div>
                <div class="post-content">
                  <span><i class="flaticon-calendar"></i> 12th June 2020</span>
                  <h4 class="title">We giving special service for vip members.</h4>
                </div>
              </div>
              <!-- Single Footer Post -->
              <div class="single-footer-post d-flex">
                <div class="img-box js-tilt">
                  <img src="assets/img/thumb-img/footer-post-3.jpg" alt="Snow">
                </div>
                <div class="post-content">
                  <span><i class="flaticon-calendar"></i> 12th June 2020</span>
                  <h4 class="title">We are managing wedding special programme.</h4>
                </div>
              </div>
            </div>
            <!-- Single Footer Wid end -->
          </div>
          <!-- Single Footer Wid end -->
          <!-- single Widget -->
          <div class="col-lg-3 zoomIn wow" data-wow-delay="0.5s">
            <div class="widget">
              <h3>Reach US</h3>
              <!-- footer Links -->
              <div class="footer-links-area d-flex footer-widget-tweet">
                <!-- Single Links -->
                <ul class="footer-links w-50">
                  <!-- <li><a href="services.html">Services</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="home.html">Home</a></li> -->
                  <!-- <li><a href="tel:+91 8000661578"><span class="flaticon-phone">&nbsp;&nbsp;+91&nbsp;8000&nbsp;661&nbsp;578</a></span></li> -->
                  <!-- <li><a href="mailto:Info.feelingsbeautycare@gmail.com"><span class="flaticon-mail">&nbsp;&nbsp;Info.feelingsbeautycare@gmail.com</a></span></li> -->
                  <div><a href="mailto:Info.feelingsbeautycare@gmail.com" class="btn-theme icon-left bg-danger icon-left"><i class="flaticon-mail" style="color: #fff"></i>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
                  <div><a href="https://www.facebook.com/feelingsbeautycare" class="btn-theme icon-left"><i class="flaticon-facebook"></i>Facebook</a></div>
                  <div><a href="tel:8000661578" class="btn-theme icon-left bg-success"><i class="flaticon-whatsapp"></i>Whatsapp</a> </div>
                  <div ><a href="https://www.instagram.com/mengarurmi/" id="grad1" class="btn-theme icon-left bg-alert" style="background-color: #E1306C"><i class="flaticon-instagram"></i>Instagram</a></div>    
                </ul>
              </div>
            </div>
          </div>
          <!-- single Widget end -->
        </div>
      </div>
    </div>
    <!-- Footer Wid Area end -->



    <!-- Footer Copyright -->
    <div class="footer-copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5">
            <p>Copyright By@ Feelings Beauty Care - 2020</p>
          </div>
          <div class="col-md-7 text-right">
            <ul class="footer-social-menu">
              <li><a href="https://www.facebook.com/feelingsbeautycare" target="_blanck" class="circle-btn1">
                <i class="flaticon-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/mengarurmi/" target="_blanck" class="circle-btn1"><i class="flaticon-instagram"></i></a></li>
              <li><a href="tel:+91 8000661578" class="circle-btn1"><i class="flaticon-phone"></i></a></li>
              <!-- <li><a href="behance.html" class="circle-btn"><span class="flaticon-behance"></span></a></li>
              <li><a href="dribble.html" class="circle-btn"><span class="flaticon-dribble"></span></a></li>
              <li><a href="linkedin.html" class="circle-btn"><span class="flaticon-linkedin"></span></a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Copyright end -->


    <!-- BG Shape -->
    <div class="bg-shape">
      <img src="assets/img/icons/flowers-shape.png" alt="Flowers">
    </div>



  </footer>
  <!-- Footer end -->



  <!-- Scroll To Top -->
  <button class="scrollToTop circle-btn primary-btn "><i class="flaticon-up-arrow-1"></i></button>
  






    <!--Model Popup starts-->
    <div class="modal fade" id="thankyouModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
              </div>
    
              <div class="modal-body">
                <div class="thank-you-pop">
                  <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                  <h1>Thank You!</h1>
                  <p>Your submission is received and we will contact you soon</p>	
                </div>                  
              </div>
      
            </div>
        </div>
    </div>
  <!--Model Popup ends-->     

  <!-- Modal Error -->
    <div class="modal fade" id="errorModal" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
            </div>

            <div class="modal-body">
              <div class="thank-you-pop">
                <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                <h1>Error!</h1>
                <p>Something went wrong please try again later</p>	
              </div>                  
            </div>
    
          </div>
      </div>
    </div>
  <!-- Modal Error End -->








  <!-- Code end -->

  <!-- All Js Files -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.datetimepicker.min.js"></script>
    <script src="my.js" ></script>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById("myImg");
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() { 
        modal.style.display = "none";
      }

    </script>
  <!--All JS File End-->
  <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
  <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
  
    <script>
       

       $( document ).ready(function() {
         $( "#FirstName" ).keyup(function() {
           var fn = $('#FirstName').val();
           if(fn=='arjun'){
             $('FirstName').removeClass('invalid-tooltip')
             $('FirstName').addClass('valid-tooltip')
           }
           else{
             $('FirstName').addClass('valid-tooltip')
             $('FirstName').removeClass('invalid-tooltip')
           }
         });
       });
     </script>

</body> 

<!-- Mirrored from vecurosoft.com/products/html/mixlax/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 14:15:07 GMT -->
</html>



<?php
  if(isset($_REQUEST["submit"])){
    if( $_REQUEST["firstName"] || $_REQUEST["lastName"] ) {
      include('db.php');
      $firstname = $_REQUEST['firstName'];
      $lastname = $_REQUEST['lastName'];
      $email = $_REQUEST['email'];
      $phonenumber = $_REQUEST['mobileNumber'];
      $subject = $_REQUEST['subject'];
      $dateAndTime = $_REQUEST['dateAndTime'];
      
 
      $sql = "INSERT INTO `appointment-details` (firstName, lastName, email, phoneNumber, subject, dateAndTime) 
      VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$subject', '$dateAndTime')";

      if (mysqli_query($conn, $sql)) {
        echo "<script>$('#thankyouModal').modal('show')</script>";
      } else {
        echo "<script>$('#errorModal').modal('show')</script>";
      }
 

      exit();
    }
  }

?>