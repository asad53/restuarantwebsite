<?php
session_start();
if(!isset($_SESSION['ud']))
{
//index.php

//Include Configuration File
include('config.php');
include('dbcon.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Google Account Log In</h2>
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   { 
    $mail=$_SESSION['user_email_address'];
    $fname=$_SESSION['user_first_name'];
    $lname=$_SESSION['user_last_name'];
    $pic=$_SESSION["user_image"];
    $imagename='images-faces/'.$fname.'.jpg';
    $tosave=$fname.'.jpg';

     $qry ="select adminid,email,firstname, lastname,password from admin where email='$mail' and firstname='$fname' and lastname='$lname';";
    
    $run = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($run)<1){
    //move_uploaded_file($pic,"images-faces/$finalphoto");
    
    copy($pic, $imagename);
    $qry ="INSERT INTO `admin`(`adminid`, `firstname`, `lastname`,`imageurl`, `email`, `password`) VALUES (NULL,'$fname','$lname','$tosave','$mail','123')";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true){
      $qry ="select adminid,email,firstname, lastname,password from admin where email='$mail' and firstname='$fname' and lastname='$lname';";
    
      $run = mysqli_query($con, $qry);

      $data=mysqli_fetch_assoc($run);

        $_SESSION['ud']=$data['adminid'];
        $_SESSION['usname']=$data['firstname'];
        ?>
            <script>alert('Not A User! Account Created');
             window.open('index.php','_self');
            </script>
             <?php
        
    }
    else
    {
        ?>
            <script>alert('Database Error!');
             window.open('index.php','_self');
            </script>
             <?php
    }
        
        
    }
    else
    {
        $qry ="select adminid,email,firstname, lastname,password from admin where email='$mail' and firstname='$fname' and lastname='$lname';";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);

        $_SESSION['ud']=$data['adminid'];
        $_SESSION['usname']=$data['firstname'];
        ?>
            <script>alert('Welcome!');
             window.open('index.php','_self');
            </script>
             <?php
        
    }
        
}
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html>
<?php
}
else
{
  ?>
            <script>alert('Already Logged In!');
             window.open('index.php','_self');
            </script>
             <?php
}