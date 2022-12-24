<?php 

include '../Functions/functions.php';

$roomid = $_GET["room_id"];

if( delete($roomid) > 0 ) {
    echo " <script>
    alert('Data is deleted');
    document.location.href = 'roomdatabase.php';
    </script>
    ";
   
}else {
    echo " <script>
    alert('Data is failed to be deleted');
    document.location.href = 'roomdatabase.php';
    </script>
    ";
}

?>