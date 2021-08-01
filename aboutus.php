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
                        <li class="active"><a href="aboutus.php">About Us</a></li>
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
            <h1 class="heading mb-3">About Us</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>About</li>
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

    <?php
            include('dbcon.php');
            $qry ="select * from aboutus;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
            ?>

    <section class="py-5 bg-light" id="next">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="<?php echo $data['minipicture']; ?>" alt="Free Website Template by Templateux" class="img-fluid">
            </figure>
            <img src="<?php echo $data['mainpicture']; ?>" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            
            <h2 class="heading"><?php echo $data['title'] ?></h2>
            <p class="mb-4"><?php echo $data['about'] ?></p>
            <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="<?php echo $data['videolink'] ?>"  data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
          </div>
          
        </div>
      </div>
    </section>

    <div class="container section">
      <?php

      $qry ="select * from officers where id=1;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);

    ?>

      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7 mb-5">
          <h2 class="heading" data-aos="fade-up">Leadership</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(<?php echo $data['picture'] ?>);">
                <div class="box">
                  <h2><?php echo $data['name'] ?></h2>
                  <p><?php echo $data['role'] ?></p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;<?php echo $data['about'] ?>&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="<?php echo $data['picture'] ?>" alt="">
                  </div>
                  <div class="name align-self-center"><?php echo $data['name'] ?> <span class="position"><?php echo $data['role'] ?></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

         <?php

      $qry ="select * from officers where id=2;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);

    ?>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(<?php echo $data['picture'] ?>);">
                <div class="box">
                  <h2><?php echo $data['name'] ?></h2>
                  <p><?php echo $data['role'] ?></p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;<?php echo $data['about'] ?>&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="<?php echo $data['picture'] ?>" alt="">
                  </div>
                  <div class="name align-self-center"><?php echo $data['name'] ?> <span class="position"><?php echo $data['role'] ?></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

         <?php

      $qry ="select * from officers where id=3;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);

    ?>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(<?php echo $data['picture'] ?>);">
                <div class="box">
                  <h2><?php echo $data['name'] ?></h2>
                  <p><?php echo $data['role'] ?></p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;<?php echo $data['about'] ?>&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="<?php echo $data['picture'] ?>" alt="">
                  </div>
                  <div class="name align-self-center"><?php echo $data['name'] ?> <span class="position"><?php echo $data['role'] ?></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>
      </div>
    </div>
    <!-- END .block-2 -->

   

    <div class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7 mb-5">
            <h2 class="heading" data-aos="fade">History</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="timeline-item" date-is='2021' data-aos="fade">
              <h3>More Branches Worldwide</h3>
              <p>We have worldwide branches of our food now. We cater everywhere have splendid reviews by our customer</p>
              <p>There is nothing that can't be acheived with hardwork.</p>
            </div>
            
            <div class="timeline-item" date-is='2011' data-aos="fade">
              <h3>Company Full Blast</h3>
              <p>
                We started to create new dishes which contain new flavour and was accepted and appreciated by community
              </p>
            </div>
            
            <div class="timeline-item" date-is='2008' data-aos="fade">
              <h3>The Birth of the Company</h3>
              <p>
                Far far away, we originate from the locals of this country. Specialize in food spicy and hot cuisine.
              </p>
            </div>
          </div>
        </div>
        

      </div>
    </div>

    
    
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
