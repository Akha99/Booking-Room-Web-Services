<?php
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "indekosdb";

$conn = new mysqli($host, $user, $password, $database);

if($conn -> connect_error){
    die("Connection failed". $conn->connect_error);
	}

$result1 = mysqli_query($conn, "SELECT tenant_name FROM tenant ORDER BY tenant_name");


?>

<?php
	
include '../Functions/functions.php';
// mengambil data barang dengan kode paling besar
	$query = mysqli_query($conn, "SELECT max(invoiceid) as kodeauto FROM invoice");
	$data1 = mysqli_fetch_array($query);
	$kodeKamar = $data1['kodeauto'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeKamar, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
  
	$huruf = "KRR";
	$kodeKamar = $huruf . sprintf("%03s", $urutan);
// ?>

 <?php
 ?>
<title>invoice form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 

    <!-- Detail Room -->
    <section class="info">
        <div class="container">
		 <br>
		<h4>Add Invoice Form</h4>

		<br><br>
		<div class="regform"><h6></h6></div>
		<div class="main">
		<form method='POST' action='invoice-aksi.php'>
			 

			<h5>Invoice ID :
            <input type="text" class="form-control" id="invoiceid" name="invoiceid" required="required" value="<?php echo $kodeKamar ?>" readonly aria-describedby="emailHelp"></h5><br>
					
			<h5>Name :
			<select name="tenant_name"  class="form-control" class="inv2" id="tenant_name" aria-describedby="emailHelp">
						<?php
						$i = 0;
						while($row = mysqli_fetch_array($result1)){
							?>
							<option value="<?=$row["tenant_name"];?>">
							<?=$row["tenant_name"];?></option>
							<?php
							$i++;
						}
						?>
					</select></h5><br>
					
			<h5>Status: 
			<input type='text'  class="form-control" id="company" name='company' aria-describedby="emailHelp"></h5><br>

			<h5>Address :
			<input type='text'  class="form-control" id="tenant_address" name='tenant_address' aria-describedby="emailHelp"></h5><br>
			
			<h5>City, ST ZIP Code : 
			<input type='text'  class="form-control" id="Zip_code" name='Zip_code' aria-describedby="emailHelp" /></h5><br>
			
			<h5>Phone : 
			<input type='text'  class="form-control" id="tenant_phone" name='tenant_phone' aria-describedby="emailHelp" /></h5><br>
			
			<h5>Invoice date :
			<input type='date'  class="form-control" id="date" name='date' aria-describedby="emailHelp"/></h5><br>

			<!-- Data of Table -->
			<h4>ITEM </h4>
			<h5>Name Rent :
			<input type='text'  class="form-control" id="itemname" name='itemname' aria-describedby="emailHelp"/></h5><br>
			
			<h5>Number of months : 
			<input type='number'  class="form-control" id="month" name='month' aria-describedby="emailHelp"/></h5><br>
			
			<h5>Price : 
			Rp. <input type='number'  class="form-control" id="price" name='price' aria-describedby="emailHelp"/></h5><br>
			
			<h5>Item Other : 
			Rp. <input type='number'  class="form-control" id="other" name='other' aria-describedby="emailHelp" /></h5><br>
			

			<input type="submit"  class="edit" value="Save">&nbsp<button class="edit"><a href="homeadmin.php">Back</a></button><br>
		</form>
</div>
</div>    
</section>

     <!-- Footer -->
     <footer>
         <div class="container">
             <small>Copyright &copy; 2022. Klasik Room Rental, All Rights Reserved.</small>
         </div>
     </footer>
</body>
</html>
 
<?php 
mysqli_close($conn);
?>