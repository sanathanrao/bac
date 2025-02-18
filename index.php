<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tediua</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="https://imgmedia.lbb.in/media/2019/10/5daf295896edf48a0b9dd3d5_1571760472347.jpg" type="image/x-icon">
</head>
<body>
  <!-- ------------------------------------------ -->

   <!-- Main Navbar -->
   <div class="navbar">
    <span class="toggle-btn" onclick="toggleSideNav()">☰</span>
    <img class="logo" src="images/poifis1.png" alt="">
  </div>

<!-- Side Navigation -->
<div id="sideNav" class="side-nav">
  <div class="lgnae">
    <a href="index.php">
     <img class="logo" src="images/poifis1.png" alt="">
     <h3 class="srfe">Sorshe</h3>
  </a>
  </div>
    <a class="hdm" href="./index.php">Home</a>
    <a class="hdm" href="show_1.php">Digital Menu</a>
    <a href="show_1.php"><h4 class="listfoodes">Stater</h4></a>
    <a href="show_2.php"><h4 class="listfoodes">Main Course</h4></a>
    <a href="show_3.php"><h4 class="listfoodes">Rice</h4></a>
    <a href="show_4.php"><h4 class="listfoodes">Desserts</h4></a>
    <a href="show_5.php"><h4 class="listfoodes">Combos</h4></a>
    <a href="show_6.php"><h4 class="listfoodes">Beverages</h4></a>
</div>

