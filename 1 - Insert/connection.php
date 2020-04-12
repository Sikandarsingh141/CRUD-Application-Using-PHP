<?php

$connection = mysqli_connect("localhost","root","","crud");

if(!$connection)
{
    echo "<script>alert('Not Connected')</script>";
}

?>