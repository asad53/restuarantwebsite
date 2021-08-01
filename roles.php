<?php
session_start();
if(isset($_POST['submit'])){
    
    include('dbcon.php');

    $rid = $_GET['rrid'];
    
    
    $name = $_POST['name'];
    $about = $_POST['about'];
    $role = $_POST['role'];

    if ($imagename = $_FILES['pic']['name']!='')
    {

        $imagename = $_FILES['pic']['name'];   //for storing name 
    $tempimgname = $_FILES['pic']['tmp_name'];   //for storing temporary name 
    
    move_uploaded_file($tempimgname,"images-roles/$imagename");
    $imagename = 'images-roles/'.$imagename;

    }

    else
    {

        $qry ="select picture from officers where id='$rid';";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $imagename=$data['picture'];

    }
    
    if ($name=="")
    {
       $qry ="select name from officers where id='$rid';";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $name=$data['name'];
    }


    if ($about=="")
    {
       $qry ="select about from officers where id='$rid';";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $about=$data['about'];
    }


    if ($role=="")
    {
       $qry ="select role from officers where id='$rid';";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $role=$data['role'];
    }
    

    $qry ="UPDATE officers set name='" . $name . "', about='" . $about . "', role='" . $role . "', picture='" . $imagename . "' WHERE id='" . $rid . "';";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true) 
    {
        $con->commit();
        ?>
            <script>alert('Updated!');
             window.open('editaboutus.php','_self');
            </script>
             <?php
        
    }
    else
    {
        ?>
        <script>alert('Database Error!');
             window.open('editaboutus.php','_self');
            </script>
            
             <?php
    }
    
        
}
else
{
    ?>
            <script>alert('Error Submitting!');
            window.open('editaboutus.php','_self');
            </script>
             <?php
}
?>