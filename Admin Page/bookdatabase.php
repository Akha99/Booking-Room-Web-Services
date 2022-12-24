<?php
include '../Functions/functions.php';

//query data from the "room" table
$result = mysqli_query($conn, "SELECT * FROM booking");

?>


<!DOCTYPE html>
<html lang="en">
<head>    

    <title>Booking Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/book_database.css">
</head>
<body>
    <ul>
     <br>   
    <h2>Booking Database</h2>
    <br>
    <div class ="btn1">
    <!-- <button><a href="invoicedatabase.php"> Invoice All Tenant</a></button>  -->
    
    <button><a href="homeadmin.php">Back</a></button> 
     
    </ul>
    <br>
    </div>

    <table border="1" cellpadding="1" cellspacing="0" class="table table-striped">
        <!--Structure-->
        <tr>
            <th>No.</th>
            <th>Book ID</th>
            <th>Room Label</th>
            <th>Tenant Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Today's Date </th>
             
        </tr>
        <?php $i= 1; ?>
        <?php  foreach( $result as $row) : ?>
        
            <tr>
            <td>
            <?= $i; ?>
            </td>
            <td>
            <?= $row["book_id"]; ?>
            </td>
            <td>
            <?= $row["room_id"]; ?>
            </td>
            <td>
            <?= $row["tenant_id"]; ?>
            </td>
            <td>
            <?= $row["book_start_date"]; ?>
            </td>
            <td>
            <?= $row["book_end_date"]; ?>
            </td>
            <td>
            <?= $row["book_tr_date"]; ?>
            </td>
             
             
        </tr>
        <?php  $i++; ?>
        <?php  endforeach; ?>
    </table>
    
     
</body>
</html>