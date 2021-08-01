<?php
session_start();
if(!isset($_SESSION['ud']))
{
if(isset($_POST['Login'])){
    
    include('dbcon.php');
    
    
    $mail = $_POST['email'];
    $pas = $_POST['password'];

    
    
    $qry ="select email,password from admin where email='$mail' and password='$pas';";
    
    $run = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($run)<1){
        
        ?>
            <script>alert('No User! Either Username Or Password Is Incorrect');
            window.open('Login1.html','_self');
            </script>
             <?php
        
    }
    else
    {
        $qry ="select adminid,firstname from admin where email='$mail' and password='$pas';";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);

        $_SESSION['ud']=$data['adminid'];
        $_SESSION['usname']=$data['firstname'];
        ?>
            <script>alert('Logged In! Welcome!');
             window.open('index.php','_self');
            </script>
             <?php
    }
        
}
else
{
    ?>
            <script>alert('Error Submitting!');
            window.open('Login1.html','_self');
            </script>
             <?php
}
}
else
{
     ?>
            <script>alert('Already Logged In!');
            window.open('index.php','_self');
            </script>
             <?php
}
?>