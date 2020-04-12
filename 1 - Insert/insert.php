<?php

include('connection.php');


if(isset($_POST['sub']))
{
    $email = $_POST['em'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO `crud_table`(`email`,`passwordd`) VALUES('$email','$pass')";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo "<script>
        alert('Data Inserted');
        window.location = 'welcome.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Data Not Inserted');
        window.location = 'index.php';
        </script>";
    }
    
}

?>