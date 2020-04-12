<?php

include('connection.php');

if(isset($_POST['sub']))
{
    $id = $_GET['id'];
    $email = $_POST['em'];
    $pass = $_POST['pass'];

    $query1 = "UPDATE crud_table SET email='$email',passwordd='$pass' WHERE id=$id";

    $query_runn = mysqli_query($connection,$query1);

    if($query_runn)
    {
        echo "<script>
        alert('Data Updated');
        window.location = 'fetch.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Data Not Updated');
        window.location = 'fetch.php';
        </script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1 align="center">Update Data</h1>

    <center>
    <form method="post">
        Email: <input type="text" name="em"><br><br>
        Password: <input type="password" name="pass"><br><br>
        <input type="submit" name="sub">
    </form>
    </center>

</body>
</html>