<?php
include('dbcon.php');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
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
                        <li class="active"><a href="restaurant.php">Menu</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactme.php">Contact Us</a></li>
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
            <h1 class="heading mb-3">Restaurant</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Restaurant</li>
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
  
  <section class="section bg-image overlay" style="background-image: url('images/hero_3.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading text-white" data-aos="fade">Our Restaurant Menu</h2>
            <p class="text-white" data-aos="fade" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
           
          </ul>
          <div class="tab-content py-5" id="myTabContent">
            <div class="tab-pane fade show active text-left" role="tabpanel" aria-labelledby="mains-tab">
              <div class="row">
            
            <?php
            $qry ="select round(price,2) as price,name,about from menu;";
            $run = mysqli_query($con, $qry);
            $i=1;
            while($data=mysqli_fetch_assoc($run)){
      
                if (($i-1)%3==0 || $i==1) {
                  ?>
                  <div class="col-md-6">
                    <?php
                }

                ?>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$<?php echo $data['price']?></span>
                    <h3 class="text-white"><a href="#" class="text-white"><?php echo $data['name']?></a></h3>
                    <p class="text-white text-opacity-7"><?php echo $data['about']?></p>
                  </div>

                <?php

                if ($i%3==0)
                {
                  ?>
                  </div>
                  <?php
                }
                $i=$i+1;
              }
                ?>
              </div>
            </div>
              

            </div> <!-- .tab-pane -->
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