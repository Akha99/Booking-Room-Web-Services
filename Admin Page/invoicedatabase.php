<?php 
include '../Functions/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tenant Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <ul>
    <h5>All Tenant Invoice</h5>
    </ul>

    <form method='get' class="form-control" action="invoice-result.php">
    <select name="tenant_name" aria-describedby="emailHelp">

    <?php 
 
    $query = mysqli_query($conn,"SELECT * FROM invoice");
    while ($invoice = mysqli_fetch_array($query))
        echo "<option value ='".$invoice['tenant_name']."'>".$invoice['tenant_name']. "</option>"
    

    
     ?>

</select>
<input type="submit" value="Generate"> <button><a href="homeadmin.php">Back</a></button> 

    </form>
</body>
</html>