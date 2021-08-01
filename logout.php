<?php
 session_start();
if (isset($_SESSION['ud']))
{
	$_SESSION['ud']=NULL;

//logout.php

include('config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

 ?>

        <script>alert("Logged Out");
          window.open('index.php','_self');</script>
        <?php
}
else
{
	?>

        <script>alert("Not Logged In");
        window.open('index.php','_self');</script>
        <?php

}
?>
