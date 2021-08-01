<?php
session_start();
if(isset($_POST['submit'])){
    
    include('dbcon.php');

    $eid = $_GET['eid'];
    
    
    $rep = $_POST['reply'];

    
    
    $qry ="select email from contactus where cid='$eid' LIMIT 1;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $mail=$data['email'];

$to_email = $mail;
$subject = "Message From Spicy";
$body = $rep;
$headers = "From: sender email";

    $qry ="UPDATE contactus set reply='$rep' where cid='$eid'";
    
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
            <script>alert('Database Error Or No Email Sent!');
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