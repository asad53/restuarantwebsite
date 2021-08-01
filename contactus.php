<?php
if(isset($_POST['submit'])){
    
    include('dbcon.php');
    

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $message = $_POST['message'];

     $qry ="INSERT INTO `contactus`(`name`, `email`, `phone`,`message`) VALUES ('$name','$email','$phone','$message')";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true){

        ?>
            <script>alert('Message Sent Successfully!');
             window.open('contactme.php','_self');
            </script>
             <?php
        
    }
    else
    {
        ?>
            <script>alert('Database Error!');
             window.open('contactme.php','_self');
            </script>
             <?php
    }
    
        
}
else
{
    ?>
            <script>alert('Error Submitting!');
            window.open('contactme.php','_self');
            </script>
             <?php
}
?>