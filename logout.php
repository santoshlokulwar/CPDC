
<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['utype']);
                  
 session_destroy();
 echo  "alert('logged out');";
 header("location:login.php",true);
?>