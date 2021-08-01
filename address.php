<?php
session_start();
if(isset($_POST['submit'])){
    
    include('dbcon.php');

    $lid = $_GET['llid'];
    
    
    $ad = $_POST['ad'];
    $lon = $_POST['lon'];
    $lat = $_POST['lat'];

    
    if ($ad=='')
    {
       $qry ="select address from websiteinfo;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $ad=$data['address'];
    }


    if ($lat=='')
    {
       $qry ="select latitude from websiteinfo;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $lat=$data['latitude'];
    }


    if ($lon=='')
    {
       $qry ="select longitude from websiteinfo;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $lon=$data['longitude'];
    }


    $qry ="UPDATE websiteinfo set address='$ad', latitude='$lat', longitude='$lon' where address='$lid'";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true) 
    {

        ?>
            <script>alert('Updated!');
             window.open('editcontactus.php','_self');
            </script>
             <?php
        
    }
    else
    {
        ?>
            <script>alert('Database Error!');
             window.open('editcontactus.php','_self');
            </script>
             <?php
    }
    
        
}
else
{
    ?>
            <script>alert('Error Submitting!');
            window.open('editcontactus.php','_self');
            </script>
             <?php
}
?>