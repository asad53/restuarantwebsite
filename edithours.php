<?php
session_start();
if(isset($_POST['submit'])){
    
    include('dbcon.php');

    $sid = $_GET['sid'];
    
    
    $newval = $_POST['newhours'];

    
    
    $qry ="select id from openinghours order by id DESC limit 1;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $latid=$data['id']+1;

    $qry ="select orderid from openinghours where Day='$sid' LIMIT 1;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $latorderid=$data['orderid'];

    $qry ="INSERT INTO `openinghours`(`id`, `Day`, `Hours`,`orderid`) VALUES ('$latid','$sid','$newval','$latorderid')";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true){

        ?>
            <script>alert('Updated!');
             window.open('editopenhours.php','_self');
            </script>
             <?php
        
    }
    else
    {
        ?>
            <script>alert('Database Error!');
             window.open('editopenhours.php','_self');
            </script>
             <?php
    }
    
        
}
else
{
    ?>
            <script>alert('Error Submitting!');
            window.open('editopenhours.php','_self');
            </script>
             <?php
}
?>