<?php

include '../Functions/functions.php';
//Make sure the Submit Button
if( isset($_POST["submit"]) ){
//Take Data from each element
$tenantid = $_POST["tenant_id"];
$tenantname= $_POST["tenant_name"];
$tenantadd = $_POST["tenant_address"];
$tenantktp = $_POST["tenant_ktp_no"];
$tenantphone = $_POST["tenant_phone"];
$tenantemail = $_POST["tenant_email"];
$tenantemrg = $_POST["tenant_emergcp"];
$tenantemrgphn= $_POST["tenant_emergcp_phone"];
$tenantemrgeml= $_POST["tenant_emergcp_email"];
$tenantbankacc = $_POST["tenant_bankaccount"];
$tenantbankno = $_POST["tenant_bankaccount_no"];

// query insert data
$query = "INSERT INTO tenant
            VALUES
            ('$tenantid','$tenantname','$tenantadd',' $tenantktp ','$tenantphone','$tenantemail','$tenantemrg','$tenantemrgphn','$tenantemrgeml','$tenantbankacc','$tenantbankno')
            ";
            mysqli_query($conn,$query); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/tenant_form.css">
    <title>Tenant Registration Form</title>
</head>
<body>
    <ul>
        <br>
    <h2>Tenant Form Registration</h2>
    </ul>
    <br>

    <form action="" method="post">
    
    <ul>
    <form>
        <div class="mb-3">
            <!--Structure-->
            <!--Q1-->
            <label for="tenant_id" class="form-label">Tenant ID</label>
            <input type="text" name="tenant_id" class="form-control" id="tenant_id" aria-describedby="emailHelp">
            <br>
            <!--Q2-->
            <label for="tenant_name" class="form-label">Tenant Name</label>
            <input type="text" name="tenant_name" class="form-control" id="tenant_name" aria-describedby="emailHelp">
            <br>
            <!--Q3-->
            <label for="tenant_address" class="form-label">Tenant Address</label>
            <input type="text" name="tenant_address" class="form-control" id="tenant_address" aria-describedby="emailHelp">
            <br>
            <!--Q4-->
            <label for="tenant_ktp_no" class="form-label">Tenant KTP Number</label>
            <input type="text" name="tenant_ktp_no" class="form-control" id="tenant_ktp_no" aria-describedby="emailHelp">
            <br>
            <!--Q5-->
            <label for="tenant_phone" class="form-label">Tenant Phone Number</label>
            <input type="text" name="tenant_phone" class="form-control" id="tenant_phone" aria-describedby="emailHelp">
            <br>
            <!--Q6-->
            <label for="tenant_email" class="form-label">Tenant E-mail</label>
            <input type="text" name="tenant_email" class="form-control" id="tenant_email" aria-describedby="emailHelp">
            <br>
            <!--Q7-->
            <label for="tenant_emergcp" class="form-label">Tenant Emergency Contact Person</label>
            <input type="text" name="tenant_emergcp" class="form-control" id="tenant_emergcp" aria-describedby="emailHelp">
            <br>
            <!--Q8-->
            <label for="tenant_emergcp_phone" class="form-label">Tenant Emergency Contact Person Phone Number</label>
            <input type="text" name="tenant_emergcp_phone" class="form-control" id="tenant_emergcp_phone" aria-describedby="emailHelp">
            <br>
            <!--Q9-->
            <label for="tenant_emergcp_email" class="form-label">Tenant Emergency Contact Person E-mail</label>
            <input type="text" name="tenant_emergcp_email" class="form-control" id="tenant_emergcp_email" aria-describedby="emailHelp">
            <br>
            <!--Q10-->
            <label for="tenant_bankaccount" class="form-label">Tenant Bank Account</label>
            <input type="text" name="tenant_bankaccount" class="form-control" id="tenant_bankaccount" aria-describedby="emailHelp">
            <br>
            <!--Q11-->
            <label for="tenant_bankaccount_no" class="form-label">Tenant  Bank Account Number</label>
            <input type="text" name="tenant_bankaccount_no" class="form-control" id="tenant_bankaccount_no" aria-describedby="emailHelp">
            <br>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href ="homeuser.php" class="btn btn-primary">Back </a></form>    
    
            <ul>
      </form>
</form>
</body>
</html>