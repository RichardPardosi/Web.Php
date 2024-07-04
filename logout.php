<?php
session_start();
unset($_SESSION["user"]);
session_destroy();
echo "<script>alert('Anda telah Logout')</script>";
echo "<script>window.location='index2.php';</script>";

?>