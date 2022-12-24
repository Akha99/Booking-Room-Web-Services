<?php
include '../Functions/functions.php';

// Take Data from url//
$tenantid = $_GET["tenant_id"];

//query data room based on "room id"
$qdr = query("SELECT * FROM tenant WHERE tenant_id = $tenantid")[0];

//Make sure the Submit Button
if( isset($_POST["submit"]) ){
    echo " <script>
    alert('Data is updated');
    document.location.href = 'tenantdatabase.php';
    </script>
    ";
}

if( ($_POST) > 0){

    
} else {
    echo " <script>
    alert('Your selected room already booked');
    document.location.href = 'tenantdatabase.php';
    </script>
    ";
}


if( isset($_POST["submit"]) ){
    //Take Data from each element
    $tenantid = $_POST["tenant_id"];
    $tenantname= $_POST["tenant_name"];
    $tenantadd = $_POST["tenant_address"];
    $tenantko = $_POST["tenant_ktp_no"];
    $tenantph = $_POST["tenant_phone"];
    $tenanteml = $_POST["tenant_email"];
    $tenantemrcp = $_POST["tenant_emergcp"];
    $tenantemrcpph= $_POST["tenant_emergcp_phone"];
    $tenantemrcpeml= $_POST["tenant_emergcp_email"];
    $tenantba= $_POST["tenant_bankaccount"];
    $tenantbano= $_POST["tenant_bankaccount_no"];
     
    
    // query insert data
    $query = "UPDATE tenant SET
    tenant_name           = '$tenantname',
    tenant_address        = '$tenantadd',
    tenant_ktp_no         = '$tenantko',
    tenant_phone          = '$tenantph',
    tenant_email          = '$tenanteml',
    tenant_emergcp        = '$tenantemrcp',
    tenant_emergcp_phone  = '$tenantemrcpph',
    tenant_emergcp_email  = '$tenantemrcpeml',
    tenant_bankaccount    = '$tenantba',
    tenant_bankaccount_no = '$tenantbano'
    
  
  WHERE tenant_id       = $tenantid
";

mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
    }




 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update Tenant Databases</title>
</head>
<body>
    <h2>Update Tenant Database</h2> <br><br>

    <form action="" method="post">
     
    <ul>
        
    <form>
        <div class="mb-3">
            <!--Structure-->
            <!--Q1-->
            <label for="tenant_id" class="form-label">Tenant ID</label>
            <input type="text" name="tenant_id" class="form-control" id="tenant_id" required value="<?= $qdr["tenant_id"];?>"aria-describedby="emailHelp">
            <!--Q2-->
            <label for="tenant_name" class="form-label">Tenant Name</label>
            <input type="text" name="tenant_name" class="form-control" id="tenant_name" required value="<?= $qdr["tenant_name"];?>" aria-describedby="emailHelp">
            <!--Q3-->
            <label for="tenant_address" class="form-label">Tenant Address</Address></label>
            <input type="text" name="tenant_address" class="form-control" id="tenant_address" required value="<?= $qdr["tenant_address"];?>" aria-describedby="emailHelp">
            <!--Q4-->
            <label for="tenant_ktp_no" class="form-label">Tenant KTP Number</label>
            <input type="text" name="tenant_ktp_no" class="form-control" id="tenant_ktp_no" required value="<?= $qdr["tenant_ktp_no"];?>" aria-describedby="emailHelp">
            <!--Q5-->
            <label for="tenant_phone" class="form-label">Tenant Phone Number</label>
            <input type="text" name="tenant_phone" class="form-control" id="tenant_phone" required value="<?= $qdr["tenant_phone"];?>" aria-describedby="emailHelp">
            <!--Q6-->
            <label for="tenant_email" class="form-label">Tenant Email</label>
            <input type="text" name="tenant_email" class="form-control" id="tenant_email" required value="<?= $qdr["tenant_email"];?>"aria-describedby="emailHelp">
            <!--Q7-->
            <label for="tenant_emergcp" class="form-label">Tenant Emergency Contact Person</label>
            <input type="text" name="tenant_emergcp" class="form-control" id="tenant_emergcp" required value="<?= $qdr["tenant_emergcp"];?>" aria-describedby="emailHelp">
            <!--Q8-->
            <label for="tenant_emergcp_phone" class="form-label">Tenant Emergency Phone Number</label>
            <input type="text" name="tenant_emergcp_phone" class="form-control" id="tenant_emergcp_phone" required value="<?= $qdr["tenant_emergcp_phone"];?>" aria-describedby="emailHelp">
            <!--Q9-->
            <label for="tenant_emergcp_email" class="form-label">Tenant Emergency Email</label>
            <input type="text" name="tenant_emergcp_email" class="form-control" id="tenant_emergcp_email" required value="<?= $qdr["tenant_emergcp_email"];?>" aria-describedby="emailHelp">
            <!--Q10-->
            <label for="tenant_bankaccount" class="form-label">Tenant Bank Account</label>
            <input type="text" name="tenant_bankaccount" class="form-control" id="tenant_bankaccount" required value="<?= $qdr["tenant_bankaccount"];?>" aria-describedby="emailHelp">
            <!--Q11-->
            <label for="tenant_bankaccount_no" class="form-label">Tenant Bank Account Number</label>
            <input type="text" name="tenant_bankaccount_no" class="form-control" id="tenant_bankaccount_no" required value="<?= $qdr["tenant_bankaccount_no"];?>" aria-describedby="emailHelp">

            <br><br>
            
            <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
            <a href="tenantdatabase.php" class="btn btn-primary">Back to Tenant Database</a>
         

        </form>
    </ul>
   
</form>
</body>
</html>


