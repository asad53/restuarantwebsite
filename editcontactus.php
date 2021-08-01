<?php
session_start();
if(isset($_SESSION['ud']))
{
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
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="adminpage.php">Spicy Mystery</a></div>
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
                        <li><a href="adminpage.php">Admin</a></li>
                        <li class="active"><a href="editopenhours.php">Edit Open Hours</a></li>
                        <li><a href="editaboutus.php">Edit About Us</a></li>
                        <li><a href="editcontactus.php">Edit Contact Us</a></li>
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

  
  <section class="section bg-image overlay" style="background-image: url('images/adminback.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading text-white" data-aos="fade">Contact Us</h2>
          </div>      
        </div>
      </div>
    </section>
  
    <section class="section bg-image overlay" style="background-color: lightblue;">

      <div class="container">
        <h3 style="color: white; text-align: center;">Contacts</h3>
        <br>
        <table border="2" align="center" style="width:110%; margin-top=50px; color: white;">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Reply</th>
        <th>Edit Reply</th>
    </tr>
    

<?php

include('dbcon.php');
  
    
    $qry = "SELECT * from contactus;";
    $run = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($run)<1){
        ?>
        <td>No Messages!</td>
        <td>No Messages!</td>
        <td>No Messages!</td>
        <td>No Messages!</td>
        <td>No Messages!</td>
        <td>No Messages!</td>
        <?php
        
    }else{
        $a =1;
        while($data=mysqli_fetch_assoc($run)){
            ?>
           
            <tr>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['phone'];?></td>
                    <td><?php echo $data['message']?></td>
                    <td><?php echo $data['reply']?></td>
                    <td><form action="reply.php?eid=<?php echo $data['cid'];?>" method="post"> <input type="text" name="reply"> <input type="submit" name="submit" value="Reply"></form></td> 
            </tr>
            
            
    
            <?php
                
        }
        
    }
    


?>

</table>
      </div>
      </section>

      <br>
      <br>

      <section class="section bg-image overlay" style="background-color: lightblue;">

      <div class="container">
        <h3 style="color: white; text-align: center;">Address</h3>
        <br>
        <table border="2" align="center" style="width:110%; margin-top=50px; color: white;">
    <tr>
        <th>Address</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Edit</th>
    </tr>
    

<?php
  
    
    $qry1 = "SELECT * from websiteinfo;";
    $run1 = mysqli_query($con, $qry1);
    
    if(mysqli_num_rows($run1)<1){
        ?>
        <td>None</td>
        <td>None</td>
        <td>None</td>
        <?php
        
    }else{
        $a =1;
        while($data1=mysqli_fetch_assoc($run1)){
            ?>
           
            <tr>
                    <td><?php echo $data1['address'];?></td>
                    <td><?php echo $data1['latitude'];?></td>
                    <td><?php echo $data1['longitude'];?></td>
                    <td><form action="address.php?llid=<?php echo $data1['address'];?>" method="post"> <input type="text" placeholder="Address" name="ad"> <input type="text" placeholder="Latitude" name="lat"> <input type="text" placeholder="Longitude" name="lon"><input type="submit" name="submit" value="Edit"></form></td> 
            </tr>
            
            
    
            <?php
                
        }
        
    }
    


?>

</table>
      </div>
      </section>

    <footer class="section footer-section">
      <div class="container">
       
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
    <script src="js/main.js"></script>
    <script>
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }
  </script>
  </body>
</html>

<?php
  }
  else
  {

    ?>
            <script>alert('Not Logged In!');
            window.open('Login1.html','_self');
            </script>
             <?php

  }

?>