<!-- Overlay for clicking outside -->
<div id="overlay" class="overlay" onclick="closeSideNav()"></div>
<!-- -------------------------------------------------------- -->
  <div class="delissgif">
    <!-- <img class="firsgmadsei" src="https://d3kanykijpjn5y.cloudfront.net/a9882e05ae2b62aaea603e274363a455.gif" alt=""> -->
    <video class="vi" width="500" height="900" autoplay muted controls>
      <source src="gallery/d.mp4" type="video/mp4">
    </video>
  </div>

 <div class="imgsrpro">
  <img class="swiggi" src="images/swiggi&zomaot.png" alt="">
 </div>


  <!-- --------------------------------------------------------------------------------- -->
  <h1 class="menunewupdate">MENU</h1>

   <div class="cater">

     <a href="show_1.php">
       <img
       src="gallery/DSC00475.JPG"
       alt="cat-sleeping"
     />
      <h3 class="menustater">Staters</h3>
     </a>
    
     <a href="show_2.php">
       <img
       src="gallery/DSC00489.JPG"
       alt="cat-sleeping"
     />
     <h3 class="menustater">Main Course</h3>
     </a>

     <a href="show_3.php">
       <img
       src="gallery/basanti.jpg"
       alt="cat-sleeping"
     />
     <h3 class="menustater">Rice</h3>
     </a>

     <a href="show_4.php">
       <img
       src="gallery/dsco1.png"
       alt="cat-sleeping"
     />
     <h3 class="menustater">Desserts</h3>
     </a>

     <a href="show_5.php">
       <img
       src="gallery/DSC00464.JPG"
       alt="cat-sleeping"
     />
     <h3 class="menustater">Combos</h3>
     </a>

     <a href="show_6.php">
      <img
      src="gallery/DSC00415.JPG"
      alt="cat-sleeping"
    />
    <h3 class="menustater">Beverages</h3>
    </a>
     
   </div>
   <!-- -------------------------About Us--------------------------------------- -->
    <div class="aboutus">
      <h1 class="menunewupdate">ABOUT US</h1>
      <p class="weltopro">Welcome to The Sorshe Authentic Bengali Restaurant, where every dish tells a story and every meal feels like a warm embrace from home. As passionate curators of Bengali cuisine, we are proud to share the rich tapestry of flavors and traditions that have been passed down through generations in our families. Each recipe is crafted with love and care, 
        reflecting not just our heritage but also our deep connection to the vibrant culture of Bengal.</p>

        <div class="socailim">
          <a href="https://www.instagram.com/sorshe_hyd/"><img class="fbim" src="images/follinsta.jpeg" alt=""></a>
          <a href="https://www.facebook.com/people/Sorshe-Authentic-Bengali-Restaurant/61563899410482/"><img class="fbim" src="images/fbfoll.jpeg" alt=""></a>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->

     <!-- <div class="gallerysection">
        <h1 class="menunewupdate">Gallery</h1>

  
        <div class="gallery">
          <div class="gallery-item" onclick="openLightbox();currentSlide(1)">
            <img src="images/RAJ_5854.JPG" alt="Menu Item 1">
          </div>
          <div class="gallery-item" onclick="openLightbox();currentSlide(2)">
            <img src="images/RAJ_5871.JPG" alt="Menu Item 2">
          </div>
          <div class="gallery-item" onclick="openLightbox();currentSlide(3)">
            <img src="images/RAJ_5877.JPG" alt="Menu Item 3">
          </div>
          <div class="gallery-item" onclick="openLightbox();currentSlide(4)">
            <img src="images/RAJ_5895.JPG" alt="Menu Item 4">
          </div>
          <div class="gallery-item" onclick="openLightbox();currentSlide(5)">
            <img src="images/RAJ_5898.JPG" alt="Menu Item 5">
          </div>
          <div class="gallery-item" onclick="openLightbox();currentSlide(6)">
            <img src="images/RAJ_5920.JPG" alt="Menu Item 6">
          </div>
          <div class="gallery-item" onclick="openLightbox();currentSlide(7)">
            <img src="images/RAJ_5937.JPG" alt="Menu Item 7">
          </div>
          <div class="gallery-item" onclick="openLightbox();currentSlide(8)">
            <img src="images/RAJ_5941.JPG" alt="Menu Item 8">
          </div>
          <div class="gallery-item" onclick="openLightbox();currentSlide(9)">
            <img src="images/RAJ_5944.JPG" alt="Menu Item 9">
          </div>
        </div>
        
        Lightbox
        <div id="lightbox" class="lightbox">
          <span class="close" onclick="closeLightbox()">&times;</span>
          <div class="lightbox-content">
            <div class="slide">
              <img src="images/RAJ_5854.JPG" alt="Menu Item 1">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
      
            <div class="slide">
              <img src="images/RAJ_5871.JPG" alt="Menu Item 2">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
            
            <div class="slide">
              <img src="images/RAJ_5877.JPG" alt="Menu Item 2">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
      
            <div class="slide">
              <img src="images/RAJ_5895.JPG" alt="Menu Item 2">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
      
            <div class="slide">
              <img src="images/RAJ_5898.JPG" alt="Menu Item 2">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
      
            <div class="slide">
              <img src="images/RAJ_5920.JPG" alt="Menu Item 2">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
      
            <div class="slide">
              <img src="images/RAJ_5937.JPG" alt="Menu Item 2">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
      
            <div class="slide">
              <img src="images/RAJ_5941.JPG" alt="Menu Item 2">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
      
            <div class="slide">
              <img src="images/RAJ_5944.JPG" alt="Menu Item 2">
              <span class="close" onclick="closeLightbox()">&times;</span>
            </div>
      
             Add more slides for other images
          </div>
          <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
          <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
  
  
     </div> -->




<!-- ----------------- -->
         
         <div class="mapssorshe">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.0446919179954!2d78.36602839999999!3d17.457574900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93c8867fe8c7%3A0x5048965d1aea9693!2sParadigm%20SSS%20Square!5e0!3m2!1sen!2sin!4v1726569089017!5m2!1sen!2sin" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
<!-- --------------------------- -->

