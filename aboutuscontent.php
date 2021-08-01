<?php
session_start();
if(isset($_POST['submit'])){
    
    include('dbcon.php');

    $vid = $_GET['vvid'];
    
    
    $title = $_POST['title'];
    $about = $_POST['about'];
    $videolink = $_POST['videolink'];

    
    if ($title=="")
    {
       $qry ="select * from aboutus;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $title=$data['title'];
    }


    if ($about=="")
    {
       $qry ="select * from aboutus;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $about=$data['about'];
    }

    if ($mainpic = $_FILES['mainpic']['name']!='')
    {

    $mainpic = $_FILES['mainpic']['name'];   //for storing name 
    $tempimgname = $_FILES['mainpic']['tmp_name'];   //for storing temporary name 
    
    move_uploaded_file($tempimgname,"images-roles/$mainpic");
    $mainpic = 'images/'.$mainpic;


    }
    else
    {
       $qry ="select * from aboutus;";
    
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $mainpic=$data['mainpicture'];
    }

    if ($minipic = $_FILES['minipic']['name']!='')
    {

         $minipic = $_FILES['minipic']['name'];   //for storing name 
    $tempimgname = $_FILES['minipic']['tmp_name'];   //for storing temporary name 
    
    move_uploaded_file($tempimgname,"images-roles/$minipic");
    $minipic = 'images/'.$minipic;

    }
    else
    {
       $qry ="select * from aboutus;";
    
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $minipic=$data['minipicture'];
    }


     if ($videolink=='')
    {
       $qry ="select * from aboutus;";
    
    $run = mysqli_query($con, $qry);
    $data=mysqli_fetch_assoc($run);
    $videolink=$data['videolink'];
    }
    

    $qry ="UPDATE aboutus set title='" .$title . "', about='" . $about . "', videolink='" . $videolink . "', mainpicture='" . $mainpic . "', minipicture='" . $minipic . "' where title='" . $vid . "';";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true) 
    {

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