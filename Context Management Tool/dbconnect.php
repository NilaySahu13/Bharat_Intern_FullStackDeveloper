<?php
    $con=mysqli_connect("127.0.0.1","root","") or die("Connection Error");
    mysqli_select_db($con,"cmt") or die("Database Selection Error");
?>