<div style="padding:10px;font-size:14px; background-color: #a6a6a6;margin: 0px auto;" >
  <div class="footer">
     <h2 style="text-align: center;"><img alt="" src="images/poifis1.png" style="width: 150px; height: 150px;;" /></h2>
     <p style="text-align: center; margin: 10px 0;"><span style="color:#ffffff;"><span style="background-color:#f1c40f;">&nbsp;Dine-In | Takeaway&nbsp;</span></span></p>
     <h3 style="text-align: center; margin: 10px 0;"><span style="color:#ffffff;"><strong>Average Cost</strong></span></h3>
     <p style="text-align: center; margin: 10px 0;"><span style="color:#ffffff;">INR 800 for two people (approx)</span><br />
        &nbsp;
     </p>
     <h2 style="text-align: center; margin: 10px 0;"><span style="color:#ffffff;"><strong>OPENING HOURS</strong></span></h2>
     <p style="text-align: center; margin: 10px 0;"><span style="color:#ffffff;">Mon-Sun:11:30am – 4pm, 7pm – 10:30pm<br />
      <br />
        Happily Serving You Everyday!</span>
     </p>
     <hr />
     <h2 style="text-align: center; margin: 10px 0;"><span style="color:#ffffff;"><strong>CONTACT US</strong></span></h2>
     <p style="text-align: center; margin: 10px 0;">
        <a href="mailto:manager@prost.in"><span style="color:#000000;"><img alt="" src="https://d3kanykijpjn5y.cloudfront.net/a2144c8cf28a0c69c4d554098bf5e024.png" style="width: 18px; height: 22px; margin: -7px;" />&nbsp; </span><span style="color:#2c3e50;">&nbsp;</span><span style="color:#ffffff;">admin@sorshe.in</span></a><br />
        <br />
        <a href="https://wa.me/919115526999" target="_blank">
           <style type="text/css">A {text-decoration: none;}</style>
           <span style="color:#000000;"><img alt="" src="https://d3kanykijpjn5y.cloudfront.net/c04a145ff30e8a9667770b3e89d5a741.png" style="width: 18px; height: 18px; margin: -4px;" />&nbsp; &nbsp;</span><span style="color:#ffffff;">WhatsApp : +91 7331160456</span>
        </a>
        <br />
        <br />
        <span style="color:#ffffff;">&nbsp;&nbsp;<img alt="" src="https://d3kanykijpjn5y.cloudfront.net/b342e086c36ed736b34c1a662107cbca.png" style="width: 19px; height: 19px; margin: -4px;" />&nbsp;UNIT NO. 305, 3RD FLOOR, 2-91/35(P)/PSSS/305, PARADIGM SSS SQUARE,<br />
          OPPOSITE SARATH CITY CAPITAL MALL, WHITEFIELDS, KONDAPUR, Hyderabad, Telangana, 500081</span><br />
        <span style="color:#ffffff;">&nbsp;</span>
     </p>
     <h3 style="text-align: center; margin: 10px 0;"><strong><span style="color:#ffffff;">FOLLOW US</span></strong></h3>
     <h2 style="text-align: center;"><span style="color:#000000;"><strong><a href="https://www.facebook.com/people/Sorshe-Authentic-Bengali-Restaurant/61563899410482/"><img alt="" src="https://d3kanykijpjn5y.cloudfront.net/8b45317af95f599008a0831c72050253.png" style="width: 20px; height: 20px;" /></a>&nbsp;<a href="https://www.instagram.com/sorshe_hyd/"><img alt="" src="https://d3kanykijpjn5y.cloudfront.net/83683ea2a4cf5b8c622f9db62bcae7ef.png" style="width: 20px; height: 20px;" /></a></strong></span></h2>
     <hr />
     <p style="text-align: center; margin: 10px 0;"><span style="color:#ffffff;">@Copyright 2024 Sorshe&nbsp;<br />
        <img alt="" src="https://d3kanykijpjn5y.cloudfront.net/5ba4f2c1f1de5f4577e5881c99296d59.png" style="width: 45px; height: 22px;" />&nbsp;<br />
        <!-- License Number:&nbsp;</span><span style="color:#ffffff;">13621011001081<br /> -->
        <!-- <a href="https://upsalesuite.com/"><img alt="" src="https://d3kanykijpjn5y.cloudfront.net/0699c98f38480f1e2df01957e2c878dc.png" style="width: 150px; height: 25px;" /></a></span> -->
     </p>
  </div>
</div>












   <script src="script.js"></script>

</body>
</html>