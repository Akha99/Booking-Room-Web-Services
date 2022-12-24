<?php
include '../Functions/functions.php';
//Make sure the Submit Button
if( isset($_POST["submit"]) ){
//Take Data from each element
$roomid = $_POST["room_id"];
$roomgen= $_POST["room_gender"];
$roomlab = $_POST["room_label"];
$roomloc = $_POST["room_location"];
$roomwin = $_POST["room_window"];
$roommc = $_POST["room_monthly_cost"];
$roomava = $_POST["room_availabality"];
$roomdesc= $_POST["room_description"];
 

// query insert data
$query = "INSERT INTO room
            VALUES
            ('$roomid','$roomgen','$roomlab','$roomloc','$roomwin','$roommc','$roomava','$roomdesc')
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
    <title>Add Room Databases</title>
    <link rel="stylesheet" href="../style/room_fom.css">
</head>
<body><ul>
    <br>
    <h2 >Add Room Database</h2> <br>

    <form action="" method="post">
    </ul>
    <ul>
        
    <form>
        <div class="mb-3">
            <!--Structure-->
            <!--Q1-->
            <label for="room_id" class="form-label">Room ID</label>
            <input type="text" name="room_id" class="form-control" id="room_id" aria-describedby="emailHelp">
            <br>
            <!--Q2-->
            <label for="room_gender" class="form-label">Room Gender</label>
            <input type="text" name="room_gender" class="form-control" id="room_gender" aria-describedby="emailHelp">
            <br>
            <!--Q3-->
            <label for="room_label" class="form-label">Room Label</label>
            <input type="text" name="room_label" class="form-control" id="room_label" aria-describedby="emailHelp">
            <br>
            <!--Q4-->
            <label for="room_location" class="form-label">Room Location</label>
            <input type="text" name="room_location" class="form-control" id="room_location" aria-describedby="emailHelp">
            <br>
            <!--Q5-->
            <label for="room_window" class="form-label">Room Window</label>
            <input type="text" name="room_window" class="form-control" id="room_window" aria-describedby="emailHelp">
            <br>
            <!--Q6-->
            <label for="room_monthly_cost" class="form-label">Room Monthly Cost</label>
            <input type="text" name="room_monthly_cost" class="form-control" id="room_monthly_cost" aria-describedby="emailHelp"> 
            <br>
            <!--Q7-->
            <label for="room_availabality" class="form-label">Room Availabality</label>
            <input type="text" name="room_availabality" class="form-control" id="room_availabality" aria-describedby="emailHelp">
            <br>
            <!--Q8-->
            <label for="room_description" class="form-label">Room Description</label>
            <input type="text" name="room_description" class="form-control" id="room_description" aria-describedby="emailHelp">

            <br><br>
            
            <button type="submit" name="submit" class="btn btn-primary">Add Data</button>
            <a href="roomdatabase.php" class="btn btn-primary">Back to Room Database</a>
         

        </form>
    </ul>
   
</form>
</body>
</html>