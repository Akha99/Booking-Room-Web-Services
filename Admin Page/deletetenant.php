<?php 

include '../Functions/functions.php';

$tenantid = $_GET["tenant_id"];

if( deletetnt($tenantid) > 0 ) {
    echo " <script>
    alert('Data is deleted');
    document.location.href = 'tenantdatabase.php';
    </script>
    ";
   
}else {
    echo " <script>
    alert('Data is failed to be deleted');
    document.location.href = 'tenantdatabase.php';
    </script>
    ";
}

?>