<?php 
// koneksi database

include '../Functions/functions.php';
 
// menangkap data yang di kirim dari form
$a = $_POST['invoiceid'];
$b = $_POST['tenant_name'];
$c = $_POST['company'];
$d = $_POST['tenant_address'];
$e = $_POST['Zip_code'];
$f = $_POST['tenant_phone'];
$g = $_POST['date'];
$h = $_POST['itemname'];
$i = $_POST['month'];
$j = $_POST['price'];
$k = $_POST['other'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO invoice VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')");  

// mengalihkan halaman kembali ke index.php
header("location:invoice-result.php");

?>