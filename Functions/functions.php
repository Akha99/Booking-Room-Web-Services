<?php
//connection to database
$conn = mysqli_connect("localhost", "root", "", "indekosdb");


//FUNCTIONS QUERY//
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//FUNCTIONS ADD//
function add($roomid) {
    global $conn;
    // ## ambil data dari tiap elemen dari form
    $roomid  = $_POST["room_id"];
    $roomgen = $_POST["room_gender"];
    $roomlab = $_POST["room_label"];
    $roomloc = $_POST["room_location"];
    $roomwin = $_POST["room_window"];
    $roommc  = $_POST["room_monthly_cost"];
    $roomava = $_POST["room_availabality"];
    $roomdesc= $_POST["room_description"];
}

//FUNCTIONS DELETE ROOM//
function delete($roomid) {
    global $conn;
    mysqli_query($conn, "DELETE FROM room WHERE room_id = $roomid");

    return mysqli_affected_rows($conn);
}


//FUNCTIONS DELETE ROOM//
function deletetnt($tenantid) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tenant WHERE tenant_id = $tenantid");

    return mysqli_affected_rows($conn);
}







    //query//
    // $query = "INSERT INTO room {
    //     VALUES
    //     ('$roomid','$roomgen','$roomlab','$roomloc','$roomwin','$roommc','$roomava','$roomdesc')
    //     ";
    //     mysqli_query($conn,$query); 
    // 

