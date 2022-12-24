<?php
include '../Functions/functions.php';

//query data from the "room" table
$result = mysqli_query($conn, "SELECT * FROM tenant");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Tenant Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/tenant_database.css">
</head>
<body>
    <ul>
        <br>
    <h2>Tenant Database</h2>
    </ul>
    <ul>

    <div class ="btn1">
      <button><a href="homeadmin.php">Back</a></button>
      </div>
    </ul>
    <br><br>

    
    <table border="1" cellpadding="3" cellspacing="0" class="table table-striped">
        
        <!--Structure-->
        <tr>
            <th>No.</th>
            <th>Tenant ID</th>
            <th>Tenant Name</th>
            <th>Tenant Address</th>
            <th>Tenant KTP Number</th>
            <th>Tenant Phone Number</th>
            <th>Tenant E-mail</th>
            <th>Emergency Contact Person</th>
            <th>Emergency Contact Person Phone Number</th>
            <th>Emergency Contact Person E-mail</th>
            <th>Bank Account</th>
            <th>Bank Account Number</th>
            <th>Action</th>
        </tr>
        <?php $i= 1; ?>
        <?php foreach( $result as $row ) : ?>
        
            <tr>
            <td>
            <?= $i; ?>
            </td>
            <td>
            <?= $row["tenant_id"]; ?>
            </td>
            <td>
            <?= $row["tenant_name"]; ?>
            </td>
            <td>
            <?= $row["tenant_address"]; ?>
            </td>
            <td>
            <?= $row["tenant_ktp_no"]; ?>
            </td>
            <td>
            <?= $row["tenant_phone"]; ?>
            </td>
            <td>
            <?= $row["tenant_email"]; ?>
            </td>
            <td>
            <?= $row["tenant_emergcp"]; ?>
            </td>
            <td>
            <?= $row["tenant_emergcp_phone"]; ?>
            </td>
            <td>
            <?= $row["tenant_emergcp_email"]; ?>
            </td>
            <td>
            <?= $row["tenant_bankaccount"]; ?>
            </td>
            <td>
            <?= $row["tenant_bankaccount_no"]; ?>
            </td>
            <td>

                <button>
                <a href="updatetenant.php?tenant_id=<?= $row["tenant_id"]; ?>"> Update </a></button>
                <br>
                <button>
                <a href="deletetenant.php?tenant_id=<?= $row["tenant_id"]; ?>"> Delete </a>
                </button>
            </td>
        </tr>
        <?php  $i++; ?>
        <?php  endforeach; ?>
    </table>
    
   
</body>
</html>