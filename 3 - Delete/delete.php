<?php

include('connection.php');

$id = $_GET['id'];
$query = "DELETE FROM crud_table WHERE id = $id";
$query_run = mysqli_query($connection,$query);

if($query_run)
{
        echo "<script>
        alert('Data Deleted');
        window.location = 'fetch.php';
        </script>";
}
else
{
        echo "<script>
        alert('Data Not Deleted');
        window.location = 'fetch.php';
        </script>";
}




?>