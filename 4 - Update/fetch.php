<?php

include('connection.php');

$query = "SELECT * FROM crud_table";

$query_run = mysqli_query($connection,$query);

?>

<table border="1">
    <tr>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

<?php

    while($data = mysqli_fetch_array($query_run))
    {
        echo "<tr>
            <td>".$data['email']."</td>
            <td>".$data['passwordd']."</td>
            <td><a href='delete.php?id=".$data['id']."'>Delete</a></td>
            <td><a href='update.php?id=".$data['id']."'>Update</a></td>
        </tr>";
    }

?>
   
</table>