<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spicy Mystery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.php">Spicy Mystery</a></div>
          <div class="col-6 col-lg-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                      <ul class="list-unstyled menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="adminpage.php">Admin Panel</a></li>
                        <li><a href="Login1.html">Log In</a></li>
                        <li><a href="restaurant.php">Menu</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li class="active"><a href="contactme.php">Contact Us</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero inner-page overlay" style="background-image: url(images/rest.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Contact Us</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            
            <form action="contactus.php" method="POST" enctype="multipart/form-data" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name = "name" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="number" name = "phone" id="phone" class="form-control ">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" name = "email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit"  name = "submit" value="Send Message" class="btn btn-primary text-white font-weight-bold">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <?php
                 include('dbcon.php');
    
    $qry = "SELECT * from websiteinfo;";
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    ?>
                <p><span class="d-block">Address:</span> <span><?php echo $data['address']?></span></p>
                <p><span class="d-block">Phone:</span> <span> (+1) 234 4567 8910</span></p>
                <p><span class="d-block">Email:</span> <span> info@spicymystery.com</span></p>
                <div id="map" style="width:400px;height:400px;background:grey"></div>
<script>
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: <?php echo $data['latitude']; ?>, lng: <?php echo $data['longitude']; ?> },
    zoom: 8,
  });
}

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmAZykO8YXLIoAnyAv1RIu0SJ3ZPX0WXk&callback=initMap"
  type="text/javascript"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="section bg-image overlay" style="background-image: url('images/funfood.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
              <h2 class="text-white font-weight-bold">A Best Place To Eat. Sign Up Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
              <a href="restaurant.php" class="btn btn-outline-white-primary py-3 text-white px-5">Menu</a>
            </div>
          </div>
        </div>
      </section>

   <footer class="section footer-section">
      <h3 style="text-align: center; color: white;">Open Hours</h3>
      <br>
      <div class="container">
        <div class="row mb-4">
          <table border="2" align="center" style="width:80%; margin-top=40px; color: white;">
    <tr>
        <th>Day</th>
        <th>Hours</th>
    </tr>
    

<?php
    
    
    $qry = "SELECT id, Day, Hours FROM openinghours WHERE id IN ( SELECT MAX(id) FROM openinghours GROUP BY Day) ORDER BY orderid ASC;";
    $run = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($run)<1){
        ?>
        <script>alert("No Hours!")</script>
        
        <?php
        
    }else{
        $a =1;
        while($data=mysqli_fetch_assoc($run)){
            ?>
           
            <tr>
                    <td><?php echo $data['Day'];?></td>
                    <td><?php echo $data['Hours']?></td>
            </tr>
            
            
    
            <?php
                
        }
        
    }
?>

</table>

        </div>
        <div class="row pt-5">
          <p class="col-md-6 text-left">
            Copyright &copy;2021 All rights reserved |
          </p>

          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-vimeo"></span></a>
          </p>
        </div>
      </div>
    </footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }
  </script>
  </body>
</html>
