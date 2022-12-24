<?php
include '../Functions/functions.php';
//Make sure the Submit Button
if( isset($_POST["submit"]) ){
//Take Data from each element
$bookid = htmlspecialchars($_POST["book_id"]);
$roomid= htmlspecialchars($_POST["room_label"]);
$tenantid = htmlspecialchars($_POST["tenant_name"]);
$bsd= htmlspecialchars($_POST["book_start_date"]);
$bnd = htmlspecialchars($_POST["book_end_date"]);
$btrd = htmlspecialchars($_POST["book_tr_date"]);

$q= mysqli_query($conn,"SELECT * FROM booking WHERE room_id = '$roomid' ");
$cek = mysqli_num_rows($q);

if($cek==0){
    mysqli_query($conn,"INSERT INTO booking VALUES ('','$roomid','$tenantid','$bsd','$bnd','$btrd')");
}
else{
    echo " <script>
    alert('Your Room Already Booked by Another Tenant , Please Choose Another Room');
    document.location.href = 'bookform.php';
    </script>
    ";
}


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
    <title>Booking Form</title>
</head>
<body>
    <ul>
    <br>
    <h2>Booking Form</h2>
    </ul>
     <br>

    <form action="" method="post">
    
    <ul>
        
    <form>
        <div class="mb-3">
            <!--Structure-->
            <!--Q1-->
            <label for="book_id" class="form-label">Book ID</label>
            <input type="text" name="book_id" class="form-control" id="book_id" aria-describedby="emailHelp">

            <br>
            <!--Q2-->
            <?php $result = mysqli_query($conn,"SELECT room_label FROM room ORDER BY room_label");?>
            <form>Room Label<select name="room_label" class="form-control" aria-describedby="emailHelp">
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)){
            ?>
            <option value="<?=$row["room_label"];?>"><?=$row["room_label"];?></option><?php
            $i++;
            }
            ?>
            </select>
            <br>
            
            <!--Q3-->
            <?php $result = mysqli_query($conn,"SELECT tenant_name FROM tenant ORDER BY tenant_name");?>
            <form>Tenant Name:<select name="tenant_name" class="form-control" aria-describedby="emailHelp">
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)){
            ?>
            <option value="<?=$row["tenant_name"];?>"><?=$row["tenant_name"];?></option><?php
            $i++;
            }
            ?>
            </select>
            <br>

            <!--Q4-->
            <label for="book_start_date" class="form-label">Start Date</label>
            <input type="date" name="book_start_date" class="form-control" id="book_start_date" aria-describedby="emailHelp">
            <br>

            <!--Q5-->
            <label for="book_end_date" class="form-label">End Date</label>
            <input type="date" name="book_end_date" class="form-control" id="book_end_date" aria-describedby="emailHelp">
            <br>

            <!--Q6-->
            <label for="book_tr_date" class="form-label">Today's Date</label>
            <input type="date" name="book_tr_date"  class="form-control" id="book_tr_date" aria-describedby="emailHelp">
             

            <br><br>
            
            <button type="submit" name="submit" class="btn btn-primary">Add Data</button>
            <a href ="homeuser.php" class="btn btn-primary">Back </a></form> 
            
         

        </form>
    </ul>
   
</form>
</body>
</html>